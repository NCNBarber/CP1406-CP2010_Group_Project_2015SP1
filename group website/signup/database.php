<html>
<body>
<h1>
hello </h1>
<?php
	
	$fname=$_GET['fname'];
	$lname=$_GET['lname'];
	$mname=$_GET['mname'];
	$address=$_GET['address'];
	$username=$_GET['username'];
	$password=$_GET['password'];
	
	
	
	class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('main.db');
      }
   }
   $db = new MyDB();
	$sql =<<<EOF
      insert into member values('$username','$password','$fname','$address');\n
EOF;

$db->exec($sql);

 if(!$db){
      echo "Hello";
   } else {
      echo "Opened database successfully\n";
   }
   ?>
</body>
</html>
    