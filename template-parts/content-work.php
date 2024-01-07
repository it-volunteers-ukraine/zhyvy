   <div class="work-wrapper">

       <div class="work-titles">
           <h2 class="title-gradient-h2"><?php the_title(); ?></h2>
           <h3 class="work-subtitle"><?php the_field( 'sub_title' ); ?></h3>
       </div>

       <div class="carousel-wrapper">
           <div class="swiper work__gallery">
               <?php
							$images = get_field( 'gallery_images' );
							if ( $images ): ?>
               <div class="swiper-wrapper">
                   <?php foreach ( $images as $image ): ?>
                   <a class="swiper-slide" href="<?php echo esc_url( $image['url'] ); ?>" data-lightbox="galleryImages">
                       <img src="<?php echo esc_url( $image['url'] ); ?>"
                           alt="<?php echo esc_attr( $image['alt'] ); ?>">
                   </a>
                   <?php endforeach; ?>
               </div>
               <?php endif; ?>
           </div>
           <div class="button-arrow--medium button-next">
               <svg width="12" height="24">
                   <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right">
                   </use>
               </svg>
           </div>
           <div class="button-arrow--medium button-prev">
               <svg width="12" height="24">
                   <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right">
                   </use>
               </svg>
           </div>
       </div>

       <div class="work-content
       ">
           <?php the_field( 'content' ); ?>
       </div>
       <div class="work-motivation">
       </div>

   </div>