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

		<img src="<?php bloginfo('template_directory'); ?>/img/parallax_logo.min.png"
      class="parallax__layer parallax__layer--logo"
      id="logo" width="350">

		<img src="<?php bloginfo('template_directory'); ?>/img/parallax_clouds_front.min.png"
      class="parallax__layer parallax__layer--clouds-front"
      id="clouds-front" width="1183" >

		<img src="<?php bloginfo('template_directory'); ?>/img/parallax_climber.min.png"
      class="parallax__layer parallax__layer--climber"
      id="climber" width="263">

		<img src="<?php bloginfo('template_directory'); ?>/img/parallax_rock.min.png"
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
<div class="container--beige-gradient">
  <div class="selling-points">
    <?php $field = get_field( 'selling-point-1' ) ?>
    <?php if ( $field ): ?>
    <div class="selling-points__point">
      <div class="selling-points__image">
      <?php // Selling point image goes here ?>
      </div>
      <div class="selling-points__content">
        <h3 class="selling-points__heading"><?php the_field( 'selling-point-1' ) ?></h3>
        <p class="selling-points__body"><?php the_field( 'selling-point-1-text' ) ?></p>
      </div>
    </div>
    <?php endif; ?>
    <?php $field = get_field( 'selling-point-2' ) ?>
    <?php if ( $field ): ?>
    <div class="selling-points__point">
      <div class="selling-points__image">
      <?php // Selling point image goes here ?>
      </div>
      <div class="selling-points__content">
        <h3 class="selling-points__heading"><?php the_field( 'selling-point-2' ) ?></h3>
        <p class="selling-points__body"><?php the_field( 'selling-point-2-text' ) ?></p>
      </div>
    </div>
    <?php endif; ?>
    <?php $field = get_field( 'selling-point-3' ) ?>
    <?php if ( $field ): ?>
    <div class="selling-points__point">
      <div class="selling-points__image">
      <?php // Selling point image goes here ?>
      </div>
      <div class="selling-points__content">
        <h3 class="selling-points__heading"><?php the_field( 'selling-point-3' ) ?></h3>
        <p class="selling-points__body"><?php the_field( 'selling-point-3-text' ) ?></p>
      </div>
    </div>
    <?php endif; ?>
    <?php $field = get_field( 'selling-point-4' ) ?>
    <?php if ( $field ): ?>
    <div class="selling-points__point">
      <div class="selling-points__image">
      <?php // Selling point image goes here ?>
      </div>
      <div class="selling-points__content">
        <h3 class="selling-points__heading"><?php the_field( 'selling-point-4' ) ?></h3>
        <p class="selling-points__body"><?php the_field( 'selling-point-4-text' ) ?></p>
      </div>
    </div>
    <?php endif; ?>
    <?php $field = get_field( 'selling-point-5' ) ?>
    <?php if ( $field ): ?>
    <div class="selling-points__point">
      <div class="selling-points__image">
      <?php // Selling point image goes here ?>
      </div>
      <div class="selling-points__content">
        <h3 class="selling-points__heading"><?php the_field( 'selling-point-5' ) ?></h3>
        <p class="selling-points__body"><?php the_field( 'selling-point-5-text' ) ?></p>
      </div>
    </div>
    <?php endif; ?>
    <?php $field = get_field( 'selling-point-6' ) ?>
    <?php if ( $field ): ?>
    <div class="selling-points__point">
      <div class="selling-points__image">
      <?php // Selling point image goes here ?>
      </div>
      <div class="selling-points__content">
        <h3 class="selling-points__heading"><?php the_field( 'selling-point-6' ) ?></h3>
        <p class="selling-points__body"><?php the_field( 'selling-point-6-text' ) ?></p>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>

<?php
  // The team view
  // ===========================================================================
?>
<div class="container--blue-gradient">
  <div class="team">
    <h2 class="team__heading">Vårt team</h2>
    <p class="team__body">På LS har vi samarbetat i små personliga grupper sedan 2006 och vi har alla en gemensam strävan efter att hela tiden leverera professionella och ändamålsenliga produkter. Fortsätt en sammanfattande, kärnfull och kort beskrivning som framhåller den lilla gruppen.</p>
    <div class="team__members">
      <div class="team__member">
        <div class="team__member__image__container">
          <img class="team__member__image" src="<?php bloginfo('template_directory'); ?>/img/parallax_balloon.min.png" />
        </div>
        <h3 class="team__member__name">Fredrik Saaf</h3>
        <p class="team__member__role">VD / Back-endutvecklare</p>
        <p class="team__member__text">Fredrik är vår starke man och den som obevekligt driver oss alla in i det ena mer nervkittlande projektet efter det andra. Totalt orädd och en idéspruta utan dess like. Den här texten ska vara lite rolig och mer personbeskrivande än detaljerad.</p>
        <div class="team__member__contact">
          <?php // insert image here! ?>
          <p class="team__member__contact__email">fredrik.saaf@lsentertainment.se</p>

          <?php // insert phone picture here ?>
          <p class="team__member__contact__phone">073 614 56 14</p>
        </div>
      </div>
      <div class="team__member">
        <div class="team__member__image__container">
          <img class="team__member__image" src="<?php bloginfo('template_directory'); ?>/img/parallax_balloon.min.png" />
        </div>
        <h3 class="team__member__name">Sara Brandberg</h3>
        <p class="team__member__role">Webbdesigner / Formgivare</p>
        <p class="team__member__text">Sara är vår starke man och den som obevekligt driver oss alla in i det ena mer nervkittlande projektet efter det andra. Totalt orädd och en idéspruta utan dess like. Den här texten ska vara lite rolig och mer personbeskrivande än detaljerad.</p>
        <div class="team__member__contact">
          <?php // insert image here! ?>
          <p class="team__member__contact__email">sara.brandberg@lsentertainment.se</p>

          <?php // insert phone picture here ?>
          <p class="team__member__contact__phone">073 123 45 67</p>
        </div>
      </div>
      <div class="team__member">
        <div class="team__member__image__container">
          <img class="team__member__image" src="<?php bloginfo('template_directory'); ?>/img/parallax_balloon.min.png" />
        </div>
        <div class="team__member__info">
          <h3 class="team__member__name">Johan Ljung</h3>
          <p class="team__member__role">Front-endutvecklare</p>
          <p class="team__member__text">Johan är vår starke man och den som obevekligt driver oss alla in i det ena mer nervkittlande projektet efter det andra. Totalt orädd och en idéspruta utan dess like. Den här texten ska vara lite rolig och mer personbeskrivande än detaljerad.</p>
          <div class="team__member__contact">
            <?php // insert image here! ?>
            <p class="team__member__contact__email">johan.ljung@lsentertainment.se</p>

            <?php // insert phone picture here ?>
            <p class="team__member__contact__phone">072 205 89 37</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer('front-page'); ?>
