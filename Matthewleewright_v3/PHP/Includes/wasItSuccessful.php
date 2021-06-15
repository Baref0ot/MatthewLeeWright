<?php
    function successGetUserName(){ 
        if(isset($_POST['submit'])){
            $name = $_POST['firstName'];
            return "Thank you ".$name." ! We'll reach out to you shortly!";
        }// end if
        else{
            return "Something went wrong...";
        }// end else
    }// end getUserName()

    $wasItSuccessful = successGetUserName();
    echo $wasItSuccessful;
?>