<?php
class UserModel extends Model{
	public function register(){
		// Sanitize POST
	    //echo "debug6 Usermodel<br>";
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$password = md5($post['password']);
		$date = date("Y/m/d") . "<br>";
		if($post['submit']){
			// Insert into MySQL
			$this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');
			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->execute();
			echo "prdel";
			// Verify
			if($this->lastInsertId()){
				// Redirect
				header('Location: '.ROOT_URL.'users/login');
			}
		}
		return;
	}
	public function login(){	    
		// Sanitize POST
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		$password = md5($post['password']);
		if($post['submit']){
		// Compare login 
			$this->query('SELECT * FROM users WHERE email = :email AND password = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$row = $this->single();
			if($row){
				echo "Logged in";
			} else{
				echo "Not Logged";
			}
		}
		return;
	}
}