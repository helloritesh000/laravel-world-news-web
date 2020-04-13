<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use Config;
use DOMDocument;
use App\Exceptions\Handler;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->apiKey = env('NEWSAPI_KEY');
        $this->baseUrl = env('NEWSAPI_BASEURL');
        $this->baseCountryUrl = env('COUNTRY_BASEURL');
    }
    //
    public function index()
    {
        $topHeadlinesResponse = Http::withHeaders([
            'Authorization' => $this->apiKey,
        ])->get($this->baseUrl.'/top-headlines?country=india');
        $body = $topHeadlinesResponse->json();
        //var_dump($body);
        $topArticles = null;
        if ($body['status'] == Config::get('constants.httpStatusCodes.ok')) {
            $topArticles = $body['articles'];
        }

        $sourcesResponse = Http::withHeaders([
            'Authorization' => $this->apiKey,
        ])->get($this->baseUrl.'/sources');
        $body = $sourcesResponse->json();
        //var_dump($body);
        $sources = null;
        if ($body['status'] == Config::get('constants.httpStatusCodes.ok')) {
            $sources = $body['sources'];
        }

        $topKeywords = Config::get('constants.topKeywords');
        $topKeywordFirstNewsList = collect();
        foreach($topKeywords as $keyword)
        {
            $singleNews = $this->getTopKeyWordFirstNews($keyword);
            $tempArray = (array)$singleNews;
            $tempArray['keyword'] = $keyword;
            $singleNewsModified = $tempArray;
            //var_dump($singleNewsModified);return;
            $topKeywordFirstNewsList->push($singleNewsModified);
        }
        //var_dump($topKeywordFirstNewsList);return;
        // $firstTopCategoryResponse = Http::withHeaders([
        //     'Authorization' => '184420637abf4d8bb93374c8e058c2ab',
        // ])->get('http://newsapi.org/v2/everything?q=%s', $topKeywords[0]);
        // $body = $firstTopCategoryResponse->json();
        // //var_dump($body);
        // $sources = null;
        // if ($body['status'] == Config::get('constants.httpStatusCodes.ok')) {
        //     $sources = $body['articles'];
        // }

        //var_dump($topArticles);

        $keywordsXml = $this->readXml();
        //var_dump($keywordsXml);return;
        return view('home.index')->with([
            'topArticles' => $topArticles,
            //'sources' => $sources,
            'topKeywordFirstNewsList' => $topKeywordFirstNewsList,
            'keywordsXml' => $keywordsXml
            ]);
    }

    private function getKeyWordSearchNews($keyword)
    {
        if(!isset($this->baseUrl))
            $this->baseUrl = env('NEWSAPI_BASEURL');
        if(!isset($this->baseUrl))
            $this->apiKey = env('NEWSAPI_KEY');
        $topCategoryResponse = Http::withHeaders([
            'Authorization' => $this->apiKey,
        ])->get(sprintf($this->baseUrl.'/everything?q=%s', $keyword));
        $body = $topCategoryResponse->json();

        $newsList = null;
        if ($body['status'] == Config::get('constants.httpStatusCodes.ok')) {
            $newsList = $body['articles'];
        }
        //var_dump($newsList);
        //return;
        return $newsList;
    }

    private function getKeyWordSearchNewsWithTotalCount($keyword)
    {
        $topCategoryResponse = Http::withHeaders([
            'Authorization' => $this->apiKey,
        ])->get(sprintf($this->baseUrl.'/everything?q=%s', $keyword));
        $body = $topCategoryResponse->json();

        $newsList = null;
        $totalResults = 0;
        if ($body['status'] == Config::get('constants.httpStatusCodes.ok')) {
            $newsList = $body['articles'];
            $totalResults = $body['totalResults'];
        }

        $array = collect();
        $array->put( 'totalResults', $totalResults );
        $array->put( 'newsList', $newsList );
        return $array;
    }

    private function getTopKeyWordFirstNews($keyword)
    {
        $newsList = $this->getKeyWordSearchNews($keyword);
        return (object)head($newsList);
    }

    public function getTopKeyWordAllNewsByKeyword($keyword)
    {
        //$newsList = $this->getKeyWordSearchNews($keyword);
        $newsList = null;
        return view('partials.topkeywordallnews')->with([
            'newsList' => $newsList
            ]);
    }

    public function universalsearch(Request $request)
    {
        // $keyword = $request->input('keyword');
        // $newsList = $this->getKeyWordSearchNews($keyword);
        // $newsList = null;
        // return view('partials.topkeywordallnews')->with([
        //     'newsList' => $newsList
        //     ]);

        return redirect('list');
    }

    public function list(Request $request)
    {
        $q = $request->query('q');
        $array = $this->getKeyWordSearchNewsWithTotalCount($q);
        $keywordsXml = $this->readXml();
        return view('home.list')->with([
            'newsList' => $array['newsList'],
            'totalResult' => $array['totalResults'],
            'keywordsXml' => $keywordsXml
            ]);
    }


    private function readXml()
    {
        $xml_file_name = '../storage/masterdata.xml';
        $document = new DOMDocument();
        $document->load($xml_file_name);
        $keywords = $document->getElementsByTagName('keyword');
        $array = collect();
        foreach( $keywords as $keyword )
        {
            $name = $keyword->getElementsByTagName( "name" )->item(0)->nodeValue;
            $value = $keyword->getElementsByTagName( "value" )->item(0)->nodeValue;
            //echo $name.', '.$value;
            $array->put( $name, $value );
        }
        return $array;
    }

    public function updateDynamicView(Request $request)
    {
        try{
            $viewNameToUpdate = $request->input('viewName');
            $keywordToSave = $request->input('keyword');
            $xmlKeywordName = $request->input('keywordName');
            $xml_file_name = '../storage/masterdata.xml';
            $document = new DOMDocument();
            $document->load($xml_file_name);
            $keywords = $document->getElementsByTagName('keyword');
            //$xmlFile = file_get_contents(storage_path('masterdata.xml'));
            //var_dump($document); return;
            foreach( $keywords as $keyword )
            {
                if($keyword->getElementsByTagName( "name" )->item(0)->nodeValue == $xmlKeywordName)
                    $keyword->getElementsByTagName( "value" )->item(0)->nodeValue = $keywordToSave;
            }
            $document->save($xml_file_name);
            $newsList = $this->getKeyWordSearchNews($keywordToSave);
            $keywordsXml = $this->readXml();
            //var_dump($newsList);return;
            return view('partials.'.$viewNameToUpdate)->with([
                'newsList' => $newsList,
                'keywordsXml' => $keywordsXml
                ]);
        } catch (Exception $e) {
            var_dump($e);
        }
    }

    public function dynamicviewnewsdetail(Request $request)
    {
        $jsonData = $request->input('jsonData');
        $viewName = $request->input('viewName');
        //var_dump($jsonData); return;
        return view('partials.'.$viewName)->with([
            'article' => $jsonData
            ]);
    }

    public function dynamicHeaderDropdownNews(Request $request)
    {
        $keyword = $request->input('keyword');
        $viewName = $request->input('viewName');
        $array = $this->getKeyWordSearchNewsWithTotalCount($keyword);
        //var_dump($jsonData); return;
        return view('partials.'.$viewName)->with([
            'newsList' => $array['newsList'],
            'totalResult' => $array['totalResults'],
            'keyword' => $keyword
            ]);
    }

    public function states()
    {
        $array = $this->getKeyWordSearchNewsWithTotalCount('headlines');

        $sourcesResponse = Http::withHeaders([
        ])->get($this->baseCountryUrl);
        $countries = $this->getCountries();
        $keywordsXml = $this->readXml();
        $article = $array['newsList'][0];
        return view('home.states')->with([
            'newsList' => $array['newsList'],
            'states' => $countries,
            'keywordsXml' => $keywordsXml,
            'article' => $article
             ]);
    }

    private function getCountries()
    {
        $sourcesResponse = Http::withHeaders([
        ])->get($this->baseCountryUrl);
        $countries = $sourcesResponse->json();
        return $countries;
    }

    public function contact(Request $request)
    {
        if(!isset($request->name))
        {
            return view('home.contact');
        }

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $city = $request->input('city');
        $message = $request->input('message');

        $xml_file_name = '../storage/contacts.xml';
        $document = new DOMDocument();
        $document->load($xml_file_name);
        $contact = $document->createElement('contact');
        $name = $document->createElement('name', $name);
        $email = $document->createElement('email', $email);
        $phone = $document->createElement('phone', $phone);
        $city = $document->createElement('city', $city);
        $message = $document->createElement('message', $message);
        $contact->appendChild($name);
        $contact->appendChild($email);
        $contact->appendChild($phone);
        $contact->appendChild($city);
        $contact->appendChild($message);
        $document->appendChild($contact);
        $document->save($xml_file_name);

        return redirect('home');
    }
}
