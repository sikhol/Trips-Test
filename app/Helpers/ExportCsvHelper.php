<?php

namespace App\Helpers;
// namespace App\Exports;
use App\Models\DailySettlement;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Carbon\Carbon;


Class ExportCsvHelper implements FromView  {

    public function __construct( $trips, $name)
    {
         $this->name = $name;
         $this->trips = $trips;
    }
    public function view(): View
    {  
            $now = Carbon::now()->addDay();
            $now =date("dmY");
            
            $file = $this->name;
            $trips= $this->trips[0];
           
            if ($file == 'tripsStartCsv'){
               $trips= $this->trips[0]['start'];
               $trips = json_decode($trips);
              
            }elseif ($file == 'tripsEndCsv'){
               $trips= $this->trips[0]['end'];
               $trips = json_decode($trips);
            }elseif ($file == 'tripsHistoryCsv'){
               $trips= $this->trips[0]['histories'];
               $trips = json_decode($trips);
            }elseif ($file == 'tripsAllCsv'){
               $trips= $this->trips[0];
              
            }
         
   
            return view('exports.'.$file,['trips' => $trips, 'now' => $now]);
        
    }

}