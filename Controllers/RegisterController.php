<?php


namespace onlineeditor\Controllers;

use onlineeditor\Controllers\Controller as Controller;
use onlineeditor\Views\View;
use onlineeditor\Models\EditorHtml;


class RegisterController extends Controller
{
 public function __construct()
{
    parent::__construct();
    $this->view = new View();

}

public function ShowPageAction()
{
    //echo 111;
    $dataArray = array ('logStatus'=>$this->user->GetStatus(),'viewName'=>'RegisterView.php');
    $this->view->RenderView($dataArray);

}

public function RegisterAction()
{
   // echo 22;
   $ret = $this->user->Register($_POST['login'],$_POST['password']);
   if($ret)   header("Location: /");
   else   header("Location: /register");
}

}