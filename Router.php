<?php
use onlineeditor\Controllers\EditorController;
use onlineeditor\Controllers\ProjectsController;

class Router
{
  private $routes;


  public function __construct()
  {
      $this->routes = include 'Config/routes.php';

  }
  private function GetUri()
{
    $uri = $_SERVER['REQUEST_URI'];
    return trim($uri,'/');

}
  public function Run()
  {

      $uri = $this->GetUri();
      $preg_result = false;

      foreach ($this->routes as $pattern=>$path) {
          if( preg_match('~'.$pattern.'~',$uri))
          {

              $preg_result = true;
              $internalRoute = preg_replace('~'.$pattern.'~',$path,$uri);

              $segments = explode('/',$internalRoute);
              //print_r($segments);
              $controllerName = array_shift($segments);
              $controllerName = ucfirst($controllerName)."Controller";
             // echo $controllerName;
              $actionName = array_shift($segments).'Action';
             // echo $actionName;

              $controllerName = 'onlineeditor\\Controllers\\'.$controllerName;

              $controller = new $controllerName();


              call_user_func_array( array($controller,$actionName),$segments);
              break;

          }


      }
      
     if(!$preg_result)
     {
        // include_once _ROOT."/".'Controllers/EditorController.php';
         $controller = new EditorController();
         //$controller = new ProjectsController();
         call_user_func( array($controller,'IndexAction'));
     }

  }

}
