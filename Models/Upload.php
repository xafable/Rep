<?php
namespace onlineeditor\Models;

class Upload
{
public function  UploadFile()
{

        $name = $_FILES['userfile']['name'];
    //echo file_get_contents($_FILES['userfile']['tmp_name']);
       // move_uploaded_file($_FILES['userfile']['tmp_name'], 'upl\\'.$name);
         $_SESSION['content'] = file_get_contents($_FILES['userfile']['tmp_name']);
        header("Location: /");
        die();

}
}