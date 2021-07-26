<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\MDataPlant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class IndexController extends Controller
{
    //

    public function index(){
        try{
            $plant_type = MDataPlant::select('plant_type')->distinct()->get();

            $i = 0;
            foreach($plant_type as $plant){
                $data_plant[$i] = [];
                $data = MDataPlant::where('plant_type', $plant->plant_type)->get('value');

                foreach($data as $dat){
                    array_push($data_plant[$i], $dat->value);
                }
                Log::debug($i);
                $i++;
            }

            $data['plant'] = $data_plant;
            // dd($data_plant);
            return view('index', $data);
        }catch(Exception $e){
            Log::error($e->getMessage().' IndexController@Index ');
        }
    }
}
