<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductCtrl extends Controller
{
    //
    function index(){
        //Data Product
        $data=[
            "title"=>"Data Product",
            "page_title"=>"Data Product",
            "product"=>Product::All()
        ];

        return view("product.data_product",$data);
    
    }

    function form(Request $req){
        $data=[
            "title"=>"Product",
            "page_title"=>"Product",
            "rsProduct"=>Product::where("id_product",$req->id)->first()
        ];
    }

    function save(Request $req){
        //Validasi
        $req->validate(
            //Rule
            [
                "nm_product"=>"required",
            ],
            [
                //Message Error
                "nm_product.required"=>"Nama Product Harus Diisi !!!",
            ]
        );
        try{
            //Save Process
            Product::UpdateorCreate(
                [
                    "id_product"=>$req->input("id_product")
                ],
                [
                    "nm_product"=>$req->input("nm_product")
                ]
            );
            //Message Success
            $mess=["type"=>"Data Product","text"=>"Berhasil Disimpan !!!","icon"=>"success","button"=>"OK"];
        } catch(Exception $err){
            $mess=["type"=>"Data Product","text"=>"Gagal Disimpan !!!","icon"=>"error","button"=>"OK"];
        }
        //Redirect
        return redirect('product')->with($mess);
    }

    function delete(Request $req){
        try{
            Product::where("id_product",$req->id)->delete();
            //Message Success
            $mess=["type"=>"Data Product","text"=>"Data Berhasil Dihapus !!!","icon"=>"success","button"=>"OK"];
        } catch(Exception $err){
            //Message Error
            $mess=["type"=>"Data Product","text"=>"Data Gagal Dihapus !!!","icon"=>"error","button"=>"OK"];
        }
        //Redirect
        return redirect('product')->with($mess);
    }

   

}
