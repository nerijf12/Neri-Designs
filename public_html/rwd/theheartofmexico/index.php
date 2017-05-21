
<?php
include ('includes/header.php');
?>

<head>

<link href="reset.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr --> 
    
<script src="modernizr.js"></script>
    

</head>


<body>

<div class="container">

<!--nav-->
<?php
include ('includes/nav.php');
?>
<!--end nav-->

<div class="col-12 col-red">

<div class="col-8">

<section class="first">

<header>
<h1>Welcome to the Heart of Mexico</h1>
</header>

</section> <!--first class-->

</div> <!--col-8 class-->

</div> <!--col-12 class-->

<section class="slider">

   <div class="flexslider">
   
    <ul class="slides">
      <li><img src="assets/tacoA.jpg"/></li>
  	  <li><img src="assets/tacoB.jpg" /></li>
      <li><img src="assets/tacosC.jpg" /></li>
    </ul> 
           
   </div>

<div class="shim"></div>

</section>  <!--slider class-->

<div class="col-12 col-green">

<div class="col-8">

<section class="first">

<header>
<h1>The Daily Specials!</h1>
</header>

<article class="article1">

<h4>Welcome Back Tuesdays</h4>
<p>The first hour the quesadillas price are $2</p>

</article>

<article class="article2">

<h4>Mini-Tacos<br>Night</h4>
<p>Every friday and saturday between 12 am to <br> 2 am mini-tacos orders are a dollar</p>

</article>


<article class="article3">

<h4>Taco Friday<br>5 for 5</h4>
<p>Every friday at 5pm orders of 5
tacos cost $5</p>

</article>

</section> <!--first class-->

</div> <!--col-8 class-->

</div> <!--col-12 class-->

<div class="shim"></div>

<div class="col-12">

<div class="col-8">

<section class="middle">

<div class="location">

<article class="article2">

<h4>Location</h4>
<p>609 South Alamo Street, San Antonio</p>

</article>


<article class="article1">

<h4>HOURS OF OPERATION</h4>
<p>Tuesday-Thursday: 4pm-midnight</p>
<p>Friday and Saturday: 4pm-2am</p>
<p>Sunday:4pm-midnight</p>

</article>

</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3475.3717433232523!2d-98.48828360000002!3d29.4179296!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x865c58a9159810ef%3A0xe489f4182b5aad77!2s609+S+Alamo+St!5e0!3m2!1sen!2sus!4v1398715809905" width="600" height="300" frameborder="0" style="border:0"></iframe>

</section>

</div> <!--col-8 class-->

</div> <!--col-12 class-->

<div class="shim"></div>

</div>

<?php
include ('includes/footer.php');
?>

<!-- jQuery -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="jquery-1.7.min.js">\x3C/script>')</script>

  <!-- FlexSlider -->
  <script defer src="jquery.flexslider.js">
  
  </script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

</body>

</html>

