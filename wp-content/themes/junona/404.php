<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package junona
 */

get_header(); ?>

    <!-- Content -->
    <main>
        <section class="not-found-page">
            <h1><?php echo __('Упс, эта страница пуста', 'junona');?></h1>
            <span>404</span>
            <a href="<?= home_url(); ?>" class="base-btn"><?php echo __('НА ГЛАВНУЮ', 'junona');?></a>
        </section>
    </main>
    <!-- End content -->
<style>
    .not-found-page{
        background: url(<?php bloginfo('template_url'); ?>/img/404-bg.jpg) no-repeat;
        background-size: cover;
    }
</style>

<?php
get_footer();
