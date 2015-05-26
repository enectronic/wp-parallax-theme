<?php get_header(); ?>

<?php
	// Parallax header effect. Written using CSS BEM architecture
	// for a low specificity.
  // ===========================================================================
?>
<header class="parallax">
	<div class="parallax__group">
		<img class="parallax__layer parallax__layer--water"
      src="<?php bloginfo('template_directory'); ?>/img/parallax_sea.min.png"
      id="water" width="1921">

		<img src="<?php bloginfo('template_directory'); ?>/img/parallax_clouds_back.min.png"
      class="parallax__layer parallax__layer--clouds-back"
      id="clouds-back" width="1741">

		<img src="<?php bloginfo('template_directory'); ?>/img/parallax_balloon.min.png"
      class="parallax__layer parallax__layer--balloon"
      id="balloon" width="250">

		<img src="<?php bloginfo('template_directory'); ?>/img/parallax_logo2.min.png"
      class="parallax__layer parallax__layer--logo"
      id="logo" width="200">

		<img src="<?php bloginfo('template_directory'); ?>/img/parallax_clouds_front.min.png"
      class="parallax__layer parallax__layer--clouds-front"
      id="clouds-front" width="1183" >

		<img src="<?php bloginfo('template_directory'); ?>/img/parallax_climber2.min.png"
      class="parallax__layer parallax__layer--climber"
      id="climber" width="164">

		<img src="<?php bloginfo('template_directory'); ?>/img/parallax_rock2.min.png"
      class="parallax__layer parallax__layer--rocks"
      id="rocks" width="1920">
	</div>
</header>

<?php
	// This is the gradient corporation info below
	// the parallax effect at the top.
  // ===========================================================================
?>
<div class="container--dark-gradient">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="article">
			<div class="article__hgroup">
				<h1 class="article__heading"><?php the_title(); ?></h1>
				<h3 class="article__sub-heading">
					<?php the_field( 'sub-heading' ); ?>
				</h3>
			</div>
			<p class="article__content"><?php _e(get_the_content()); ?></p>
		</article>
	<?php endwhile; else: _e('Den här sidan är tom'); ?>
	<?php endif; ?>
</div>

<?php
  // The following is the light brown/beige selling
  // points layout.
  // ===========================================================================
?>
<?php $sellingPoints = 6; $i = 1; ?>

<div class="container--beige-gradient">
  <?php /* this image is positioned absolute as a bg-image */ ?>
  <img class="selling-points__background__image" src="<?php bloginfo('template_directory'); ?>/img/town-top.png" />
  <div class="selling-points">
    <?php
      // Iterate over the selling points
    ?>
    <?php while ( $i <= $sellingPoints ): ?>
    <?php if ( get_field( 'selling-point-'. $i ) ): ?>
    <div class="selling-points__point">
      <div class="selling-points__image">
        <img src="<?php the_field( 'image-selling-point-'. $i ) ?>" />
      </div>
      <div class="selling-points__content">
        <h3 class="selling-points__heading"><?php the_field( 'selling-point-'. $i ) ?></h3>
        <p class="selling-points__body"><?php the_field( 'selling-point-'. $i .'-text' ) ?></p>
      </div>
    </div>
    <?php endif; ?>
    <?php $i++; endwhile; ?>
  </div>
</div>

<?php
  // The team view
  // ===========================================================================
?>
<div class="container--blue-gradient">
  <?php /* this image is positioned absolute as a bg-image */ ?>
  <img class="team__background__image" src="<?php bloginfo('template_directory'); ?>/img/town-bottom.png" />
  <div class="team">
    <?php if ( get_field( 'team-headline' ) ): ?>
    <h2 class="team__heading"><?php the_field( 'team-headline' ) ?></h2>
    <?php endif; ?>
    <?php if ( get_field( 'team-body-text' ) ): ?>
    <p class="team__body"><?php the_field( 'team-body-text' ) ?></p>
    <?php endif; ?>
    <div class="team__members">
      <?php
        // Iterate over the team members
      ?>
      <?php $teamMembers = 3; $i = 1 ?>
      <?php while ( $i <= $teamMembers ): ?>
      <div class="team__member">
        <div class="team__member__image__container">
          <?php if ( get_field( 'person-'. $i . '-picture' ) ): ?>
          <img class="team__member__image" src="<?php the_field( 'person-'. $i .'-picture' ) ?>" />
          <?php endif; ?>
        </div>
        <div class="team__member__info">
          <?php if ( get_field( 'person-'. $i .'-name' ) ): ?>
          <h3 class="team__member__name"><?php the_field( 'person-'. $i .'-name' ) ?></h3>
          <?php endif; ?>
          <?php if ( get_field( 'person-'. $i .'-profession' ) ): ?>
          <h4 class="team__member__role"><?php the_field( 'person-'. $i .'-profession' ) ?></h4>
          <?php endif; ?>
          <?php if ( get_field( 'person-'. $i .'-text' ) ): ?>
          <p class="team__member__text"><?php the_field( 'person-'. $i .'-text' ) ?></p>
          <?php endif; ?>
          <div class="team__member__contact">
            <?php if ( get_field( 'person-'. $i .'-email' ) ): ?>
            <div class="team__member__contact__container">
              <img class="team__member__email__img" src="<?php bloginfo('template_directory'); ?>/img/contact-mail.png" />
              <a class="team__member__contact__email" href="mailto:<?php the_field( 'person-'. $i . '-email' ); ?>">
                <?php the_field( 'person-'. $i .'-email' ) ?>
              </a>
            </div>
            <?php endif; ?>

            <?php if ( get_field( 'person-'. $i .'-phone' ) ): ?>
            <div class="team__member__contact__container">
              <img class="team__member__phone__img" src="<?php bloginfo('template_directory'); ?>/img/contact-phone.png" />
              <a class="team__member__contact__phone" href="tel:<?php the_field( 'person-'. $i .'-phone' ); ?>">
                <?php the_field( 'person-'. $i .'-phone' ) ?>
              </a>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php $i++; endwhile; ?>
    </div>
  </div>
</div>

<?php get_footer('front-page'); ?>
