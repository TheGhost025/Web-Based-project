<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imageControl extends BaseController
{


    //include($_SERVER['DOCUMENT_ROOT']."/Web-Based-project/model/Upload.php");

        function connect_to_database(){
            $image = new Upload_Image();
            $image->upload();
        }

}


