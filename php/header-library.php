<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="generator" content="Bludit">

<?php echo Theme::metaTags('title'); ?>
<?php echo Theme::metaTags('description'); ?>

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo Theme::src('img/favicons/apple-touch-icon.png'); ?>">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo Theme::src('img/favicons/favicon-32x32.png'); ?>">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo Theme::src('img/favicons/favicon-16x16.png'); ?>">
<link rel="manifest" href="<?php echo Theme::src('img/favicons/site.webmanifest'); ?>">
<link rel="mask-icon" href="<?php echo Theme::src('img/favicons/safari-pinned-tab.svg'); ?>" color="#5bbad5">
<?php echo Theme::favicon('img/favicons/favicon.ico', 'image/x-icon'); ?>
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="<?php echo Theme::src('img/favicons/browserconfig.xml'); ?>">
<meta name="theme-color" content="#ffffff">

<!-- Inline CSS Embed. For FCP! LCP! PC...wait -->
<style type="text/css"><?php include(THEME_DIR_PHP . 'critical.php'); ?></style>

<!-- Header Default Libraries Embed -->
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/picnic/7.1.0/picnic.min.css" integrity="sha512-HZgZOfcUw1rxWuEBlzDis5U4HlbzR0wcWmb3FrLSKV6uhZiZpT9JSTzPJplHDmJZJFNfAReW+iDELJ1kADYHtA==" as="style" crossorigin="anonymous" referrerpolicy="no-referrer" onload="this.onload=null;this.rel='stylesheet'" /><noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/picnic/7.1.0/picnic.min.css" integrity="sha512-HZgZOfcUw1rxWuEBlzDis5U4HlbzR0wcWmb3FrLSKV6uhZiZpT9JSTzPJplHDmJZJFNfAReW+iDELJ1kADYHtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></noscript>
<link rel="preload" href="<?php echo Theme::src('css/style.css'); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'"><noscript><link rel="stylesheet" href="<?php echo Theme::src('css/style.css'); ?>"></noscript>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'"><noscript><link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"></noscript>

<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>