<?php

    if (realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ))
    {
        header("HTTP/1.0 404 Not Found");
        exit();   

    }

    if(!isset($_SESSION))
    {
        session_start();
    }
?>



    



<body>
    <table border="1" style="border-collapse: collapse;" width = "100%">

    <tr>

        <td align="left" style="border:0px">  <h1> <img src="img/websiteLogo.png" hieght="100px" width="100px"> Cultivation and Crop Distribution Management System </h1> </td>
        <td style="border:0px; padding-right:15px" align="right"> 

        <a href="publicHome.php"> Home </a> |
        <a href=""> About Us </a>

        </td>

    </tr>