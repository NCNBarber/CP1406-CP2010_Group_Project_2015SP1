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