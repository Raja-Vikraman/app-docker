 <?php
$servername = "mysql";
$username = "root";
$password = "infi";
$port = "3306";

try {
  $conn = new PDO("mysql:host=$servername;port=$port;dbname=mysql", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 
