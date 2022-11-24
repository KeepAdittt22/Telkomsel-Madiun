<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserCtrl extends Controller
{
    //Data User
    function index(){
        $data=[
            "title"=>"Data User",
            "page_title"=>"Data User",
            "users"=>User::All()
        ];
        return view("user.data_user",$data);
    }

    //Form User
    function form(Request $req){
        $data=[
            "title"=>"Tambah User",
            "title_page"=>"Tambah User",
            "rsUser"=>User::where("id",$req->id)->first()
        ];
    }

    function save(Request $req){
        // dd($req->all());
        // Validation
         $req->validate(
            // Rule
            [
                "name" => "required",
                "email" =>"required|email|unique:users,email,".$req->input("id").",id",
                "role" => "required",
            ],
            // Message Error
            [
                "name.required" => "Nama User Wajib diisi !!",            
                "email.required" => "Email Wajib diisi !!",            
                "email.email" => "Email Invalid !!",
                "email.unique" => "Email Sudah Terdaftar !!",
                "role.required" => "Role Wajib Diisi !!!"
            ]
        );

        try{
            //Proses Save
            User::UpdateorCreate(
                [
                    "id"=>$req->input("id")
                ],
                [
                    "name"=>$req->input("name"),
                    "email"=>$req->input("email"),
                    "password"=> $req->input("password") == "" ? $req->input("old_password") : Hash::make($req->input("password")),
                    "role"=>$req->input("role"),
                ]
            );
            //Message Success
            $mess=["type"=>"Data User","text"=>"Berhasil Disimpan !!!","icon"=>"success","button"=>"OK"];

        }catch(Exception $err){
            $mess=["type"=>"Data User","text"=>"Gagal Disimpan !!!","icon"=>"error","button"=>"OK"];
        }
        return redirect('user')->with($mess);
    
    }

    function delete(Request $req){
        try {
            User::where("id",$req->id)->delete();
            $mess=["type"=>"Data User","text"=>"Berhasil Dihapus !!!","icon"=>"success","button"=>"OK"];
        } catch(Exception $err){
            $mess=["type"=>"Data User","text"=>"Gagal Dihapus !!!","icon"=>"error","button"=>"OK"];
        }
        // Redirect
        return redirect('user')->with($mess);
    }

}
