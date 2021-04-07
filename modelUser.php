<?php


Class modelUser {
	
	public $conn;
	
	function __construct(){	
	
		$this->conn = new mysqli("localhost", "root", "", "OSINT");	
		
	}
	
	function registerUser ($username, $password, $firstName, $lastName){
		
		
		$sql = "INSERT INTO user (username, password, firstName, lastName)
        VALUES ('$username', '$password', '$firstName', '$lastName')"; 
		
			
		if ($this->conn->query($sql) === TRUE) {
		echo "User created successfully.";
		} else {
		echo "Unsuccessful creation.";
		}
		$this->conn->close(); // close DB connection		
		
	}
	
	function userLogin(){
		
			$sql = "SELECT * FROM book order by ID desc";
	
			$result = $this->conn->query($sql);


			if ($result->num_rows > 0) {
			// output data of each row
			
			 $allRows =  array();
			  while($row = $result->fetch_assoc()) {
				  
				  $allRows [] = $row;
				
				}				
				include "View/allBooksView.php";
				new viewBooks($allRows);
				
			} else {
				echo "0 results found";
			}
			
		}
		
		
	function userLogin( $username, $password ){
			
			$sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' ";
			
			$result = $this->conn->query($sql);
			
			if($result->num_rows > 0 ){
				include "View/exerciseView.html";
			}
			else{
				
				echo "No results found";	
			}	
				
				
				
		}
	}
	
?>