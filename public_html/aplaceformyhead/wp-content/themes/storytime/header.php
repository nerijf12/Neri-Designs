<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 

<meta name="generator" content="Wordpress <?php bloginfo('version') ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 

<meta name="keywords" content="design, art, photography, creative, web, html, css, responsive, blog, stories, creepypasta, urban legends, tales, myths, imaginative, a place for my head, horror, fantasy, sic-fi, fiction, mystery, short storie">

<meta name="description" content="Welcome to a place for my head, a place for your mind to take a journey into a fictional place that will fit your distinct likings. We all enjoy expanding into our own story, having a journey that takes us from the natural world into a fictional, imaginative even spooky tale that engages our consciousness and takes us into our own satisfying place.Go ahead! Pick a story and take your minds into an adventure.">

<meta name="author" content="Juan F. Neri">

<title><?php bloginfo('name'); ?><?php wp_title(); ?></title> 

<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css">

<script type="text/javascript" src="//use.typekit.net/orm4jef.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<link rel="alternative" type"application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" /> 

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> 

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>"/path/to/favicon.ico" /> 

<?php wp_head(); ?>


</head> 


<body> 

<div id="top-wrapper">
  
  <!-- start page header --> 
  <header class="page-header">
<div id="translator"> 
<?php echo do_shortcode('[google-translator]'); ?>
</div>
  <div class="shim"></div>
    <h1 id="main"><?php bloginfo('name'); ?></h1> 
  </header> 
  <!-- end page header --> 

 <!-- start page nav -->
  <nav class="page-nav">
    <ol> 
       <li><a href="<?php bloginfo('url'); ?>" title="home">Home</a></li>
        <?php wp_list_pages('title_li='); ?>
    </ol> 
  </nav> 
  
  <!-- end page nav --> 
  
  </div> <!-- end top wrapper -->

  <div id="wrapper"> 
  
  <div class="shim"></div>