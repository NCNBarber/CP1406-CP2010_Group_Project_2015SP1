<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Template Page</title>
<link href="styles/mainstyles.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">
  <?php include("inc_navigation.php"); ?>
        <?php include("inc_leftSidebar.php"); ?>
  <div id="contentContainer">
  	<div class="alignedCentre">
  		<p><form>
    	<fieldset>
      	<h1><legend>Become a Member:</legend></h1>
        
        <p>You can support the Music Centre by becoming a Member and derive some benefits for yourself at the same time. Your subscription helps to keep us operating and we provide substantial discounts whenever possible. 
<br>
<br>
<strong>For the Music Centre's own events, Members' ticket discounts can be as high as 50%!</strong>
<br>
<br>
The Music Centre is also registered as a Deductible Gift Recipient. Any extra donations are tax-deductible!</p>
           User Name:<br>
        <input type="text" name="User Name">
        <br>
        Password:<br>
        <input type="password" name="Password">
        <br>
      <br>
      <br>
      First Name:<br>
        <input type="text" name="First Name">
        <br>
        Last Name:<br>
        <input type="text" name="Last name">
        <br>
        
        Address:<br>
        <textarea name="address"></textarea>
        <br>
        Suburb:<br>
        <input type="text" name="suburb">
        <br>
        <br>
        Email:<br>
        <input name="email" type="text" value="">
        <br>
        <br>
        <br>
        Phone:<br>
        <input type="text" name="Phone">
        <br>
         Phone (afterhours):<br>
        <input type="text" name="Phone">
        <br>
        Mobile:<br>
        <input name="mobile" type="text">
        <br>
             
        
        
        <br><br>
        <input type="submit" value="Submit">
      </p>
    </fieldset>
  </form></p>
  </div>
        </div>
        <?php include("inc_footer.php") ?>
	</div>
</body>
</html>