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
			$query = "select * from employee where email = :email && password = :password limit 1";
 			$data = $DB->read($query, $arr);
            
            

 			if (is_array($data) && count($data) != 0) {
 				// code...
                 
 				$_SESSION['user_id'] = $data[0]->id_employee;
                $_SESSION['name'] = $data[0]->nom ." ".$data[0]->prenom;
				$_SESSION['role'] = $data[0]->role; // 1 => user ; 2 => admin
				$_SESSION['image'] = $data[0]->image;
				$_SESSION['matricule'] = $data[0]->matricule;
				$_SESSION['nbr_jrs_restants'] = $data[0]->jrs_restants;
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
			$arr['user_id'] = $_SESSION['user_id'];
			
			$query = "select * from employee where id_employee = :user_id";
 			$data = $DB->read($query, $arr);

 			if (is_array($data)) {
 				// code...
 				$_SESSION['user_id'] = $data[0]->id_employee;
 				return true;
 			}
		}

		return false;
	}


    function logout()
    {
	
		
        unset($_SESSION['username']) ;
		unset($_SESSION['name']) ;
		unset($_SESSION['role']) ;
		unset($_SESSION['image']) ;
		unset($_SESSION['matricule']) ;
		unset($_SESSION['user_id']) ;
		unset($_SESSION['nbr_jrs_restants']) ;
		unset($_SESSION['error']) ;

		
		
        // unset($_SESSION['username']);
        header("Location:".ROOT."login");
        
    }
}