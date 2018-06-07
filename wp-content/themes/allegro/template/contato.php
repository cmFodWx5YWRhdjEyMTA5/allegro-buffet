<?php
/*
Template Name: Contato
*/
?>

<?php get_header('contato'); ?>

  <main class="main initial-hidden">
    <div class="contact-main-wrapper" style="background-color: #1d1d1d;">
      <div class="container">
        <div class="main-content">
          <h1 class="title" style="color: #FFF;"><?php the_title(); ?></h1>
          <!--p>We look forward to hearing about your exciting project.<br> Let’s get creative together.</p-->
        </div>
      </div>
    </div>

    <div class="contact-section write" style="width: 100% !important;">
    
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