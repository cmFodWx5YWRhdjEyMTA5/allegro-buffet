<?php
/*
Template Name: Home
*/

// Get the Video Fields
// $video_webm =  get_field('webm_video'); // WEBM Field Name
// $video_mp4 =  get_field('mp4_video'); // MP4 Field Name
// $video_ogg =  get_field('ogg_video'); // OGG Field Name

                
// // Build the  Shortcode
// $attr =  array(
// 'webm'     => $video_webm,
// 'mp4'      => $video_mp4,
// 'ogg'      => $video_ogg,
// 'preload'  => 'auto'
// );
?>

<?php get_header('home'); ?>

	<div class="static-banner-wrapper initial-hidden">
		<div class="scrollOverlay"></div>

		<div class="hero-banner initial-hidden">
			<div id="hero-banner">
				<div class="slider-item" style="background-image:url('<?php echo get_home_url(); ?>/wp-content/uploads/2018/05/capa-home.jpg');">
					<!--div class="overlay"></div-->
					<div class="inner">
						<div class="title">Casamentos</div>
						<h2>Luxuosos</h2>
					</div>
				</div>

				<div class="slider-item" style="background-image:url('<?php echo get_home_url(); ?>/wp-content/uploads/2018/05/capa-home-2.jpg');">
					<!--div class="overlay"></div-->
					<div class="inner">
						<div class="title">Debutantes</div>
						<h2>Personalizados</h2>
					</div>
				</div>

				<div class="slider-item" style="background-image:url('<?php echo get_home_url(); ?>/wp-content/uploads/2018/05/capa-home-3.jpg');">
					<!--div class="overlay"></div-->
					<div class="inner">
						<div class="title">Corporativos</div>
						<h2>Inesquecíveis</h2>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="initial-hidden" style="max-height:800px; height:auto !important; background: #000;">
	  <div class="scrollOverlay"></div>
	  <div style="height:auto !important;">
	    <div style="height:auto !important;">
	    	<?php putRevSlider("sociais") ?>
	    </div>
	    <div class="overlay"></div>
	    <div class="inner">
	      <!--h1 class="title initial-hidden">Gastronomia</h1-->  
	    </div>

	    <div class="indicators">
	      <div></div>
	      <div></div>
	      <div></div>
	    </div>
	  </div>
	</div>

	<main class="main initial-hidden">
		<div id="content-blocks">
				
		  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  	<?php the_content(); ?>
		  <?php endwhile; else: ?>
		    <div class="artigo">
		      <h2>Nada Encontrado</h2>
		      <p>Erro 404</p>
		      <p>Lamentamos mas não foram encontrados artigos.</p>
		    </div>
		  <?php endif; ?>
		  	  
		</div>
		<div class="clearfix"></div>
	</main>
	
<?php get_footer(); ?>