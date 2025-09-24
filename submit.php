<?php
$servername = "localhost";
$username = "book_review_user_24092025";
$password = "password";
$dbname = "book_review_24092025B";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT full_name, book_title, review_text, rating FROM book_review";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "full_name: " . $row["full_name"]. " - book_title: " . $row["book_title"]. " - review_text" . $row["review_text"]. " - rating" . $row["rating"]."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datu Apstrāde</title>
</head>
<body>
    Welcome <?php echo $_POST["vards"]; ?><br>
    Your surname is: <?php echo $_POST["uzvards"]; ?>
</body>
</html>