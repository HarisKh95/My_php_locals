<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  


<h2>PHP Form Validation Example</h2>
<form  action="php_comment.php" method="post">  
  Name: <input type="text" name="name">
  <span class="error">* 
  <?php include "php_comment.php"; 
  if(isset($nameErr))
  {
    echo $nameErr;
  }?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php /*include "php_comment.php";*/ 
  if(isset($emailErr))
  {
    echo $emailErr;
  }?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error">*<?php /*include "php_comment.php";*/
  if(isset($websiteErr))
  {
    echo $websiteErr;
  } ?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php /*include "php_comment.php";*/ 
  if(isset($genderErr))
  {
    echo $genderErr;
  }?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php /*include "php_comment.php";*/
echo "<h2>Your Input:</h2>";
if(isset($name))
{
    echo $name;
}
echo "<br>";
if(isset($email))
{
    echo $email;
}
echo "<br>";
if(isset($website))
{
    echo $website;
}
echo "<br>";
if(isset($comment))
{
    echo $comment;
}
echo "<br>";
if(isset($gender))
{
    echo $gender;
}

?>

</body>
</html>