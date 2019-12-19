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
            <th rowspan="2"  >Id</th>
            <th rowspan="2">Datetime</th>
            <th rowspan="2">Start</th>
            <th rowspan="2">End</th>
            <th rowspan="2">Distance</th>
            <th rowspan="2">Duration</th>
            <th rowspan="2">Max Speed</th>
            <th rowspan="2">Average Speed</th>

            <th rowspan="2">Idle Duration</th>
           
            <th rowspan="2">Score</th>
            <th rowspan="2">Idles</th>
            <th rowspan="2">Histories</th>
            <th rowspan="2">Violatins</th>
            
        </tr>
    </thead>
    <tbody>
      
        <tr>
        </tr>
        
        <tr> 
            
            <td >{{ $trips['id'] }}</td>
            <td>{{ $trips['Datetime'] }}</td>
    
            <td>{{ $trips['start'] }}</td>
            <td>{{ $trips['end'] }}</td>
            <td>{{ $trips['distance'] }}</td>
          
            <td>{{ $trips['duration']}}</td>
            <td>{{ $trips['max_speed'] }}</td>
            <td>{{ $trips['average_speed'] }}</td>
            <td>{{ $trips['idle_duration'] }}</td>
            <td>'{{ $trips['score'] }}</td>
            <td>{{ $trips['idles'] }}</td>
            <td>{{ $trips['histories'] }}</td>
            <td>{{ $trips['violations'] }}</td>
        </tr>

    </tbody>
</table>
</body>
</html>



