<?php
$handler=mysqli_connect("localhost","root","","car");
if($handler){
    echo "success";
}else{
    echo "fail";
}
?>