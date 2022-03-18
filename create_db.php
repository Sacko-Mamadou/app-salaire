<?php
   $dbhost = '10.0.0.210';
   $dbuser = 'racine';
   $dbpass = '';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   si(! $conn ) {
      die('Impossible de se connecter: ' . mysql_error());
   }
   
   echo « Connecté avec succès\n »;
   
   $sql = 'CRÉER une base de données test_db';
   $retval = mysql_query( $sql, $conn );
   
   echo « Base de données test_db créée avec succès\n »;

   si(! $retval ) {
      die('Impossible de créer une base de données: ' . mysql_error());
   

   }
   mysql_close($conn);
?>
