<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Helpers\Helper;
use App\Models\Cluster;
use App\Models\Product;
use App\Models\User;
use App\Models\Revenue_Dls;


class DashboardCtrl extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    function index(Request $req){

        $tahun = $req->method()=="GET" ? date("Y") : $req->input("tahun");
        $bulan = $req->method()=="GET" ? date("m")-1 : $req->input("bulan");

        // echo $tahun." ".$bulan;
        // dd($req->all());

        $product = Product::whereIn("id_product",json_decode(Helper::get_item('product')))->get();

        $revenue_dls=[];
        foreach($product as $rsProduct){
            $revenue_dls[] = [
            "data" => DB::table("table_revenue_cluster")
            ->join("table_cluster","table_revenue_cluster.id_cluster","=","table_cluster.id_cluster")
            ->join("table_product","table_revenue_cluster.id_product","=","table_product.id_product")
            ->select("table_revenue_cluster.*","table_cluster.nm_cluster","table_product.nm_product")
            ->where("table_revenue_cluster.bulan_new","=",$bulan)
            ->where("table_revenue_cluster.tahun","=",$tahun)
            ->where("table_revenue_cluster.id_product","=",$rsProduct->id_product)
            ->get(),
            "title" => $rsProduct->nm_product
            ];
        } 

        $listbulan = [1=>"Januari",2=>"Februari",3=>"Maret",4=>"April",5=>"Mei",6=>"Juni",7=>"Juli",8=>"Agustus",9=>"September",10=>"Oktober",11=>"November",12=>"Desember"];

        // dd($revenue_dls);

        $data = [
           "title"=>"Data Revenue ".$listbulan[$bulan]." ".$tahun,
           "t_bulan_old"=>$bulan == 1 ? $listbulan[12] : $listbulan[$bulan-1],
           "t_bulan_new"=>$listbulan[$bulan],
            "page_title"=>"Dashboard",
            "rev"=>$revenue_dls,
            "bulan"=>$listbulan,
        ];
        return view("dashboard",$data);
    }

    function profile(){
        $data = [
            "title" => "Profile",
            "page_title" => "Profile",
            "user" => User::where("id",Auth::user()->id)->first()
        ];

        return view("dashboard",$data);
    }

    function update(Request $req){
        
        User::where("id",$req->input("id"))->update([
            "name"=>$req->input("name"),
            "email"=>$req->input("email"),
            "password"=> $req->input("password") == "" ? $req->input("old_password") : Hash::make($req->input("password")),
        ]);
            $mess = ["type"=>"Data Profil","text"=>"Berhasil Diperbarui !!!","icon"=>"success","button"=>"OK"];
          // Redirect
          return redirect('/')->with($mess);
    }


}
