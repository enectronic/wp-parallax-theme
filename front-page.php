<?php get_header(); ?>

<?php
/*
	Parallax header effect. Written using CSS BEM architecture
	for a low specificity.
*/
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
?>
<div class="container--beige-gradient">
  <div class="selling-points">
    <div class="selling-points__point">
      <div class="selling-points__image">
      <?php // Selling point image goes here ?>
      </div>
      <div class="selling-points__content">
        <h3 class="selling-points__heading">Professionellt</h3>
        <p class="selling-points__body">Oavsett projektets storlek och art är det självklart för oss att det sköts professionellt. Du som kund ska alltid känna dig hörd och bli bemött med all önskvärd service.</p>
      </div>
    </div>
    <div class="selling-points__point">
      <div class="selling-points__image">
      <?php // Selling point image goes here ?>
      </div>
      <div class="selling-points__content">
        <h3 class="selling-points__heading">Personligt</h3>
        <p class="selling-points__body">När man köper in en extern kompetens kan man känna en oro för att den inköpta tjänsten inte ska motsvara förväntningarna och behoven. En inledande, personlig kontakt tar enligt vår erfarenhet udden av den oron. Vi ser att en ärlig och direkt kommunikation är oerhört viktig för att allt ska bli så bra som både ni och vi vill.</p>
      </div>
    </div>
    <div class="selling-points__point">
      <div class="selling-points__image">
      <?php // Selling point image goes here ?>
      </div>
      <div class="selling-points__content">
        <h3 class="selling-points__heading">Modernt</h3>
        <p class="selling-points__body">I och med att vi håller oss uppdaterade med de senaste lösningarna kan vi leverera det absolut senaste inom webbteknik och övrigt material. Du kan vara säker på att din webbsida fungerar lika bra på dator, surfplatta och mobil.</p>
      </div>
    </div>
    <div class="selling-points__point">
      <div class="selling-points__image">
      <?php // Selling point image goes here ?>
      </div>
      <div class="selling-points__content">
        <h3 class="selling-points__heading">Anpassat</h3>
        <p class="selling-points__body">Som företagare vill man profilera sig. Allt fler inser vikten av att ha väl fungerande tjänster och det är på webben man visar upp sig. Det är inte bara ytan som ska vara snygg utan de bakomliggande funktionerna måste även fungera och det måste vara enkelt för besökaren att använda. Ingen har så dåligt tålamod som den som surfar runt på webben.</p>
      </div>
    </div>
    <div class="selling-points__point">
      <div class="selling-points__image">
      <?php // Selling point image goes here ?>
      </div>
      <div class="selling-points__content">
        <h3 class="selling-points__heading">Snabbt</h3>
        <p class="selling-points__body">Om du vill anlita oss för att utföra en tjänst kommer vi snabbt boka in ett möte där vi pratar om uppdragets omfattning. Därefter dröjer det bara ett par dagar innan du har en offert och ett förslag på arbetsprocessen och datum för leverans. Vi svarar alltid snabbt på dina frågor och du kommer aldrig känna dig "övergiven".</p>
      </div>
    </div>
    <div class="selling-points__point">
      <div class="selling-points__image">
      <?php // Selling point image goes here ?>
      </div>
      <div class="selling-points__content">
        <h3 class="selling-points__heading">Kompetent</h3>
        <p class="selling-points__body">På LS Entertainment har vi allihop högskolekompetens och mer därtill. Tillsammans besitter vi en oerhört bred och gedigen kompetens. Kompetens som alltid är nära till hands eftersom vi dagligen har tät kontakt med varandra.</p>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
