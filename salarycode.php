<?php
    $userName=$_POST['username'];
    $Num1=$_POST['num1'];
    $Num2=$_POST['num2'];
    $calcu=($Num1)-($Num2);
    echo '<script type="text/javascript">alert("Your Name  : '.$userName."and Your Deposite Ammount : ".$calcu.'");
        window.location.href="salary.php";
    </script>';
?>