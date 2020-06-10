<html>
  <head>
  </head>
  <body>
<?php
$connectionInfo = array("UID" => "apuadmin", "pwd" => "apu@1234", "Database" => "DDACDBTP042049", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:dbservertp042049.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
echo "Connection to Db: Success!";
?>
  </body>
</html>
