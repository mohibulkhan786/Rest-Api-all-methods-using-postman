<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Illuminate\Support\Facades\Validator;

class DeviceController extends Controller
{
    //


    function list()

    {
        return Device::all();
    }


    function lists($id=null)

    {
        return $id?Device::find($id):Device::all();
    }


    function add(Request $request)
    {
        $device = new Device;
        $device->name = $request->name;
        $device->member_id = $request->member_id;

        $result = $device->save();

        if($result)
        {
            return ["the Data has been Saved"];

        }else{

            return ["operation faild!!!"];
        }

    }



    function update(Request $request)
    {
        $device = Device::find($request->id);
        $device->name = $request->name;
        $device->member_id = $request->member_id;

        $result = $device->save();

        if($result)
        {
            return ["the Data has been Update"];

        }else{

            return ["operation faild!!!"];
        }

    }

    function delete($id)
    {
     $device = Device::find($id);
     $result = $device->delete();

      if($result)
        {
            return ["the Data has been Delete"];

        }else{

            return ["operation faild!!!"];
        }

    }



    function search($name)
    {

     return Device::where("name" , "like" , "%".$name."%")->get();

    }



    function valids(Request $request)
    {
       $rules= array(
           
             "name"=>"required" ,
             "memeber_id"=>"required | max:4",
           
         
       );
       $valid = Validator::make($request->all(), $rules);
       if ($valid->fails())
       {
        return response()->json($valid->errors(),401);

       }else{

        $device=new Device;
        $device->name=$request->name;
        $device->member_id=$request->member_id;
         $result= $device->save();

         if($result){

            return ["validation successs"];
         }else{

            return ["operation failed!!"];
         }

       }

   }



    


    






}
