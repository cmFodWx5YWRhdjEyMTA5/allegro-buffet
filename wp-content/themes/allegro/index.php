<?php get_header(); ?>
  <div class="static-banner-wrapper initial-hidden">
    <div class="scrollOverlay"></div>
    <div class="static-banner">
      <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
      <div class="bg-image" style="background-image:url('<?php echo $thumb['0'];?>');"></div>
      <div class="overlay"></div>
      <div class="inner">
        <h1 class="title initial-hidden"><?php the_title(); ?></h1>
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
          <p>Lamentamos mas nè´™o foram encontrados artigos.</p>
        </div>
      <?php endif; ?>
      
    </div>
    <div class="clearfix"></div>
  </main>
<?php get_footer(); ?>