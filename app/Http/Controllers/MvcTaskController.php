<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\File;
use App\Models\Trips;
use App\Models\Summary;
use App\Models\Duration;
use Excel;
use App\Helpers\ExportCsvHelper;

class MvcTaskController extends Controller
{
    
    public function index(){
       $data = Trips::get();
       $summary= Summary::get();
       $duration= Duration::get();
       foreach($data as $a => $i){
           $start=json_decode($i['start'],true);
           $end=json_decode($i['end'],true);
       }
       
      
       return view('trips', [ 'data' => $data, 'start' => $start, 'end' => $end, 'summary' => $summary, 'duration' => $duration]);

    }

    public function downloadCsv(Request $request,$id){
        $input = $request->all();
        $ex= explode('-',$id,2);
        
        $trips=Trips::where('id',$ex[0])->get();
        if (count($trips) != 0){
            if ($ex[1]== 'start'){
                $filename = 'StartTrips';
                $trips= json_decode($trips, true);
                $name = 'tripsStartCsv';
            }elseif ($ex[1]== 'end'){
                $filename = 'EndTrips';
                $trips= json_decode($trips, true);
                $name = 'tripsEndCsv';
            }elseif ($ex[1]== 'history'){
                $filename = 'HistoryTrips';
                $trips= json_decode($trips, true);
                $name = 'tripsHistoryCsv';
            }elseif ($ex[1]== 'all'){
                $filename = 'AllTrips';
                $trips= json_decode($trips, true);
                $name = 'tripsAllCsv';
            }            
            
        }
            
        return Excel::download(new ExportCsvHelper($trips,$name),  $filename.'.csv');                  
            
               
    }
}
