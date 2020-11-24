<?php


namespace onlineeditor\Models;


class Generator
{
    private $page;


    public function GeneratePage($content,$csscontent)
    {
        $name = random_int (  1 ,  400000 ).'.html';
        $this->page = $name;
        file_put_contents('./temp_pages/'.$name, $this->MergeContent($content,$csscontent));
        return $name;
    }

    public function GetPage()
    {
        return $this->page;
    }

    private function MergeContent($content,$csscontent)
    {

       return $merge = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style>'.$csscontent.'</style></head><body>'.$content.' </body></html>';

    }
}