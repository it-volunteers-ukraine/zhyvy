   <div class="work-wrapper">

       <div class="work-titles">
           <h2 class="title-gradient-h2"><?php the_title(); ?></h2>
           <?php if ( get_field( 'sub_title' ) ) { ?>
           <h3 class="work-subtitle"><?php the_field( 'sub_title' ); ?></h3>
           <?php } ?>

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
           <div class="button-arrow--small button-next">
               <!-- <svg width="24" height="24">
                   <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/sprite.svg#icon-arrow-24">
                   </use>
               </svg> -->
               <svg >
                   <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
               </svg>
           </div>
           <div class="button-arrow--small button-prev">
               <svg >
                   <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
               </svg>
           </div>
       </div>

       <div class="work-text-content">
           <div class="work-text-wrapper">
               <?php the_field( 'text' ); ?>
           </div>

           <?php if ( get_field( 'motivational_text' ) ) { ?>
           <div class="work-motivation-wrapper">
               <?php if ( get_field( 'motivational_text' ) ) { ?>
               <p><?php the_field( 'motivational_text' ); ?></p>

               <div class="btn-wrapper">
                   <?php
                    $buttons = get_field('motivation_buttons');

                    if ($buttons) {

                        if (in_array('phone', $buttons, true) && in_array('email', $buttons, true)) :?>

                   <a href="tel:<?php the_field('phone_hotline', 'option'); ?>" target="_blank"
                       aria-label="Зв'язатись за допомогою телефону" class="button--outlined phone-btn">
                       <span>
                           <svg width="17" height="17"
                               fill="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#phone-gradient">
                               <use href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#icon-phone_24">
                               </use>
                           </svg>
                           <p class="text"><?php the_field('phone_hotline_display', 'option'); ?></p>
                       </span>
                   </a>
                   <a href="mailto:<?php the_field( 'email', 'option' ); ?>" target="_blank"
                       aria-label="Зв'язатись за допомогою електронної пошти" class="button--email work-btn-email">
                       <svg width="18" height="18">
                           <use href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#icon-mail"></use>
                       </svg>
                       <?php the_field('text_email_btn'); ?>
                   </a>

                   <?php elseif (in_array('phone', $buttons, true)) :?>

                   <a href="tel:<?php the_field('phone_hotline', 'option'); ?>" target="_blank"
                       aria-label="Зв'язатись за допомогою телефону" class="button--outlined phone-btn">
                       <span>
                           <svg width="17" height="17"
                               fill="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#phone-gradient">
                               <use href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#icon-phone_24">
                               </use>
                           </svg>
                           <p class="text"><?php the_field('phone_hotline_display', 'option'); ?></p>
                       </span>
                   </a>

                   <?php elseif (in_array('email', $buttons, true)) :?>

                   <a href="mailto:<?php the_field( 'email', 'option' ); ?>" target="_blank"
                       aria-label="Зв'язатись за допомогою електронної пошти" class="button--email work-btn-email">
                       <svg width="18" height="18">
                           <use href="<?php bloginfo('template_url'); ?>/assets/images/sprite.svg#icon-mail"></use>
                       </svg>
                       <?php the_field('text_email_btn'); ?>
                   </a>
                   <?php endif;}?>

               </div>
               <?php } ?>
           </div>
           <?php } ?>
       </div>


   </div>