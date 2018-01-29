<?php
session_start();
        $_SESSION['name']=$_POST["name"];
        $_SESSION['reg']=$_POST["regNo"];
		$_SESSION['mobile']=$_POST["mobile"];
		$_SESSION['dept']=$_POST["dept"];
        $_SESSION['year']=$_POST["year"];

    echo "Name : $_SESSION[name]";
    echo "REG : $_SESSION[reg]";
    echo "Name : $_SESSION[mobile]";
    echo "Name : $_SESSION[dept]";
    echo "Name : $_SESSION[year]";
 header ("location:prEvents.php");
?>