<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Sydney
 */

get_header(); ?>
<style type="text/css">
    .preloader{
        display: flex !important;
        opacity: 1 !important;
    }
</style>
<div class="not-found" style="display: none">
    <div class="wrap">
        <p>Proszę czekać</p>
        <h1>Trwa przekierowanie</h1>
    </div>
</div>

<?php get_footer(); ?>
