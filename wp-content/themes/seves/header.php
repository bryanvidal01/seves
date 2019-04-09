<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/stylesheets/style.css" media="screen" charset="utf-8" />
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/assets/js/app.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.png" />
        <title><?php echo get_the_title(); ?> Association SEVES</title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96156695-1', 'auto');
  ga('send', 'pageview');

</script>
        <a href="<?php echo get_site_url(); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png" alt="" />
        </a>

        <div class="menu-items">
            <ul>
                <li>
                    <a href="<?php echo get_site_url(); ?>">Accueil</a>
                </li>
                <li>
                    <a href="<?php echo get_site_url(); ?>/actualites">Actualités</a>
                </li>
                <li>
                    <a href="<?php echo get_site_url(); ?>/association">L'association</a>
                </li>
                <li>
                    <a href="<?php echo get_site_url(); ?>/demarche">La démarche</a>
                </li>
                <li>
                    <a href="<?php echo get_site_url(); ?>/archive/">Interventions</a>
                </li>
                <li>
                    <a href="<?php echo get_site_url(); ?>/partenaires/">Partenaires</a>
                </li>
                <li>
                    <a href="<?php echo get_site_url(); ?>/contact/">Nous soutenir / Contact</a>
                </li>
            </ul>
        </div>

        <div class="menu">
            <div class="text">
                Menu
            </div>
            <div class="container-barres-menu">
                <div class="barre"></div>
                <div class="barre"></div>
                <div class="barre"></div>
            </div>
        </div>
