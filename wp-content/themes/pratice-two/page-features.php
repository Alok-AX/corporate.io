<?php get_header(); ?>

<main>
      <!-- Hero Area Start -->
      <div class="hero-area hero-height2 d-flex align-items-center" data-background="<?php bloginfo('template_directory'); ?>/assets/img/hero/h2_hero.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center pt-100">
                            <h2>Features</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->

            <!-- Our Services Start -->
            <div class="our-services  pt-50 pb-150">
                <div class="container">
                    <div class="row">
                    <?php $slide_post=new WP_Query(array(
                            'posts_per_page'=>'-1',
                            'post_type'=>'features_post',
                            'order'=>'DESC'
                        ));
                        while($slide_post->have_posts())
                        { $slide_post-> the_post() ;  ?>
                        <div class=" col-lg-4 col-md-6 col-sm-6">
                            <a href="<?php the_permalink(); ?>">
                            <div class="single-services text-center mb-30">
                                <div class="services-ion">
                                <?php the_post_thumbnail(); ?>
                                    <!-- <span class="flaticon-experience"></span> -->
                                </div>
                                <div class="services-cap">
                                    <h5>Strategic Planning</h5>
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                            </a>
                        </div>

                        <?php } ?>
          
        </div>
    </div>
</div>
<!-- Our Services End -->
</main>





<?php get_footer(); ?>
