<?php
namespace onlineeditor\Controllers;

use onlineeditor\Controllers\Controller;
use onlineeditor\Models\Upload;
use onlineeditor\Views\View;

class UploadController extends Controller
{
    private $upload;

    public function __construct()
    {
        parent::__construct();
        $this->view = new View();
        $this->upload = new Upload();
    }

    public function UploadFileAction()
    {
        $this->upload->UploadFile();

    }

    public function ShowPageAction()
    {
        //$this->CheckLogin();

        $dataArray = array ('pageName'=>$this->editor->GeneratePage(),'content'=>$this->editor->GetContent(),'logStatus'=>$this->user->GetStatus(),'viewName'=>'UploadView.php','projectName'=>$this->editor->Getname());
        $this->view->RenderView($dataArray);

        // $this->view->RenderView('UploadView.php',$editor);
    }
}