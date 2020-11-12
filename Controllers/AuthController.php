<?php
namespace onlineeditor\Controllers;

use onlineeditor\Models\User;



class AuthController
{
    public function __construct()
    {

    }

    public function LoginAction()
    {
        //$editor = $this->model;
        $user = new User();

        $user->Login($_POST['login'],$_POST['password']);
        setcookie('login',$_POST['login']);
        setcookie('pass',$_POST['password']);
        header("Location: /");
        die();


       // $editor->GeneratePage();
       // $view = $this->view;
        //$data = array($editor,0);
        //$view->RenderView($data,'EditorView.php');

    }
    public function LogoutAction()
    {
        $user = new User();
        $user->Logout();
        header("Location: /");
        die();

    }




}