<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="mydb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
    
//     if ($conn->query($sql) === TRUE) {
//       echo "Table MyGuests created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }

// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com'),('Mary', 'Moe', 'mary@example.com'),('Julie', 'Dooley', 'julie@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Mary', 'Moe', 'mary@example.com');";
// $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('Julie', 'Dooley', 'julie@example.com')";


// // prepare and bind
// $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
// $stmt->bind_param("sss", $firstname, $lastname, $email);

// // set parameters and execute
// $firstname = "John";
// $lastname = "Doe";
// $email = "john@example.com";
// $stmt->execute();

// $firstname = "Mary";
// $lastname = "Moe";
// $email = "mary@example.com";
// $stmt->execute();

// $firstname = "Julie";
// $lastname = "Dooley";
// $email = "julie@example.com";
// $stmt->execute();

// echo "New records created successfully";


// if ($conn->query($sql) === TRUE) {
//   echo "New records created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }
$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

// $sql = "DELETE FROM MyGuests WHERE id=3";

// if ($conn->query($sql) === TRUE) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . $conn->error;
// }

$conn->close();
?>