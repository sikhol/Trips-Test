<?php

use Illuminate\Database\Seeder;
use App\Models\Trips;
use App\Models\Summary;
use App\Models\Duration;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trips')->delete();
        DB::table('summary')->delete();
        DB::table('duration')->delete();
        $json = File::get("database/data/vehicle-trip-20190223.json");
        $data = json_decode($json);
        foreach($data->trips as $a => $i){
                Trips::create([
                    'id' => $i->id,
                    'Datetime' =>date('Y-m-d H:i:s'),
                    'start' => json_encode($i->start),
                    'end' => json_encode($i->end),
                    'distance'=> $i->distance,
                    'duration'=> $i->duration,
                    'max_speed'=> $i->max_speed,
                    'average_speed'=> $i->average_speed,
                    'idle_duration'=> $i->idle_duration,
                    'score'=> $i->score,
                    'idles'=> json_encode($i->idles),
                    'histories'=> json_encode($i->histories),
                    'violations'=> json_encode($i->violations),
                ]);
        }
        Summary::create([
            'max_speed' => $data->summary->max_speed,
            'distance' =>  $data->summary->distance,
            'violation' => $data->summary->violation
        ]);
        Duration::create([
            'from' => $data->duration->from,
            'to' =>  $data->duration->to
        ]);

    }
}
