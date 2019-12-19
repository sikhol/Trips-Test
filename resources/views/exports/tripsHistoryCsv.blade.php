<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
table {
    border-collapse: collapse; width: 100%;
}
th {
  height: 50px;
}

table, td, th {
  border: 1px solid black;

}
</style>
</head>
<body>
<table style="border-collapse: collapse; width: 100%;" >
    <thead>
        <tr>
            <th rowspan="2">Id</th>
            <th rowspan="2">Latitude</th>
            <th rowspan="2">Longitude</th>
            <th rowspan="2">Datetime</th>
            <th rowspan="2">Speed (km/h)</th>
            <th rowspan="2">Voltage</th>
            <th rowspan="2">Distance</th>
            
        </tr>
    </thead>
    <tbody>
        <tr>
        </tr> 
    @foreach((array)$trips as $item)    
        <tr> 
            
            <td>{{ $item->id }}</td>
            <td>{{ $item->latitude }}</td>
            <td>{{ $item->longitude }}</td>
            <?php $dt = new DateTime($item->tracked_at);
            $tz = new DateTimeZone('Asia/Kuala_Lumpur'); 
            $dt->setTimezone($tz);
            ?>
            <td>{{ $dt->format('Y-m-d H:i:s')}}</td>
            <td>{{ (int)$item->speed *  1.852 }}</td>
            <td>{{ $item->voltage }}</td>
            <td>{{ $item->distance }}</td>
        </tr>
   @endforeach
    </tbody>
</table>
</body>
</html>



