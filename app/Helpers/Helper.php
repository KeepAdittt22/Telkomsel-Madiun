<?php
namespace App\Helpers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Kecamatan;
use App\Models\Cluster;
use App\Models\Setting;

class Helper {
    public static function get_id_kecamatan($nama_kec=null,$nama_kota=null){
        $rsKec = DB::table("table_kecamatan")
        ->join("table_kota","table_kecamatan.id_kota","=","table_kota.id_kota")
        ->select("table_kecamatan.id_kecamatan")
        ->where("table_kecamatan.nm_kecamatan",$nama_kec)
        ->where("table_kota.nm_kota",$nama_kota)
        ->first();

        //dd($rsKec);

        if($rsKec!=null){
            return $rsKec->id_kecamatan;
        } else {
            return "";
        }
    }

    public static function get_id_cluster($nama_cluster=null){
        $rsClus = DB::table("table_cluster")
        ->select("table_cluster.id_cluster")
        ->where("table_cluster.nm_cluster",$nama_cluster)
        ->first();

        if($rsClus!=null){
            return $rsClus->id_cluster;
        } else {
            return "";
        }
    }

    public static function get_id_product($nama=null){
        $rsPro = Product::where("nm_product",$nama)->first();
        if($rsPro!=null){
            return $rsPro->id_product;
        } else {
            return "";
        }
    }

    public static function convert_number($number = 0){
        // if($number < 1000000){
        //     $format = number_format($number);
        // } else if($number < 1000000000){
        //     $format = number_format($number / 1000000,2);
        // } else{
        //     $format = number_format($number / 1000000000,2);
        // }

        $format = number_format($number / 1000000000,2);

        return $format;
    }

    public static function get_item($key){
        $item=Setting::where("key",$key)->first();
        if($item==null){
            return "";
        }else {
            return $item->value;
        }
    }

}