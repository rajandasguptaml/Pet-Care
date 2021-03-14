<html>
<head>
</head>
<body>  

<?php

$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Edit Product Information</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Product Name: <input type="text" name="name">
  <br><br>
  Product Price: <input type="text" name="email">
  <br><br>
  Product Size: <input type="text" name="website">
  <br><br>
  Product Details: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Product Size:
  <input type="radio" name="gender" value="female">Large
  <input type="radio" name="gender" value="male">Medium
  <input type="radio" name="gender" value="other">Small
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>