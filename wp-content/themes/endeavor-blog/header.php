<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title><?php echo bloginfo('name'); ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/">



    <!-- Bootstrap core CSS -->
 <?php wp_head();  ?>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
  </head>
  <body>

<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-2 pt-1">
        <a class="link-secondary" href="#">Subscribción</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#"><?php bloginfo('name'); ?></a>
      </div>
      <div class="col-2 d-flex justify-content-end align-items-center">
        <a class="btn btn-sm btn-outline-secondary" href="#">Registrar</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 link-secondary" href="#">Mundo</a>
      <a class="p-2 link-secondary" href="#">Tecnología</a>
      <a class="p-2 link-secondary" href="#">Ciencia</a>
      <a class="p-2 link-secondary" href="#">Salud</a>
      <a class="p-2 link-secondary" href="#">Estilo</a>
    </nav>
  </div>
</div>
