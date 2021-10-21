<?php
date_default_timezone_set('Asia/Karachi');
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$date=date('d-m-y h:i:a');
echo "Hello $name<br>We have recieved your contact information <br>Phone:$phone<br>E-mail:$email<br>on date:$date<br> we will contact you shortly." ;


?>