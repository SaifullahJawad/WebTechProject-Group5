<?php
include_once('header.html');

session_start();
	if(isset($_post['Delete']))
	{
	
      echo "deleted Unsuccessfull";
    }
   else
   {
    echo "deleted successfull";
   }


  ?>