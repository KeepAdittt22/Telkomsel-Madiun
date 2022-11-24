<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Setting;

class SettingCtrl extends Controller
{
    function index(){
        $data = [
            "title"=>"Setting Tampilan Product",
            "page_title"=>"Setting Tampilan Product",
            "product"=>Product::All(),
        ];
        return view("setting.setting_tampilan",$data);
    }

    function save(Request $req){        
        try{
            foreach($req->input("setting") as $k => $v){
                if(Setting::where("key",$k)->first()==null){
                    Setting::create([
                        "key" => $k,
                        "value" => $k == "product" ? json_encode($v) : $v
                    ]);
                } else{
                    Setting::where("key",$k)->update([
                        "value" => $v,
                    ]);
                }
            }

            $mess=["type"=>"Tampilan Product ","text"=>"Berhasil Diperbarui !!!","icon"=>"success","button"=>"OK"];
        } catch(Exception $err){
            $mess=["type"=>"Tampilan Product ","text"=>"Gagal Diperbarui !!!","icon"=>"error","button"=>"OK"];
        }

        //Redirect
        return redirect('setting')->with($mess);
    }
}
