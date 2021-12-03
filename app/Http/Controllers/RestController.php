<?php

namespace App\Http\Controllers;

use App\Models\Rest;
use Illuminate\Http\Request;

class RestController extends Controller
{
    function getData()
    {
        return ["result" => "fail", "email"=>"123@example.com"];
    }

    function list($id=null)
    {
        return $id?Rest::find($id):Rest::all();
    }

    function add(Request $request)
      {

        $rest = new Rest;
        $rest->title=$request->title;
        $rest->body=$request->body;
        $result = $rest->save();
        if($result)
        {
            return ["result"=>"data is saved"];
        }
         else
         {
            return ["result"=>"operation"];
         }
      }

}
