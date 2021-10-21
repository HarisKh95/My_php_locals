<?php

// $list='["Red","Blue","Green"]';
// $alist= json_decode($list);
// echo var_dump($alist);

// $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

// var_dump(json_decode($jsonobj));
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

$jage= json_encode($age);
$oage= json_decode($jage,true);
echo $oage->Peter;
?>