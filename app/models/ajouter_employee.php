<?php

Class Ajouter_employee
{
    function ajouterEmployee($POST, $FILES)
	{
		$DB = new Database();
		$_SESSION['error'] ="";
		$allowed_types[] ="image/jpeg";
		$allowed_types[] ="image/jpg";
		$allowed_types[] ="image/png"; 
		if(isset($POST['nom']) && isset($POST['prenom']) && isset($POST['date_naissance']) && isset($POST['cin']) && isset($POST['matricule']) && isset($POST['metier']) && isset($POST['situation_familliale'])&& isset($POST['email']) && isset($POST['departement'])&& isset($POST['adresse'])&& isset($POST['tel'])&& isset($FILES['image']))
		{

			if($FILES['image']['name'] != ""  &&  $FILES['image']['error'] != 0 && in_array($FILES['image']['type'], $allowed_types) )
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

			

			$arr['nom'] = $POST['nom'];
			$arr['prenom'] = $POST['prenom'];
			$arr['date_naissance'] = $POST['date_naissance'];
			$arr['cin'] = $POST['cin'];
			$arr['matricule'] = $POST['matricule'];
			$arr['situation_familliale'] = $POST['situation_familliale'];
			$arr['metier'] = $POST['metier'];
			$arr['email'] = $POST['email'];
			$arr['departement'] = $POST['departement'];
			$arr['adresse'] = $POST['adresse'];
			$arr['tel'] = $POST['tel'];
			$arr['image'] = $FILES['image'];

			





			$query = "INSERT INTO employee( matricule ,  nom ,  prenom ,  date_naissance ,  adresse ,  situation_familiale ,  cin ,  email ,  metier ,  password ,  role ,  id_departement ,  image ) VALUES (  :matricule ,  :nom ,  :prenom ,  :date_naissance ,  :adresse ,  :situation_familiale ,  :cin ,  :email ,  :metier ,  :password ,  :role ,  :id_departement ,  :image)";
			$data = $DB->write($query, $arr);
			if($data)
			{
				//alert hna !!
			}
		}
		

	}

}