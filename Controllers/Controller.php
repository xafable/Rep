<?php
namespace onlineeditor\Controllers;

use onlineeditor\Models\EditorHtml;
use onlineeditor\Models\User;


//require_once _ROOT."/"."Models/User.php";
//require_once _ROOT."/"."Models/EditorHtml.php";
//require_once _ROOT."/"."Views/View.php";

abstract class Controller
{
    protected $model;
    protected $view;
    protected $user;
    protected $editor;

    public function __construct()
    {
        $this->user = new User();
        $this->editor = new EditorHtml();

        if ($_POST['content']) {
            $_SESSION['content'] = $_POST['content'];
        }


        $this->CheckSessionContent();
        $this->CheckLogin();
    }

    private function CheckSessionContent()
    {
        if ($_SESSION['content']) {
            $this->editor->LoadToEditor($_SESSION['content']);
            $this->editor->SetName($_SESSION['nameproject']);
        }
    }

    private function CheckLogin()
    {
        if($_COOKIE['login'])
        {

            $this->user->Login($_COOKIE['login'],$_COOKIE['pass']);
        }

    }

}