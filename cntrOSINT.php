<?php


include "View/menuView.php";


class cntrOSINT {

    public $model, $view;
	
	function __construct() {	
	}
	
	function viewMenu(){		
		
		$this->view = new siteMenu();
	}	
	
	function actions($flag) {	
	
	    $this->viewMenu();		
		
		if($flag=="login"){
		   include "View/userLogin.html";
		}  
		
		include "Model/modelUser.php";
		$this->model = new modelUser();
		
		if($flag=="registerUser"){		  		  
		  		  
		  $this->model->insertBook ($_REQUEST['username'], $_REQUEST['password'], $_REQUEST['firstName'], $_REQUEST['lastName']);		  
		}

		if($flag=="view"){
			include "View/viewAccount.html";
			echo " <b> ID &nbsp;&nbsp; username &nbsp;&nbsp; password &nbsp;&nbsp; firstName &nbsp;&nbsp;  lastName </b><br><br>";
			
		}
		
		$this->model = new modelUser();
		
		if($flag=="list"){
			include "View/exerciseView.html";
			$this->model->searchBook ($_REQUEST['title']);
		}
	}
}	
?>