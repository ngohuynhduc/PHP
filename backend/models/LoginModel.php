<?php 
	trait LoginModel{
		public function modelLogin(){
			$email=$_POST["email"];
			$password=$_POST["password"];
			// ma hoa password
			$password= md5($password);
			// kiem tra trong csdl
			$conn = Connection::getInstance();
			$query= $conn->query("select email,password from users where email='$email'");
			//lay mot ban ghi
			$result = $query->fetch();
			if (isset($result->email)){
				if($result->password == $password){
					//dang nhap thanh cong
					$_SESSION["email"]=$email;
					return true;
				}
			} else {
				return false;
			}
		}
	}		
 ?>