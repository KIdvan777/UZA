<?php get_header('uza'); ?>

<!-- ***** Breadcrumb Area Start ***** -->
    <div class="breadcrumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcumb--con">
                        <h2 class="title">Portfolio</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Background Curve -->
        <div class="breadcrumb-bg-curve">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/core-img/curve-5.png'; ?>" alt="">
        </div>
    </div>
    <!-- ***** Breadcrumb Area End ***** -->

    <!-- ****** Gallery Area Start ****** -->
    <section class="uza-portfolio-area section-padding-80">

        <!-- Portfolio Menu -->

        <div class="portfolio-menu text-center mb-80">
            <button class="btn active" data-filter="*">All Portfolio</button>
            <?php
                $portfolio_tabs = get_terms('portfolio_cat');
                // pr($portfolio_tabs);
                    foreach($portfolio_tabs as $port_cat):
                        ?>
                            <button class="btn" data-filter="<?php echo '.' . $port_cat->slug; ?>"><?php echo $port_cat->name; ?></button>
                        <?
                    endforeach;
            ?>
        </div>

        <div class="container-fluid">
            <div class="row uza-portfolio">

                <!-- Single Portfolio Item -->
                <?php
                $portfolio_cats = get_terms('portfolio_cat');
                foreach($portfolio_cats as $port_cat):

                    $args = array(
                        'posts_per_page' => 3,
                        'post_type' => 'portfolio',
                        'portfolio_cat' => $port_cat->slug,

                    );
                    $all = new WP_Query($args);
                    // pr($design);

                    if($all->have_posts()){
                        while( $all->have_posts() ){
                            $all->the_post();
                            ?>
                            <!-- Single Portfolio Item -->
                               <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item <?php echo $port_cat->slug; ?>">
                                   <div class="single-portfolio-slide">
                                       <?php the_post_thumbnail(); ?>
                                       <!-- Overlay Effect -->
                                       <div class="overlay-effect">
                                           <h4><?php the_title(); ?></h4>
                                           <p><?php the_content(); ?></p>
                                       </div>
                                       <!-- View More -->
                                       <div class="view-more-btn">
                                           <a href="<?php the_permalink();?>"><i class="arrow_right"></i></a>
                                       </div>
                                   </div>
                               </div>
                            <?
                        }
                    }else{
                        ?>
                            <p>No Posts</p>
                        <?
                    }wp_reset_postdata();
                endforeach; ?>
            </div>

            <div class="row">
                <div class="col-12 text-center mt-30">
                    <a href="#" class="btn uza-btn btn-3">Load More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ****** Gallery Area End ****** -->

    <!-- ***** Newsletter Area Start ***** -->
    <section class="uza-newsletter-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <!-- Newsletter Content -->
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="nl-content mb-80">
                        <h2>Subscribe to our Newsletter</h2>
                        <p>Subscribe our newsletter gor get notification about new updates, etc...</p>
                    </div>
                </div>
                <!-- Newsletter Form -->
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="nl-form mb-80">
                        <form action="#" method="post">
                            <input type="email" name="nl-email" value="" placeholder="Your Email">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Border Bottom -->
            <div class="border-line"></div>
        </div>
    </section>
    <!-- ***** Newsletter Area End ***** -->
<?php get_footer(); ?>
