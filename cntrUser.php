<?php


include "View/siteMenuView.php";


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
		$this->model = new modelBook();
		
		if($flag=="insertBook"){		  		  
		  		  
		  $this->model->insertBook ($_REQUEST['title'], $_REQUEST['author'], $_REQUEST['desc'], $_REQUEST['price'], $_REQUEST['year']);		  
		}
		
		if($flag=="view"){ // model communicating with view		 
			$this->model->viewBookInfo();
		}
		if($flag=="search"){
			include "View/searchBookView.html";
			echo " <b> ID &nbsp;&nbsp; Title &nbsp;&nbsp; Author &nbsp;&nbsp; Description &nbsp;&nbsp;  Price &nbsp;&nbsp Year </b><br><br>";
			
		}
		
		$this->model = new modelBook();
		
		if($flag=="searchBook"){
			include "View/searchBookView.html";
			$this->model->searchBook ($_REQUEST['title']);
		}
	}
}	
?>