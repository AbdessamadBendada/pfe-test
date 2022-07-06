<?php

Class Ajouter
{
    function ajouterEmployee($POST, $FILES)
	{
		$DB = new Database();
		$_SESSION['error'] ="";
		$destination = "uploads/user.png";
		$allowed_types[] ="image/jpeg";
		$allowed_types[] ="image/jpg";
		$allowed_types[] ="image/png"; 
		
		if(isset($POST['nom']) && isset($POST['prenom']) && isset($POST['date_naissance']) && isset($POST['cin']) && isset($POST['matricule']) && isset($POST['metier']) && isset($POST['situation_familiale'])&& isset($POST['email']) && isset($POST['departement'])&& isset($POST['adresse'])&& isset($POST['role']) && isset($POST['tel'])&& isset($FILES['image'])	)	
		{
		
			// if(isset($POST['submit']))
			// $FILES['image']['name'] != ""  ||  $FILES['image']['error'] != 0 && in_array($FILES['image']['type'], $allowed_types)
				
			if($FILES['image']['name'] != ""  &&  $FILES['image']['error'] == 0 && in_array($FILES['image']['type'], $allowed_types))
			{

				//upload the image file :
				$folder = "uploads/";
				if(!file_exists($folder))
				{
					mkdir($folder, 0777, true);

				
				}
				$destination = $folder . $FILES['image']['name'];
				move_uploaded_file($FILES['image']['tmp_name'], $destination);
			}else{
				$_SESSION['error'] = "The file could not be uploaded";
			}

			
			$arr['matricule'] = $POST['matricule'];
			$arr['nom'] = $POST['nom'];
			$arr['prenom'] = $POST['prenom'];
			$arr['date_naissance'] = $POST['date_naissance'];
			$arr['adresse'] = $POST['adresse'];		
			$arr['situation_familiale'] = $POST['situation_familiale'];
			$arr['cin'] = $POST['cin'];
			$arr['email'] = $POST['email'];
			// $arr['metier'] = $POST['metier'];
			// $arr['password'] = $POST['password'];
			$arr['id_departement'] = $POST['departement'];
			// $arr['tel'] = $POST['tel'];
			$arr['image'] = $destination;
			$arr['sexe'] = $POST['sexe'];
			$arr['role'] = $POST['role'];	
			$arr['metier'] = $POST['metier'];
					
			// $arr['role'] = $POST['role'];
		
			$query = "INSERT INTO employee( matricule ,  nom ,  prenom ,  date_naissance ,  adresse ,  situation_familiale ,  cin ,  email  ,  id_departement ,  image, sexe, role, metier) VALUES (  :matricule ,  :nom ,  :prenom ,  :date_naissance ,  :adresse ,  :situation_familiale ,  :cin ,  :email,  :id_departement ,  :image, :sexe, :role, :metier)";
			$data = $DB->write($query, $arr);
			
			// if($data)
			// {s
			// 	//alert hna !!
			// 	echo" everythings okaayy man"; 
			// 	die();
				
			// }else{
			// 	echo "everythings not  okaayy  man";
			// 	die();
				
			// } 
		}

	

		
	
						
	}


}