<?php
$servername = "localhost";
$username = "book_review_user_24092025";
$password = "password";
$dbname = "book_review_24092025";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO book_review (full_name, book_title, review_text, rating)
  VALUES (:full_name, :book_title, :review_text, :rating)");
  $stmt->bindParam(':full_name', $full_name);
  $stmt->bindParam(':book_title', $book_title);
  $stmt->bindParam(':review_text', $review_text);
  $stmt->bindParam(':rating', $rating);

  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datu Apstrāde</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <br>Welcome <?php echo $_POST["full_name"]; ?><br>
</body>
</html>