<?php
/*
Template Name: Team Layout Page
*/
?>
<?php get_header(); ?>

<div class="team-top-bar">

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
          <p class="member__email"><?php the_field( 'member_'. $i .'_email' ); ?></p>
        </div>
        <?php endif; ?>
        <?php if ( get_field( 'member_'. $i .'_phone' ) ): ?>
        <div class="member__phone__container">
          <img class="member__phone__image" src="<?php bloginfo('template_directory'); ?>/img/phone_white.png" />
          <p class="member__phone"><?php the_field( 'member_'. $i .'_phone' ); ?></p>
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

            foreach ( $textArr as $line ) {

              echo '<p class="member__skills__skill">'. $line .'</p>';

            }

          ?>
        <?php endif; ?>
        <?php if ( get_field( 'member_'. $i .'_skillset_2_heading' ) ): ?>
        <h3 class="member__skills__heading"><?php the_field( 'member_'. $i .'_skillset_2_heading' ) ?></h3>
        <?php endif; ?>
        <?php if ( get_field( 'member_'. $i .'_skillset_2' ) ): ?>
          <?php

            $text = get_field( 'member_'. $i .'_skillset_2' );
            $textArr = explode("\n", $text);
            $textArr = array_filter($textArr, 'trim');

            foreach ( $textArr as $line ) {

              echo '<p class="member__skills__skill">'. $line .'</p>';

            }

          ?>
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

            foreach ( $textArr as $line ) {

              echo '<p class="member__skills__skill">'. $line .'</p>';

            }

          ?>
        <?php endif; ?>

        <?php if ( get_field( 'member_'. $i .'_skillset_4_heading' ) ): ?>
        <h3 class="member__skills__heading"><?php the_field( 'member_'. $i .'_skillset_4_heading' ) ?></h3>
        <?php endif; ?>
        <?php if ( get_field( 'member_'. $i .'_skillset_4' ) ): ?>
          <?php

            $text = get_field( 'member_'. $i .'_skillset_4' );
            $textArr = explode("\n", $text);
            $textArr = array_filter($textArr, 'trim');

            foreach ( $textArr as $line ) {

              echo '<p class="member__skills__skill">'. $line .'</p>';

            }

          ?>
        <?php endif; ?>

        <?php if ( get_field( 'member_'. $i .'_skillset_5_heading' ) ): ?>
        <h3 class="member__skills__heading"><?php the_field( 'member_'. $i .'_skillset_5_heading' ) ?></h3>
        <?php endif; ?>
        <?php if ( get_field( 'member_'. $i .'_skillset_5' ) ): ?>
          <?php

            $text = get_field( 'member_'. $i .'_skillset_5' );
            $textArr = explode("\n", $text);
            $textArr = array_filter($textArr, 'trim');

            foreach ( $textArr as $line ) {

              echo '<p class="member__skills__skill">'. $line .'</p>';

            }

          ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="member__portfolio__items">
      <div class="member__portfolio__first">
        <h3 class="member__portfolio__heading">UX/Webdesign</h3>
        <p class="member__portfolio__description">Vi gör din webbsida från grunden eller hjälper dig med betalningslösningar m.m.</p>
        <div class="member__portfolio__item member__portfolio__item--first">
          <!-- image -->
          <h5 class="member__portfolio__item__heading">Salong Citron</h5>
          <p class="member__portfolio__item__text">Salong Citron ville ha en ny grafisk profil med tillhörande webbsida. Fokus har legat på enkelhet och tydlighet. Det har även varit viktigt för kunden att det ska finnas ett tydligt formspråk och att kunderna lätt ska kunna navigera bland behandlingar samt boka behandling online</p>
        </div>
      </div>
      <div class="member__portfolio__second">
        <h3 class="member__portfolio__heading">Formgivning</h3>
        <p class="member__portfolio__description">Grafisk profil, logotyp, visitkort, kläder, kataloger, produktblad, fakturor, offerter m.m. Vi hjälper dig att profilera din produkt och ditt företag.</p>
        <div class="member__portfolio__item member__portfolio__item--second">
          <!-- image -->
          <h5 class="member__portfolio__item__heading">Salong Citron</h5>
          <p class="member__portfolio__item__text">Salong Citron ville ha en ny grafisk profil med tillhörande webbsida. Fokus har legat på enkelhet och tydlighet. Det har även varit viktigt för kunden att det ska finnas ett tydligt formspråk och att kunderna lätt ska kunna navigera bland behandlingar samt boka behandling online</p>
        </div>
      </div>
      <div class="member__portfolio__third">
        <h3 class="member__portfolio__heading">Grafik/illustration</h3>
        <p class="member__portfolio__description">Behöver du informera eller förklara en produkt, en process eller något annat viktigt som gör sig bäst i bild? Vi har lösningar för både webb och tryck.</p>
        <div class="member__portfolio__item member__portfolio__item--third">
          <!-- image -->
          <h5 class="member__portfolio__item__heading">Salong Citron</h5>
          <p class="member__portfolio__item__text">Salong Citron ville ha en ny grafisk profil med tillhörande webbsida. Fokus har legat på enkelhet och tydlighet. Det har även varit viktigt för kunden att det ska finnas ett tydligt formspråk och att kunderna lätt ska kunna navigera bland behandlingar samt boka behandling online</p>
        </div>
      </div>



    </div>
  </div>
  <div class="member__divider"></div>
  <?php $i++; endwhile; // End while loop ?>
</div>

<?php get_footer(); ?>
