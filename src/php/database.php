<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATABASE</title>
</head>
<body>
<?php

// Enable error reporting for all types of errors
error_reporting(E_ALL);
ini_set('display_errors', 1);


  class Database{
    private $connection;

    function __construct() {
        $this->connect_db();
    }

    public function connect_db() {
       $this->connection = mysqli_connect('localhost', 'root', '', 'mydb');
    }

    public function create($fname,$email, $investname,$amount,$date,$country){
      $sql = "INSERT INTO investments(fname,email,investname,amount,date,country) VALUES ('$fname','$email',' $investname','$amount','$date','$country')";
      $res = mysqli_query($this->connection, $sql);

      if($res){
         return true;
      }
    }

    public function read(){
      $sql = "SELECT * FROM investments";
      $res = mysqli_query($this->connection, $sql);
      return $res;
    }
 }
  $database = new Database();


// // Display the submitted data
// echo "<h2>Submitted Data:</h2>";
// echo "<p>Full Name: $fname</p>";
// echo "<p>Email: $email</p>";
// echo "<p>Investment Name: $investname</p>";
// echo "<p>Amount: $amount</p>";
// echo "<p>Date: $date</p>";
// echo "<p>Country: $country</p>";

    ?>
    
</body>
</html>


