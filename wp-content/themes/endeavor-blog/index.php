<?php get_header();  ?>
<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">

    <?php
      $args_ = array(

        'post_type' => 'post',
        'posts_per_page' => 1,

      );
      $_posts_ = new WP_Query($args_);
    ?>
    <?php if($_posts_->have_posts()): ?>

    <?php while($_posts_->have_posts()) : $_posts_->the_post(); ?>

    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic"><?php the_title(); ?></h1>
      <p class="lead my-1"><?php the_excerpt(); ?></p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continuar leyendo...</a></p>
    </div>
    <?php endwhile; ?>
  </div>
    <?php endif; ?>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">

        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"><?php the_category(' > ', 'single');?> </strong>
          <h3 class="mb-0"><?php the_title(); ?></h3>
          <div class="mb-1 text-muted"><?php echo get_the_date( 'd-m-y' ) ?></div>
          <a href="#" class="stretched-link">Ver noticia</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
  </div>

<?php


  ?>


  <div class="row">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Últimas publicaciones
      </h3>

      <article class="blog-post">

        <?php
          $args = array(

            'post_type' => 'post',
            'posts_per_page' => 3,

          );
          $_posts = new WP_Query($args);
        ?>
        <?php if($_posts->have_posts()): ?>

          <div class="row">
          <?php while($_posts->have_posts()) : $_posts->the_post(); ?>

              <div class="col-lg-6">
                <a href="<?php the_permalink(); ?>" class="text-dark"><h1><?php the_title(); ?></h1></a>
                <p><?php echo get_the_date( 'd-m-y' ) ?></p>
                <a> Por <?php the_author(); ?> </a>
                <h12><?php the_category(' > ', 'single');?> <h12>
                <p><?php the_excerpt(); ?></p>
                <p><?php the_tags(); ?></p>
              </div>

          <?php endwhile; ?>
          </div>

        <?php endif; ?>

      </article><!-- /.blog-post -->

    </div>

    <div class="col-md-4">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="fst-italic">Acerca del blog</h4>
        <p class="mb-0">Escribimos sobre cualquier cosa, por cualquier motivo, no somos expertos, solo una opinión más en internet.</p>
      </div>


      <div class="p-4">
        <h4 class="fst-italic">Canales oficiales</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </div>

  </div><!-- /.row -->

</main><!-- /.container -->

<?php get_footer();  ?>
