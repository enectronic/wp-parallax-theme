<?php
/*
Template Name: Consultants Page
*/
?>
<?php get_header(); ?>

<?php
  function createRow($idx) {
    switch ( $idx ) {
      case $idx % 2 > 0:
        // odd

        echo '<div class="consultants__info">';
        if ( get_field( 'consultants_heading_'. $idx ) ) {
          echo '<h2 class="consultants__info__heading">';
          echo the_field( 'consultants_heading_'. $idx );
          echo '</h2>';
        }
        echo '<p class="consultants__info__prefix">Vi kan:</p>';
        echo '<ul class="consultants__info__list">';

        // If the custom field exists (a textarea),
        // we want to split it into an array at each
        // newline, then print a list item with each
        // line from the textarea
        if ( get_field( 'consultant_competences_'. $idx ) ) {

            $text = get_field( 'consultant_competences_'. $idx );
            $textArr = explode("\n", $text);
            $textArr = array_filter($textArr, 'trim');

            foreach ( $textArr as $line ) {
              echo '<li class="consultants__info__list__item">'. $line .'</li>';
            }


        }
        echo '</ul>';
      echo '</div>';
      echo '<div class="consultants__illustration">';
      if ( get_field( 'consultant_image_'. $idx ) ) {
        ?>
          <img class="consultants__illustration__image" src="<?php the_field('consultant_image_'. $idx); ?>" />
        <?php
      }
      echo '</div>';
      break;

      default:
        // even
        echo '<div class="consultants__info consultants__info--first">';
        if ( get_field( 'consultants_heading_'. $idx ) ) {
          echo '<h2 class="consultants__info__heading">';
          echo the_field( 'consultants_heading_'. $idx );
          echo '</h2>';
        }
        echo '<p class="consultants__info__prefix">Vi kan:</p>';
        echo '<ul class="consultants__info__list">';

        // If the custom field exists (a textarea),
        // we want to split it into an array at each
        // newline, then print a list item with each
        // line from the textarea
        if ( get_field( 'consultant_competences_'. $idx ) ) {

            $text = get_field( 'consultant_competences_'. $idx );
            $textArr = explode("\n", $text);
            $textArr = array_filter($textArr, 'trim');

            foreach ( $textArr as $line ) {
              echo '<li class="consultants__info__list__item">'. $line .'</li>';
            }


        }
        echo '</ul>';
      echo '</div>';
        echo '<div class="consultants__illustration">';
        if ( get_field( 'consultant_image_'. $idx ) ) {
        ?>
          <img class="consultants__illustration__image" src="<?php the_field('consultant_image_'. $idx); ?>" />
        <?php
        }
        echo '</div>';
        echo '<div class="consultants__info consultants__info--last">';
        if ( get_field( 'consultants_heading_'. $idx ) ) {
          echo '<h2 class="consultants__info__heading">';
          echo the_field( 'consultants_heading_'. $idx );
          echo '</h2>';
        }
        echo '<p class="consultants__info__prefix">Vi kan:</p>';
        echo '<ul class="consultants__info__list">';

        // If the custom field exists (a textarea),
        // we want to split it into an array at each
        // newline, then print a list item with each
        // line from the textarea
        if ( get_field( 'consultant_competences_'. $idx ) ) {

            $text = get_field( 'consultant_competences_'. $idx );
            $textArr = explode("\n", $text);
            $textArr = array_filter($textArr, 'trim');

            foreach ( $textArr as $line ) {
              echo '<li class="consultants__info__list__item">'. $line .'</li>';
            }


        }
        echo '</ul>';
      echo '</div>';
      break;
    }
  }
?>

<div class="top-bar">

</div>

<div class="consultants-container">

  <?php
    // The following is the first section of the consultants
    // page, and should not be looped through as the others
    // since a list should not be generated.
  ?>

  <div class="consultants">
    <div class="consultants__info">
      <?php if ( get_field( 'consultants_heading_1' ) ): ?>
      <h2 class="consultants__info__heading"><?php the_field( 'consultants_heading_1' ) ?></h2>
      <?php endif; ?>
      <?php
        // If the custom field exists (a textarea),
        // we want to split it into an array at each
        // newline, then print a list item with each
        // line from the textarea
      ?>
      <?php if ( get_field( 'consultant_competences_1' ) ): ?>
        <p class="consultants__intro__text"><?php the_field('consultant_competences_1') ?></p>
      <?php endif; ?>
    </div>
    <div class="consultants__illustration consultants__illustration__with-text">
      <?php if ( get_field( 'consultant_image_1' ) ): ?>
      <img class="consultants__illustration__image" src="<?php the_field( 'consultant_image_1' ) ?>" />
      <?php endif; ?>
    </div>
  </div>
  <div class="consultants__divider"></div>

  <?php
    // Iteration setup
    $competences = 5;
    $i = 2; // Start from the second competence
    while ( $i <= $competences ):
  ?>

  <div class="consultants">
    <?php createRow($i); ?>
  </div>
  <div class="consultants__divider"></div>

  <?php $i++; endwhile; ?>

  <?php
    // The following is the last section of the consultants
    // page, and should not be looped through as the others
    // since a list should not be generated.
  ?>

  <div class="consultants">
    <div class="consultants__info--first">
      <?php if ( get_field( 'consultants_heading_6' ) ): ?>
      <h2 class="consultants__info__heading"><?php the_field( 'consultants_heading_6' ) ?></h2>
      <?php endif; ?>
      <?php
        // If the custom field exists (a textarea),
        // we want to split it into an array at each
        // newline, then print a list item with each
        // line from the textarea
      ?>
      <?php if ( get_field( 'consultant_competences_6' ) ): ?>
        <p class="consultants__intro__text"><?php the_field('consultant_competences_6') ?></p>
      <?php endif; ?>
    </div>
    <div class="consultants__illustration">
      <?php if ( get_field( 'consultant_image_6' ) ): ?>
      <img class="consultants__illustration__image" src="<?php the_field( 'consultant_image_6' ) ?>" />
      <?php endif; ?>
    </div>
    <div class="consultants__info--last">
      <?php if ( get_field( 'consultants_heading_6' ) ): ?>
      <h2 class="consultants__info__heading"><?php the_field( 'consultants_heading_6' ) ?></h2>
      <?php endif; ?>
      <?php
        // If the custom field exists (a textarea),
        // we want to split it into an array at each
        // newline, then print a list item with each
        // line from the textarea
      ?>
      <?php if ( get_field( 'consultant_competences_6' ) ): ?>
        <p class="consultants__intro__text"><?php the_field('consultant_competences_6') ?></p>
      <?php endif; ?>
    </div>
  </div>
  <div class="consultants__divider"></div>

</div>

<?php get_footer(); ?>
