<!DOCTYPE html>

<html>

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="LIVE is a two-day national business competition hosted by the University of Toronto Scarborough held this year from November 14th – 15th, 2013. "/>
  <meta name="keywords" content="Live, Competition, 2013, Compete, Delegates, Partners, Mesa, UTSC, Management, Conference"/>

  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
  <link type="text/css" href="../css/main.css" rel="stylesheet"/>
  <link href='http://fonts.googleapis.com/css?family=Nunito:300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>
  <link rel="icon" type="image/png" href="../images/favicon.png">
  <title> LIVE Competition 2013 - Contact U</title>

<script>
function validateForm()
{
var x=document.forms["form"]["Email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>
</head>
<body>
    <!-- Navbar start -->
    <?php 
    include '../navbar.php';
    ?>
    <!-- Navbar end -->
<iframe id="frame" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=University+of+Toronto+Scarborough,+1265+Military+Trail,+Toronto,+ON&amp;aq=0&amp;oq=utsc&amp;sll=43.656877,-79.32085&amp;sspn=0.855445,2.113495&amp;ie=UTF8&amp;hq=University+of+Toronto+Scarborough,+1265+Military+Trail,+Toronto,+ON&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>

<div class="container" style="margin-top:40px;">
  <h1> Contact Us</h1>
  <hr />
  <p><h3>Have a Question?</h3>Please fill in the contact form bellow and we'll get back to you as soon as possible.</p>
<form name="form" method="post" onsubmit="return validateForm();" action="index.php">
  <strong>Name: (required)</strong><br><br><input type="text" name="Name"><br>
  <strong>Email: (required)</strong><br><br><input type="text" name="Email"><br>
  <strong>Content: (required)</strong><br><br>
  <textarea id="m" style="width:500px;height:100px;" name="content" maxlength="150" ></textarea><br>
  <button class="btn btn-primary" type="submit"> Send </button>
</form>

</div>

<br><br><br>

<?php

include '../footer.php';

?>

<!--Javascript for faster load time-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!--bootstrap js min file-->
<script type="text/javascript" src="../js/bootstrap.min.js"> </script>
<script type="text/javascript" src="../js/sticky.js"> </script>
<script>
    $(document).ready(function(){
      $("#header").sticky({topSpacing:0});
    });
  </script>
</body>

</html>