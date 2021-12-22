<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Report extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function getLatestReportData($id){
      switch($id){
        case "button-1":
          $data = DB::table('private_properties')->orderBy('units_count', 'DESC')->limit(10)->get();
          break;
        case "button-2":
          $data = DB::table('private_properties')->orderBy('land_size_sqft', 'asc')->limit(10)->get();
          break;
        case "button-3":
          $data = DB::table('private_properties')->orderBy('land_size_sqft', 'DESC')->limit(10)->get();
          break;
        case "button-4":
          $data = DB::table('private_properties')->orderBy('top_year', 'DESC')->limit(10)->get();
          break;
        case "button-5":
          $data = DB::table('private_properties')->orderBy('top_year', 'ASC')->limit(10)->get();
          break;
        case "button-6":
          $data = DB::table('private_properties')->orderBy('units_count', 'ASC')->limit(10)->get();
          break;
        default:
          $data = DB::table('private_properties')->orderBy('units_count', 'DESC')->limit(10)->get();
          break;
          break;
      }

      return json_encode($data);
    }
}
