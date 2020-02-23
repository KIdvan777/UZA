jQuery(document).ready(function($){
    var portfolio = $('.container-fluid');

    // $.getJSON('http://uza/wp-json/wp/v2/portfolio', function(posts){
    //     console.log(posts);
    // });

    $('#load_more_btn').on('click', function(){
        // portfolio.append( "<p>Test</p>" );

        $.getJSON('http://uza/wp-json/wp/v2/portfolio', function(posts){
            console.log(posts[0].title);
            portfolio.append('<div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item ux-ui-design"><div class="single-portfolio-slide"><!-- Overlay Effect --><img width="600" height="600" src="http://uza/wp-content/uploads/2020/02/11.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="" srcset="http://uza/wp-content/uploads/2020/02/11.jpg 600w, http://uza/wp-content/uploads/2020/02/11-300x300.jpg 300w, http://uza/wp-content/uploads/2020/02/11-150x150.jpg 150w" sizes="(max-width: 600px) 100vw, 600px"><div class="overlay-effect"><h4>'+ posts[0].title.rendered + '</h4><p> Content </p></div><!-- View More --><div class="view-more-btn"><a href="#"><i class="arrow_right"></i></a></div></div></div>');
        });
    });
});
