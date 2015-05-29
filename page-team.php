<?php
/*
Template Name: Team Layout Page
*/
?>
<?php get_header(); ?>

<?php
// The team page. Specifically layed out to match the design of the team page
// ===========================================================================
?>

<div class="top-bar">

</div>

<?php $teamMembers = 3; $i = 1 ?>
<div class="members__container">
<?php while ( $i <= $teamMembers ): ?>
  <div class="member">
    <?php if ( get_field( 'member_'. $i .'_name' ) ): ?>
    <h2 class="member__name"><?php the_field( 'member_'. $i .'_name' ); ?></h2>
    <?php endif; ?>
    <?php if ( get_field( 'member_'. $i .'_profession' ) ): ?>
    <h4 class="member__profession"><?php the_field( 'member_'. $i .'_profession' ); ?></h4>
    <?php endif; ?>
    <div class="member__image__container">
      <?php if ( get_field( 'member_'. $i . '_portrait' ) ): ?>
      <img class="member__image" src="<?php the_field( 'member_'. $i .'_portrait' ); ?>" />
      <?php endif; ?>
      <div class="member__email__phone__container">
        <?php if ( get_field( 'member_'. $i .'_email' ) ): ?>
        <div class="member__email__container">
          <img class="member__email__image" src="<?php bloginfo('template_directory'); ?>/img/mail_white.png" />
          <a class="member__email" href="mailto:<?php the_field('member_'. $i .'_email') ?>"><?php the_field( 'member_'. $i .'_email' ); ?></a>
        </div>
        <?php endif; ?>
        <?php if ( get_field( 'member_'. $i .'_phone' ) ): ?>
        <div class="member__phone__container">
          <img class="member__phone__image" src="<?php bloginfo('template_directory'); ?>/img/phone_white.png" />
          <a class="member__phone" href="tel:<?php the_field('member_'. $i .'_phone'); ?>"><?php the_field( 'member_'. $i .'_phone' ); ?></a>
        </div>
        <?php endif; ?>
      </div>
      <?php if ( get_field( 'member_'. $i .'_presentation' ) ): ?>
      <div class="member__text">
        <p><?php the_field( 'member_'. $i .'_presentation' ); ?></p>
      </div>
      <?php endif; ?>
    </div>
    <div class="member__skills__container">
      <div class="member__skills__left">
        <?php if ( get_field( 'member_'. $i .'_skillset_1_heading' ) ): ?>
        <h3 class="member__skills__heading"><?php the_field( 'member_'. $i .'_skillset_1_heading' ) ?></h3>
        <?php endif; ?>
        <?php if ( get_field( 'member_'. $i .'_skillset_1' ) ): ?>
          <?php

            $text = get_field( 'member_'. $i .'_skillset_1' );
            $textArr = explode("\n", $text);
            $textArr = array_filter($textArr, 'trim');

            ?>
            <div class="member__skills__group">
            <?php
            foreach ( $textArr as $line ) {

              echo '<p class="member__skills__skill">'. $line .'</p>';

            }
            ?>
            </div>
        <?php endif; ?>
        <?php if ( get_field( 'member_'. $i .'_skillset_2_heading' ) ): ?>
        <h3 class="member__skills__heading"><?php the_field( 'member_'. $i .'_skillset_2_heading' ) ?></h3>
        <?php endif; ?>
        <?php if ( get_field( 'member_'. $i .'_skillset_2' ) ): ?>
          <?php

            $text = get_field( 'member_'. $i .'_skillset_2' );
            $textArr = explode("\n", $text);
            $textArr = array_filter($textArr, 'trim');

            ?>
            <div class="member__skills__group">
            <?php
            foreach ( $textArr as $line ) {

              echo '<p class="member__skills__skill">'. $line .'</p>';

            }
          ?>
          </div>
        <?php endif; ?>
      </div>
      <div class="member__skills__right">
        <?php if ( get_field( 'member_'. $i .'_skillset_3_heading' ) ): ?>
        <h3 class="member__skills__heading"><?php the_field( 'member_'. $i .'_skillset_3_heading' ) ?></h3>
        <?php endif; ?>
        <?php if ( get_field( 'member_'. $i .'_skillset_3' ) ): ?>
          <?php

            $text = get_field( 'member_'. $i .'_skillset_3' );
            $textArr = explode("\n", $text);
            $textArr = array_filter($textArr, 'trim');

            ?>
            <div class="member__skills__group">
            <?php
            foreach ( $textArr as $line ) {

              echo '<p class="member__skills__skill">'. $line .'</p>';

            }
            ?>
            </div>
        <?php endif; ?>

        <?php if ( get_field( 'member_'. $i .'_skillset_4_heading' ) ): ?>
        <h3 class="member__skills__heading"><?php the_field( 'member_'. $i .'_skillset_4_heading' ) ?></h3>
        <?php endif; ?>
        <?php if ( get_field( 'member_'. $i .'_skillset_4' ) ): ?>
          <?php

            $text = get_field( 'member_'. $i .'_skillset_4' );
            $textArr = explode("\n", $text);
            $textArr = array_filter($textArr, 'trim');

            ?>
            <div class="member__skills__group">
            <?php
            foreach ( $textArr as $line ) {

              echo '<p class="member__skills__skill">'. $line .'</p>';

            }
            ?>
            </div>
        <?php endif; ?>

        <?php if ( get_field( 'member_'. $i .'_skillset_5_heading' ) ): ?>
        <h3 class="member__skills__heading"><?php the_field( 'member_'. $i .'_skillset_5_heading' ) ?></h3>
        <?php endif; ?>
        <?php if ( get_field( 'member_'. $i .'_skillset_5' ) ): ?>
          <?php

            $text = get_field( 'member_'. $i .'_skillset_5' );
            $textArr = explode("\n", $text);
            $textArr = array_filter($textArr, 'trim');

            ?>
            <div class="member__skills__group">
            <?php
            foreach ( $textArr as $line ) {

              echo '<p class="member__skills__skill">'. $line .'</p>';

            }
            ?>
            </div>
        <?php endif; ?>
      </div>
    </div>

    <div class="member__portfolio__items">
      <div class="member__portfolio__first">
        <?php if ( get_field( 'member_'. $i .'_project_category_1' ) ): ?>
          <h3 class="member__portfolio__heading"><?php the_field( 'member_'. $i .'_project_category_1' ) ?></h3>
        <?php endif; ?>

        <div class="member__portfolio__item member__portfolio__item--first">
          <?php if ( get_field( 'member_'. $i . '_project_image_1' ) ): ?>
          <!-- image -->
          <?php endif; ?>
          <?php if ( get_field( 'member_'. $i .'_project_heading_1' ) ): ?>
          <h5 class="member__portfolio__item__heading"><?php the_field( 'member_'. $i .'_project_heading_1' ) ?></h5>
          <?php endif; ?>
          <?php if ( get_field( 'member_'. $i .'_project_description_1' ) ): ?>
          <p class="member__portfolio__item__text"><?php the_field( 'member_'. $i .'_project_description_1' ) ?></p>
          <?php endif; ?>
        </div>
      </div>
      <div class="member__portfolio__second">
        <?php if ( get_field( 'member_'. $i .'_project_category_2' ) ): ?>
          <h3 class="member__portfolio__heading"><?php the_field( 'member_'. $i .'_project_category_2' ) ?></h3>
        <?php endif; ?>

        <div class="member__portfolio__item member__portfolio__item--first">
          <?php if ( get_field( 'member_'. $i . '_project_image_2' ) ): ?>
          <!-- image -->
          <?php endif; ?>
          <?php if ( get_field( 'member_'. $i .'_project_heading_2' ) ): ?>
          <h5 class="member__portfolio__item__heading"><?php the_field( 'member_'. $i .'_project_heading_2' ) ?></h5>
          <?php endif; ?>
          <?php if ( get_field( 'member_'. $i .'_project_description_2' ) ): ?>
          <p class="member__portfolio__item__text"><?php the_field( 'member_'. $i .'_project_description_2' ) ?></p>
          <?php endif; ?>
        </div>
      </div>
      <div class="member__portfolio__third">
        <?php if ( get_field( 'member_'. $i .'_project_category_3' ) ): ?>
          <h3 class="member__portfolio__heading"><?php the_field( 'member_'. $i .'_project_category_3' ) ?></h3>
        <?php endif; ?>

        <div class="member__portfolio__item member__portfolio__item--first">
          <?php if ( get_field( 'member_'. $i . '_project_image_3' ) ): ?>
          <!-- image -->
          <?php endif; ?>
          <?php if ( get_field( 'member_'. $i .'_project_heading_3' ) ): ?>
          <h5 class="member__portfolio__item__heading"><?php the_field( 'member_'. $i .'_project_heading_3' ) ?></h5>
          <?php endif; ?>
          <?php if ( get_field( 'member_'. $i .'_project_description_3' ) ): ?>
          <p class="member__portfolio__item__text"><?php the_field( 'member_'. $i .'_project_description_3' ) ?></p>
          <?php endif; ?>
        </div>
      </div>



    </div>
  </div>
  <div class="member__divider"></div>
  <?php $i++; endwhile; // End while loop ?>
</div>

<?php get_footer(); ?>
