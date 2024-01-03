<?php
/*
Template Name: gallery
*/
get_header();
?>

<main>
    <section class="gallery-page">
        <div class="page-top-banner">
            <h1 class="title-page"><?php echo esc_html( get_field('title') ); ?></h1>
        </div>
        <div class="container">    
            <article class="gallery-card">
                <div class="gallery-image">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a>
                                    <img src="https://img.freepik.com/free-photo/forest-landscape_71767-127.jpg?w=1380&t=st=1704209797~exp=1704210397~hmac=5b4f6ccd98ff906b0b2fd5e388202bf25e2c64734e9ba12339d16e797d286a21" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="button-arrow--small button-prev">
                            <svg width="7.8" height="12.7">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                            </svg>
                        </div>
                        <div class="button-arrow--small button-next">
                            <svg width="7.8" height="12.7">
                                <use href="<?php bloginfo( 'template_url' ); ?>/assets/images/symbol-defs.svg#chevron-right"></use>
                            </svg>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div class="gallery-card-content">
                    <h2 class="title-gradient-h2">єдність до перемоги</h2>
                    <div class="gallery-card-date">24 серпня 2023</div>
                    <p class="gallery-card-text">Текст про захід. Громадська Організація, Центр Психокорекції та Школа Тверезого і Офігєнного 
                        Життя —  це три найменування, які віддзеркалюють різноманіття наших напрямків, спрямованих на підтримку та розвиток тверезого та насиченого життя.Профілактичний Проект ЖИВИ виріс до статусу Громадська Організація ЖИВИ Громадська Організація, Центр Психокорекції та Школа Тверезого і Офігєнного Життя —  це три найменування, які віддзеркалюють різноманіття наших 
                    </p>
                </div>
            </article>
                      
            <div class="pagination">
               
            </div>
        </div>

    </section>

</main>




<?php get_footer(); ?>