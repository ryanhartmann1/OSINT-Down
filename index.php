<?php


 include "Controller/cntrOSINT.php";

 $user = new cntrOSINT();
 
 
 
 if(!isset($_REQUEST['flag'])){
	 
      $user->viewMenu();
 }else{
	 
	 $user->actions($_REQUEST['flag']);
 }
 

?> 