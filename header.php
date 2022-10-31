<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
    <meta name="author" content="Dennis Kjellin, dekj2100@student.miun.se">
   <!--  <meta name="description" content="Dreamlodge - Boende och upplevelser i Sölden"> -->
   <!-- Tog bort meta description då mitt SEO plugin ger mig en ny-->
    <meta name="keywords" content="boende, sölden, lodges,">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <!--logotype container-->
        <a href="<?= get_home_url(); ?>">
            <img src="<?= get_template_directory_uri();?>./images/logo.png" class="logo" alt="back to home">
        </a>
        <input type="checkbox" class="nav-toggle" id="nav-toggle">
        <!--main nav-->
        <nav class="navbar">
        <?php wp_nav_menu(array ('theme_location' => 'main-nav')); ?>
        </nav>
        <!--span for toggling navbar-->
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
    </header>