<?php get_header(); ?>
    <!-- Hero Area Start -->
    <div class="hero-area hero-height2 d-flex align-items-center" data-background="<?php bloginfo('template_directory'); ?>/assets/img/hero/h2_hero.jpg">
         <div class="container">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="hero-cap text-center pt-50">
                           <h2><?php the_title(); ?> </h2>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- Hero Area End -->

      <section class="blog_area single-post-area section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                     <?php the_post_thumbnail(); ?>

                     </div>
                     <div class="blog_details">
                        <h2><?php the_title(); ?>
                        </h2>
                      <?php the_content(); ?>
                        
                     </div>
                  </div>
                 
                
               
               </div>
               <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                    
                     <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Category</h4>
                        <ul class="list cat-list">
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Resaurant food</p>
                                 <p>(37)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Travel news</p>
                                 <p>(10)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Modern technology</p>
                                 <p>(03)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Product</p>
                                 <p>(11)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Inspiration</p>
                                 <p>(21)</p>
                              </a>
                           </li>
                           <li>
                              <a href="#" class="d-flex">
                                 <p>Health Care</p>
                                 <p>(21)</p>
                              </a>
                           </li>
                        </ul>
                     </aside>
                    
                  </div>
               </div>
            </div>
         </div>
      </section>

<?php get_footer(); ?>
 