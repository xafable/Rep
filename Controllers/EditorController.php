<?php
//require_once('Controller.php');
namespace onlineeditor\Controllers;

use onlineeditor\Controllers\Controller as BController;
use onlineeditor\Views\View;

class EditorController extends BController
{

public function __construct()
{
    parent::__construct();
    $this->view = new View();
}

public function IndexAction()
{

    $pageName = $this->editor->GeneratePage();
    $content = $this->editor->GetContent();
    $logStatus = $this->user->GetStatus();

    $dataArray = array ('pageName'=>$pageName,'content'=>$content,'logStatus'=>$logStatus,'viewName'=>'EditorView.php','projectName'=>$this->editor->GetName());

    $this->view->RenderView($dataArray);

}

private function RunView(array $dataArray)
{

    call_user_func_array(array($this->view,'RenderView'),$dataArray);

}

public function SaveToDbAction()
{
        //$this->CheckLogin();
        $this->editor->SaveToDb($this->user->GetId(),$_POST['label']);
        header("Location: /");
        die();

}

    public function GeneratePageAction()
{
    $this->editor->GeneratePage();
    $dataArray = array ('pageName'=>$this->editor->GeneratePage(),'content'=>$this->editor->GetContent(),'logStatus'=>$this->user->GetStatus(),'viewName'=>'EditorView.php','projectName'=>$this->editor->Getname());
    $this->view->RenderView($dataArray);



}


}




