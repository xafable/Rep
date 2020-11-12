<?php
namespace onlineeditor\Models;

class Projects
{
    protected $content_list;
    protected $db;
    public function __construct()
    {
        $this->db  = \DBapp::Get();
    }

    public function GetAllProjectsList()
    {
        $stmt= $this->db->prepare("select name,id from pages ");
        $stmt->execute();
        $array = $stmt->fetchall(\PDO::FETCH_ASSOC);
        return $array;

    }

    public function GetUserProjectsList($userid)
    {
        $stmt = $this->db->prepare("select name,id from pages where user_id = :userid ");
        $stmt->execute(['userid' => $userid]);
        $array = $stmt->fetchall(\PDO::FETCH_ASSOC);
        return $array;
    }


    public function GetProject($id)
    {

        $stmt= $this->db->prepare("select name,content from pages where id = :id");
        $stmt->execute([ 'id' => $id ]);
        $array = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $array;


    }





}