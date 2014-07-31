<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package pictorial
 */

get_header(); ?>

<div class="container">
	<div class="row" role="main">
        <div class="span12">
                <div class="post-0 bp_docs type-bp_docs status-publish hentry">
                        <?php //do_action( 'pictorial_before_content' ); ?>

                            <?php if ( get_theme_mod( 'pictorial_intro_title_visibility' ) != 1 ) { ?>
                                <?php if ( get_theme_mod( 'pictorial_intro_title' ) ) : ?>
                                    <h2><?php esc_html_e(get_theme_mod( 'pictorial_intro_title' )); ?></h2>
                                <?php else : ?>
                                    <h2>Replace This With Your Catchy Intro Title!</h2>
                                <?php endif; ?>
                            <?php } ?>

                            <?php if ( get_theme_mod( 'pictorial_intro_text' ) ) : ?>
                                <p><?php echo get_theme_mod( 'pictorial_intro_text' ); ?></p>
                            <?php else : ?>
                                <p>This is an introduction section of the theme - the content for this section can be changed via the theme's customizer. Add text, an image or a video to grab all that important reader attention!</p>
                            <?php endif; ?>


                <div class="ui buttons">
                    <?php if ( get_theme_mod( 'pictorial_intro_learn_button_text' ) ) : ?>
                        <div class="ui button">
                            <a href="<?php echo esc_url(get_theme_mod( 'pictorial_intro_learn_button_url' )); ?>" target="<?php echo get_theme_mod( 'pictorial_learn_button_url_target' ); ?>" />
                            <?php esc_html_e(get_theme_mod( 'pictorial_intro_learn_button_text' )); ?></a>
                        </div>
                    <?php else : ?>
                        <div class="ui button">Learn More</div>
                    <?php endif; ?>
                    <div class="or"></div>
                    <?php if ( get_theme_mod( 'pictorial_intro_signup_button_text' ) ) : ?>
                        <div class="ui positive button">
                            <a href="<?php echo esc_url(get_theme_mod( 'pictorial_intro_signup_button_url' )); ?>" target="<?php echo get_theme_mod( 'pictorial_signup_button_url_target' ); ?>" />
                            <?php esc_html_e(get_theme_mod( 'pictorial_intro_signup_button_text' )); ?></a>
                        </div>
                    <?php else : ?>
                        <div class="ui positive button">Sign Up</div>
                    <?php endif; ?>
                </div>
                        </div><!-- #content -->

                    </div><!-- #primary -->

   </div><!-- row -->

</div>

<?php get_footer(); ?>