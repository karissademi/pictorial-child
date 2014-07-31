<?php
/**
 * Template Name: Full Width Widget Page.
 *
 * @package pictorial_child
 */

get_header(); ?>
<?php do_action( 'pictorial_before_fullwidth_main' ); ?>
	<div class="row" role="main">
	<?php do_action( 'pictorial_after_fullwidth_main' ); ?>
        <div class="span12">
            <?php do_action( 'pictorial_before_fullwidth_content' ); ?>
			
			
				<article class="hentry">
					<?php dynamic_sidebar('sidebar_login'); ?>
				</article>

			
			<?php do_action( 'pictorial_after_fullwidth_endwhile' ); ?>
        </div>
	</div><!-- #content -->

<?php get_footer(); ?>
