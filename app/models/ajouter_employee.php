<?php

Class Ajouter_employee
{
    function ajouterEmployee($POST, $FILES)
	{
		$DB = new Database();
		if(isset($POST['nom']) && isset($POST['prenom']) && isset($POST['date_naissance']) && isset($POST['cin']) && isset($POST['matricule']) && isset($POST['metier']) && isset($POST['situation_familliale'])&& isset($POST['email']) && isset($POST['departement'])&& isset($POST['adresse'])&& isset($POST['tel'])&& isset($FILES['image']))
		{
			//upload the image file :
			move_uploaded_file($FILES['image']['tmp_name'], );
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
		}
		

	}

}