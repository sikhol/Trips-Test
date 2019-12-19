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
            <th rowspan="2" style="width:100px" >Id</th>
            <th rowspan="2">Latitude</th>
            <th rowspan="2">Longitude</th>
            <th rowspan="2">Datetime</th>
            
        </tr>
    </thead>
    <tbody>
               
        <tr> 
            
            <td style="width:100px">{{ $trips->id }}</td>
            <td>{{ $trips->latitude }}</td>
            <td>{{ $trips->longitude }}</td>
            <td>{{ $trips->tracked_at }}</td>
        </tr>

    </tbody>
</table>
</body>
</html>



