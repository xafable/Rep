<?php
return array(
    'login'=>'Auth/Login',
    'logout'=>'Auth/Logout',
    'project/([0-9]+)'=>'Projects/LoadProject/$1',
    'projects/my'=>'Projects/LoadUserProjects',
    'projects/all'=>'Projects/LoadAllProjects',
    'generate'=>'Editor/GeneratePage',
    'uploadfile'=>'Upload/UploadFile',
    'uploadpage'=>'Upload/ShowPage',
    'savetodb'=>'Editor/SaveToDb',
    'register/submit'=>'Register/Register',
    'register'=>'Register/ShowPage'


);
