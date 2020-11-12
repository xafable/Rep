<?php
namespace onlineeditor\Models;

class EditorHtml
{
    private $content;
    private $page;
    private $name;
    private $db;

    public function __construct()
    {
        $this->content = 'Hello!';
        $this->db  = \DBapp::Get();

    }

    public function SaveToDb($userid,$name)
    {
        //echo 'save';
        $stmt= $this->db->prepare("insert into pages (user_id,content,name) values(:userid,:content,:name)");
        $stmt->execute(['userid' => $userid, 'content' => $this->content,'name' => $name]);
        $_SESSION['nameproject'] = $name;

    }
    public function SetName($name)
    {
       $this->name = $name;
    }

    public function GetName()
    {
        return $this->name;
    }

    public function LoadToEditor($content)
    {
       $this->content = $content;
    }

    public  function  GetContent()
    {
        return $this->content;
    }


    public function GeneratePage()
    {
       $name = random_int (  1 ,  400000 ).'.html';
       $this->page = $name;
       file_put_contents('./temp_pages/'.$name, $this->content);
       return $name;
    }
    public function GetPage()
    {
        return $this->page;
    }


}