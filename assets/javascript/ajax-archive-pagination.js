jQuery(function($){
    $('.archive .post-listing').after( '<div class="row"><div class="small-6 medium-3 large-2 small-centered columns text-center"><div class="load-more-archive blue-btn">Load More</div></div></div>' );
    var button = $('.load-more-archive');
    var page = 2;
    var loading = false;
    var maxpage = ccloadmore.maxpage;
    var offset = ccloadmore.offset;
    //console.log("Max Page: " + maxpage);


    $('body').on('click', '.load-more-archive', function(){
        offset= parseInt(offset) + 2;
        button.remove();
        $('.spinner').fadeIn( "slow" );

        if( ! loading ) {
            button.show();
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
                        $('.load-more-archive').remove();

                    if( page >= maxpage) {
                        // If last page, remove "load more" button and replace with "No more articles" text.
                        $('.load-more-archive').remove();
                        $('div.row.post-listing').after( '<div class="small-12 columns small-centered text-center"><div class="no-more-posts">NO MORE POSTS</div></div>' );
                    } 
                    else {
                        $('.post-listing').append( '<div class="small-6 medium-3 large-2 small-centered columns text-center"><div class="load-more-archive blue-btn">Load More</div></div>' );
                    }
                    page = page + 1;
                    loading = false;
                    //console.log(res);
                    button.remove();
                } else {
                     //console.log(res);
                }
            

            }).fail(function(xhr, textStatus, e) {
                 //console.log(xhr.responseText);
            });
        }
    });
        
});