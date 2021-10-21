<?php
// echo readfile("C:\Users\Haris\Desktop\Codes practice.txt");
$myfile = fopen("C:\Users\Haris\Desktop\Codes practice.txt", "r") or die("Unable to open file!");
// echo fread($myfile,filesize("C:\Users\Haris\Desktop\Codes practice.txt"))."<br>";
// echo filesize("C:\Users\Haris\Desktop\Codes practice.txt");
// echo "<br>";
// echo feof($myfile);
// echo "<br>";
// echo fgets($myfile);
while(!feof($myfile)) {
    // echo fgetc($myfile);
    echo "<br>";
echo feof($myfile);
echo "<br>";
echo fgets($myfile);
  }
  echo "<br>";
  echo feof($myfile);
fclose($myfile);
?>
