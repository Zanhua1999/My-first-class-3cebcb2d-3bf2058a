


<?php
class MyLogger 
{
    var $message; 
    function log() 
    {
    echo $this->message;
    }
}
$logger = new MyLogger(); 
$logger->message = "Hello world!"; 
$logger->log(); 
?>
