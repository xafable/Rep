<?php
namespace onlineeditor\Controllers;

use onlineeditor\Controllers\Controller as BController;
use onlineeditor\Views\View;
use onlineeditor\Models\Projects;

/*require_once('Controller.php');
require_once(_ROOT."/".'Models/Projects.php');*/


class ProjectsController extends BController
{
    private $projects;

    public function __construct()
    {
        parent::__construct();
        $this->projects = new Projects();
        $this->view = new View();

    }

    public function LoadUserProjectsAction()
    {


        $dataArray = array('projectList'=>$this->projects->GetUserProjectsList($this->user->GetId()),'logStatus'=>$this->user->GetStatus(),'viewName'=>'ProjectsView.php');
        $this->view->RenderView($dataArray);


    }
    public function LoadAllProjectsAction()
    {

        $dataArray = array('projectList'=>$this->projects->GetAllProjectsList(),'logStatus'=>$this->user->GetStatus(),'viewName'=>'ProjectsView.php');
        $this->view->RenderView($dataArray);


    }
    public function LoadProjectAction($id)
    {

        $project =  $this->projects->GetProject($id);
        $this->editor->SetName($project['name']);
        $this->editor->LoadToEditor($project['content']);

        $dataArray = array ('pageName'=>$this->editor->GeneratePage(),'content'=>$project['content'],'logStatus'=>$this->user->GetStatus(),'viewName'=>'EditorView.php','projectName'=>$this->editor->Getname());
        $this->view->RenderView($dataArray);

    }

}