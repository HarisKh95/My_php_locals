<?php

function check_zero($d,$div)
{
    If($div==0)
    {
        throw new Exception("Divided by zero");
    }
    return $d/$div;
}

try{
echo check_zero(5,0);
}
catch(Exception $ex)
{
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code]
    $message";
}
finally {
    echo "<br>";
    echo "Process complete.";
  }
?>