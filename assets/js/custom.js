jQuery(document).ready(function($){
    var portfolio = $('.container-fluid');
    var uzaUrl = 'http://uza/wp-json/wp/v2/portfolio';

    $('#load_more_btn').on('click', function(){

        // $.getJSON(uzaUrl, function(posts){
        //     console.log(posts[0].title);
        //     portfolio.append('<div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item ux-ui-design"><div class="single-portfolio-slide"><!-- Overlay Effect --><img width="600" height="600" src="http://uza/wp-content/uploads/2020/02/11.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://uza/wp-content/uploads/2020/02/11.jpg 600w, http://uza/wp-content/uploads/2020/02/11-300x300.jpg 300w, http://uza/wp-content/uploads/2020/02/11-150x150.jpg 150w" sizes="(max-width: 600px) 100vw, 600px"><div class="overlay-effect"><h4>'+ posts[0].title.rendered + '</h4><p> Content </p></div><!-- View More --><div class="view-more-btn"><a href="#"><i class="arrow_right"></i></a></div></div></div>');
        // });

        $.getJSON( uzaUrl, function(data){
                $.map( data, function( value, index ) {
                    if(index>3){
                        return null;
                    }
                    var title = value.title.rendered;
                    var content = value.content.rendered;
                    var link = value.link;
                    var src = value.featured_media;
                    var links = value._links['wp:featuredmedia'][0].href;

                console.log(links);
            });
        });
    });
});
