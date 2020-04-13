$('.carousel .vertical .item').each(function(){
    var next = $(this).next();
    if (!next.length) {
      next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i=1;i<2;i++) {
      next=next.next();
      if (!next.length) {
          next = $(this).siblings(':first');
        }
      next.children(':first-child').clone().appendTo($(this));
      bindFirstNewItem();
    }
  });

  function bindFirstNewItem() {
    var firstItem = $('.carouselTopKeywords .vertical .item')[0];
    var urlToImage = $(firstItem).find('.img')[0].src;
    var urlToPost = $(firstItem).find('a')[0].href;
    var title = $(firstItem).find('.hdnTitle')[0].value;
    var description = $(firstItem).find('.hdnDescription')[0].value;
    var publishedAt = $(firstItem).find('.hdnPublishedAt')[0].value;
    var author = $(firstItem).find('.hdnAuthor')[0].value;
    var keyword = $(firstItem).find('.hdnKeyword')[0].value;
    $('.divTopKeywordFrontNews').find('h5').text(title);
    $('.divTopKeywordFrontNews').find('img').attr('src', urlToImage);
    $('.divTopKeywordFrontNews').find('a.hrefImg').attr('href', urlToPost);
    $('.divTopKeywordFrontNews').find('a.hrefDesc').attr('href', urlToPost);
    $('.divTopKeywordFrontNews').find('.hrefDesc').text(description);
    $('.divTopKeywordFrontNews').find('.authorAndDate').text("Author: " + author + " | Published At: " + publishedAt);
    $('.divTopKeywordFrontNews').find('.hdnKeyword').val(keyword);
    getTopKeyWordAllNewsByKeyword(keyword);
  }

$('.carouselTopKeywords').on('slide.bs.carousel', function (e) {
    var nextItem = $('.carouselTopKeywords .vertical .item')[$(e.relatedTarget).index()];
    var urlToImage = $(nextItem).find('.img')[0].src;
    var urlToPost = $(nextItem).find('a')[0].href;
    var title = $(nextItem).find('.hdnTitle')[0].value;
    var description = $(nextItem).find('.hdnDescription')[0].value;
    var publishedAt = $(nextItem).find('.hdnPublishedAt')[0].value;
    var author = $(nextItem).find('.hdnAuthor')[0].value;
    var keyword = $(nextItem).find('.hdnKeyword')[0].value;
    $('.divTopKeywordFrontNews').find('h5').text(title);
    $('.divTopKeywordFrontNews').find('img').attr('src', urlToImage);
    $('.divTopKeywordFrontNews').find('a.hrefImg').attr('href', urlToPost);
    $('.divTopKeywordFrontNews').find('a.hrefDesc').attr('href', urlToPost);
    $('.divTopKeywordFrontNews').find('.hrefDesc').text(description);
    $('.divTopKeywordFrontNews').find('.authorAndDate').text("Author: " + author + " | Published At: " + publishedAt);
    $('.divTopKeywordFrontNews').find('.hdnKeyword').val(keyword);
    getTopKeyWordAllNewsByKeyword(keyword);
});

function getTopKeyWordAllNewsByKeyword($keyword){
    $.ajax({
        type: "GET",
        url: '/home/search/' + $keyword,
        success: function (data,status,xhr) {   // success callback function
            if(data != null && data != undefined) {
                $('.divTopKeywordAllNewsPanel').html(data);
            } else {
                $('.divTopKeywordAllNewsPanel').html("<p>Error Loading...</p>");
            }
        },
        error: function (jqXhr, textStatus, errorMessage) { // error callback
            $('.divTopKeywordAllNewsPanel').html("<p>" + errorMessage +"</p>");
            console.log(jqXhr);
        },
        beforeSend: function (data,status,xhr) {   // success callback function
            $('.divTopKeywordAllNewsPanel').html("<p><img src='../img/ajax-loader.gif'></p>");
        },
    });
}

'use strict';

//var googleTrends = require('./lib/google-trends-api.min.js');

/* ******************* Autocomplete **************************/

$( "#txtUniversalSearch" ).autocomplete({
    source: function( request, response ) {
      $.ajax({
        url: "https://gd.geobytes.com/AutoCompleteCity",
        dataType: "jsonp",
        data: {
          q: request.term
        },
        success: function( data ) {
          response( data );
        }
      });
    },
    minLength: 3,
    select: function( event, ui ) {
      log( ui.item ?
        "Selected: " + ui.item.label :
        "Nothing selected, input was " + this.value);
    },
    open: function() {
      $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
    },
    close: function() {
      $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
    }
  });

// window.googleTrends.autoComplete({keyword: 'Back to school'})
// .then((res) => {
//   console.log('this is res', res);
// })
// .catch((err) => {
//   console.log('got the error', err);
//   console.log('error message', err.message);
//   console.log('request body',  err.requestBody);
// });

function updateDynamicKeyword(txt) {
    var keyword = $(txt).closest('div.dynamicview').find('.txtKeywordEdit').val();
    var viewName = $(txt).closest('div.dynamicview');
    var viewNameId = $(txt).closest('div.dynamicview')[0].id;
    var keywordName = $(txt).closest('div.dynamicview').find('.hdnKeywordName').val();
    try{
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: '/home/updateDynamicView',
            data: { 'viewName': viewNameId, 'keyword': keyword, 'keywordName': keywordName },
            success: function (data,status,xhr) {   // success callback function
                if(data != null && data != undefined) {
                    $(viewName).html(data);
                } else {
                    $(viewName).html("<p>Error Loading...</p>");
                }
            },
            error: function (jqXhr, textStatus, errorMessage) { // error callback
                $('.divTopKeywordAllNewsPanel').html("<p>" + errorMessage +"</p>");
                console.log(jqXhr);
            },
            beforeSend: function (data,status,xhr) {   // success callback function
                $('.divTopKeywordAllNewsPanel').html("<p><img src='../img/ajax-loader.gif'></p>");
            },
        });
    } catch (e) {
        console.log(e);
    }
}

$('.txtKeywordEdit').each(function(e) {
    console.log(this);
    updateDynamicKeyword(this);
});

function dynamicViewNewsDetail(div, divToUpdate) {
    var jsonData = JSON.parse($(div).find('.hdnArticle').val());
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: '/home/dynamicviewnewsdetail',
        data: { 'jsonData': jsonData, 'viewName': divToUpdate },
        success: function (data,status,xhr) {   // success callback function
            if(data != null && data != undefined) {
                $('.'+divToUpdate).html(data);
            } else {
                $('.'+divToUpdate).html("<p>Error Loading...</p>");
            }
        },
        error: function (jqXhr, textStatus, errorMessage) { // error callback
            $('.'+divToUpdate).html("<p>" + errorMessage +"</p>");
            console.log(jqXhr);
        },
        beforeSend: function (data,status,xhr) {   // success callback function
            $('.'+divToUpdate).html("<p><img src='../img/ajax-loader.gif'></p>");
        },
    });
}

function dynamicHeaderDropdownNews(div, divToUpdate) {
    var keyword = $(div).find('a').text();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: '/home/dynamicHeaderDropdownNews',
        data: { 'keyword': keyword, 'viewName': divToUpdate },
        success: function (data,status,xhr) {   // success callback function
            if(data != null && data != undefined) {
                $('.'+divToUpdate).html(data);
            } else {
                $('.'+divToUpdate).html("<p>Error Loading...</p>");
            }
        },
        error: function (jqXhr, textStatus, errorMessage) { // error callback
            $('.'+divToUpdate).html("<p>" + errorMessage +"</p>");
            console.log(jqXhr);
        },
        beforeSend: function (data,status,xhr) {   // success callback function
            $('.'+divToUpdate).html("<p><img src='../img/ajax-loader.gif'></p>");
        },
    });
}
