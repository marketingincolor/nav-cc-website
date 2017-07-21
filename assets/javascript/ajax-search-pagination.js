jQuery(function($){
    $('.search-page').after( '<div class="row"><div class="small-6 medium-3 large-2 small-centered columns text-center"><div class="load-more-search blue-btn">Load More</div></div></div>' );
    var search_button = $('.load-more-search');
    var page = 2;
    var loading = false;
    var maxpage = ccarchiveloadmore.maxpage;
    var offset = ccarchiveloadmore.offset;
    //console.log("Max Page: " + maxpage);


    $('body').on('click', '.load-more-search', function(){
        offset= parseInt(offset) + 2;
        search_button.remove();
        $('.spinner').fadeIn( "slow" );

        if( ! loading ) {
            search_button.show();
            $(".spinner").fadeOut( "fast" );
            loading = true;
            //$('.post-listing .load-more').css("");
            var data = {
                action: 'be_ajax_load_more',
                page: page,
                offset: parseInt(offset),
                query: beloadmore.query,
            };
            $.post(beloadmore.url, data, function(res) {
                if( res.success) {
                    $('.post-listing').append( res.data );
                        $('.load-more-search').remove();

                    if( page >= maxpage) {
                        // If last page, remove "load more" search_button and replace with "No more articles" text.
                        $('.load-more-search').remove();
                        $('#search-results .content-wrapper div.row.post-listing.search-page').after( '<div class="small-12 columns small-centered text-center"><div class="no-more-posts">NO MORE POSTS</div></div>' );
                    } 
                    else {
                        $('#search-results .content-wrapper div.row.post-listing.search-page').append( '<div class="small-6 medium-3 large-2 small-centered columns text-center"><div class="load-more-search blue-btn">Load More</div></div>' );
                    }
                    page = page + 1;
                    loading = false;
                    //console.log(res);
                    search_button.remove();
                } else {
                     //console.log(res);
                }
            

            }).fail(function(xhr, textStatus, e) {
                 //console.log(xhr.responseText);
            });
        }
    });
        
});