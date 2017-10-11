<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package ThemeGrill
 * @subpackage Masonic
 * @since 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post'); ?>>
   <div class="post-header clear">
      <?php
      if( get_post_format() ) {
         get_template_part( 'inc/post-formats' );
      }?>

      <div class="entry-info">
         <?php masonic_posted_on(); ?>
      </div><!-- .entry-info -->
   </div><!-- .entry-header -->

   <div class="entry-content">
      <div class="underline"></div>
      <hr>
      <?php the_content(); ?>
      <?php
      wp_link_pages(array(
          'before' => '<div class="page-links">' . __('Pages:', 'masonic'),
          'after' => '</div>',
      ));
      ?>
   </div><!-- .entry-content -->

   <?php
    if ( class_exists( 'Jetpack_Likes' ) ) {
    $custom_likes = new Jetpack_Likes;
    echo $custom_likes->post_likes( '' );
    }?>
</article><!-- #post-## -->

<?php if (get_the_author_meta('description')): ?>
   <article class="blog-post clear">
      <div class="author-box clear">
         <figure><?php echo get_avatar(get_the_author_meta('user_email'), '120'); ?></figure>
         <div class="author-box-wrap">
            <h2><?php the_author_meta('display_name'); ?></h2>
            <div class="underline"></div><hr>
            <p><?php the_author_meta('description'); ?></p>
            <?php masonic_author_links(); ?>
         </div>
      </div>
   </article>
<?php endif; ?>