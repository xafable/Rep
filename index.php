<?php
session_start();

/*require_once 'Controllers/UploadPageController.php';
require_once 'Controllers/EditorController.php';
require_once 'Controllers/UploadFileController.php';
require_once 'Controllers/ChangeSettingsController.php';
require_once 'Controllers/AuthController.php';
require_once 'Controllers/SaveToDbController.php';
require_once 'Controllers/ProjectListController.php';
require_once 'Controllers/LoadFromDbController.php';*/

define('_ROOT',dirname(__FILE__));

require _ROOT."/Config/"."Loader.php";
include _ROOT."/"."Router.php";


$router = new Router();
$router->Run();

/*if ($_SERVER['REQUEST_URI'] == "/uploadfile")
{

    $controller = new UploadFileController();
    $controller->Run();
}
else if($_SERVER['REQUEST_URI'] == "/")
{

   $controller = new EditorController();
   $controller->Run();
}
else if($_SERVER['REQUEST_URI'] == "/uploadpage")
{

    $controller = new UploadPageController();
    $controller->Run();
}
else if($_SERVER['REQUEST_URI'] =="/ChangeSettings")
{
    $controller = new ChangeSettingsController();
    $controller->Run();
}
else if($_SERVER['REQUEST_URI'] =="/login")
{
    $controller = new AuthController();
    $controller->Run();
}
else if($_SERVER['REQUEST_URI'] =="/SaveToDb")
{
    $controller = new SaveToDbController();
    $controller->Run();
}
else if($_SERVER['REQUEST_URI'] =="/projectlist")
{
    $controller = new ProjectListController();
    $controller->Run();
}
else if($_SERVER['REQUEST_URI'] =="/loadfromdb")
{
    $controller = new LoadFromDbController();
    $controller->Run();
}

*/


