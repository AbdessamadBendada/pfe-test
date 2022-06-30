<?php



Class User
{
	
	function login($POST)
	{
		$DB = new Database();

		if(isset($POST['password']) && isset($POST['email']))
		{
            
			$_SESSION['error'] = "";
			$arr['password'] = $POST['password'];
			$arr['email'] = $POST['email'];
			$query = "select * from test where email = :email && password = :password limit 1";
 			$data = $DB->read($query, $arr);
            
            

 			if (is_array($data) && count($data) != 0) {
 				// code...
                 
 				$_SESSION['user_id'] = $data[0]->id;
                $_SESSION['name'] = $data[0]->name;
				// show($_SESSION['name']);
				// die;
 				header("Location:".ROOT."home");
 			}else{
			$_SESSION['error'] = "Mot de pass ou email incorrecte !";
		}
        
        
 			
			
		}else{
			$_SESSION['error'] = "Veuillez entrer un valid email ou mot de pass!";
		}
		
		
	}
// a remplir avant le 15 / 06 / 2022
    function signup()
    {

    }

	function checkSignin()
	{
		$DB = new Database();
		if(isset($_SESSION['user_id']))
		{
			// $_SESSION['user_id'] = $data[0]->id;
			$arr['user_id'] = $_SESSION['id'];
			
			$query = "select * from test where id = :user_id";
 			$data = $DB->read($query, $arr);

 			if (is_array($data)) {
 				// code...
 				$_SESSION['user_id'] = $data[0]->id;
 				return true;
 			}
		}

		return false;
	}


    function logout()
    {
        unset($_SESSION['user_id']) ;
        // unset($_SESSION['username']);
        header("Location:".ROOT."login");
        
    }
}