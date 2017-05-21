
<?php
include ('includes/header.php');
?>

<head>
<link href="reset.css" rel="stylesheet" type="text/css">

<link href="style.css" rel="stylesheet" type="text/css">

</head>


<body class="active">

<div class="container">

<?php
include ('includes/nav.php');
?>

<div class="col-12 col-red">

<div class="col-8 main_content" role="main">

<section>

<header id="contact">
<h1>Contact</h1>
</header>
</section>

</div> <!--col-8 main content class-->

</div> <!--col-12 class-->

<div class="shim"></div>

<div class="col-8 main_content" role="main">

<section class="first">

<div id="aboutinfo">

<form name="htmlform" method="post" action="html_form_send.php">

<table>
<tr>
 <td valign="top">
  <label for="first_name">First Name</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
 
<tr>
 <td valign="top">
  <label for="last_name">Last Name</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>

<tr>
 <td valign="top">
  <label for="email">Email Address</label>
 </td>
 
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
 
</tr>

<tr>

 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
 
</tr>

<tr>
 <td valign="top">
  <label for="comments">Comments </label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
 
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">   ( <a href="http://www.freecontactform.com/html_form.php">HTML Form</a> )
 </td>
</tr>
</table>

</form>

</div>

</section> <!--first class-->

</div>

<div class="shim"></div>

</div>

<?php
include ('includes/footer.php');
?>

</body>

