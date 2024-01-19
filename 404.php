<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp-it-volunteers
 */

get_header();
?>

<main class="container">

    <section class="not-found-section">

        <h1 class="title "><?php esc_html_e( 'Сторінку не знайдено', 'wp-it-volunteers' ); ?> </h1>
        <p class="text">Неправильно набрано адресу, або такої сторінки на сайті більше не існує. </p>
        <a class="button--medium button--transparent" href="<?php echo esc_url( home_url( '/' ) ); ?>">Перейти на
            головну
            сторінку</a>

    </section>

</main>

<?php
get_footer();