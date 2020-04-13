<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Http;
use Config;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer(['partials.header', 'partials.footer', 'partials.newssources'], function ($view) {
            $view->with([ 'sources' => $this->getSources(), 'countries' => $this->getCountries() ]); // bind data to view
        });
    }

    private function getSources()
    {
        $this->apiKey = env('NEWSAPI_KEY');
        $this->baseUrl = env('NEWSAPI_BASEURL');
        $sourcesResponse = Http::withHeaders([
            'Authorization' => $this->apiKey,
        ])->get($this->baseUrl.'/sources');
        $body = $sourcesResponse->json();
        //var_dump($body);
        $sources = null;
        if ($body['status'] == Config::get('constants.httpStatusCodes.ok')) {
            $sources = $body['sources'];
        }
        return $sources;
    }

    private function getCountries()
    {
        $this->baseCountryUrl = env('COUNTRY_BASEURL');
        $sourcesResponse = Http::withHeaders([
        ])->get($this->baseCountryUrl);
        $countries = $sourcesResponse->json();
        return $countries;
    }
}
