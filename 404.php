<?php
/**
 * The template for displaying 404 pages (Not Found)
 */
?>
<?php get_header(); ?>
  <?php
  // The 404 page. Will be shown when the user enters a URL that does not
  // exist under the current domain.
  // ===========================================================================
  ?>
  <div class="container container--blue-gradient">
    <div class="container__404">
      <div class="inner__404">
        <h1 class="heading__404"><?php _e('Oops! Sidan du sökte verkar inte finnas.') ?></h1>
        <p class="text__404"><?php _e('Använd menyn för att ta dig tillbaka.') ?></p>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
