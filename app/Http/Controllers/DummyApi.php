<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DummyApi extends Controller
{
    //


    function getData()

    {
        //echo "This is Api test";
         return ["name"=>"mkhan", "email"=>"mkhan@gmail.com", "address"=> "Noida"];
    }
}
