<?php
/*
Template Name: Consultants Page
*/
?>
<?php get_header(); ?>

<div class="top-bar">

</div>

<div class="consultants-container">

  <?php
    $competences = 5;
    $i = 1;
    while ( $i <= $competences ):
  ?>

  <div class="consultants">
    <div class="consultants__info">
      <?php if ( get_field( 'consultants_heading_'. $i ) ): ?>
      <h2 class="consultants__info__heading"><?php the_field( 'consultants_heading_'. $i ) ?></h2>
      <?php endif; ?>
      <p class="consultants__info__prefix">Vi kan:</p>
      <ul class="consultants__info__list">

      <?php if ( get_field( 'consultant_competences_'. $i ) ): ?>
        <?php

          $text = get_field( 'consultant_competences_'. $i );
          $textArr = explode("\n", $text);
          $textArr = array_filter($textArr, 'trim');

          foreach ( $textArr as $line ) {
            echo '<li class="consultants__info__list__item">'. $line .'</li>';
          }

        ?>
      <?php endif; ?>
      </ul>
    </div>
    <div class="consultants__illustration">
      <?php if ( get_field( 'consultant_image_'. $i ) ): ?>
      <img class="consultants__illustration__image" src="<?php the_field( 'consultant_image'. $i ) ?>" />
      <?php endif; ?>
    </div>
  </div>
  <div class="consultants__divider"></div>

  <?php $i++; endwhile; ?>

</div>

<?php get_footer(); ?>
