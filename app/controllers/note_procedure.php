<?php

Class Note_procedure extends Controller
{
    	public function index($a='', $b='', $c='')
        {
            $DB = new Database();
            if(!isset($_SESSION['user_id'])) {
                header("Location:".ROOT. "login");
            }else{
                $query_notes = "SELECT * FROM publication order by id_publication desc";
                $data['success'] = $DB->read($query_notes);
                
                if(isset($_POST['submit_publier'])){
                    $arr['note'] = $_POST['nv_note'];
                    $query_insert = "insert into publication (publication) values (:note)";
                    $data['insert'] =  $DB->write($query_insert, $arr);
                    $query_notes = "SELECT * FROM publication order by id_publication desc";
                $data['success'] = $DB->read($query_notes);
                }
                if(isset($_POST['submit_supprimer'])){
                    $arr_delete['id_publication'] = $_POST['id_publication'];
                    $query_delete = "DELETE FROM publication WHERE id_publication = :id_publication";
                    $data['delete']=$DB->write($query_delete, $arr_delete);
                    $query_notes = "SELECT * FROM publication order by id_publication desc";
                $data['success'] = $DB->read($query_notes);
                    
                }
            $image_class = $this->loadModel("image_class");
            $data['cropped_image'] = $image_class->get_thumbnail($_SESSION['image']) ;
            $data['page_title'] = 'Note de Procedure';
            $this->view("template/note_procedure", $data);
            }
        }

       
}