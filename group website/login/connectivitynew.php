<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('test.db');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }
   //only when we are entering first time make it dynamic(table creation)
 $sql =<<<EOF
      create table test (user varchar(10), pass varchar(10));\n
EOF;

//insert
 $sql =<<<EOF
      insert into test values('$_POST[user]','$_POST[pass]');\n
EOF;

   $ret = $db->exec($sql);
   if(!$ret){
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully\n";
   }
   
   //select
   $sql =<<<EOF
      SELECT * from test;
EOF;

//output
   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "username = ". $row['user'] . "\n";
      echo "paSSWORD = ". $row['pass'] ."\n";
   }
   echo "Operation done successfully\n";
?>

