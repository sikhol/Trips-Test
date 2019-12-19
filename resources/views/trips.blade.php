<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 8px;
}
</style>
</head>
<body>

<h2>Trips</h2>
<p>Table of Trips 2019</p>

<table style="width:90%">

  <tr>
    <th>Datetime</th>
    <th>view Start Trips</th> 
    <th>View End Trips</th>
    <th>View History Trips</th>
    <th>view All</th>
  </tr>
@foreach ($data as $trips)
  <tr>
   <td>{{$trips['Datetime']}}</td>
   <td><a href="{{ route('trips.csv',$trips['id'].'-start') }}">export csv</a></td>
   <td><a href="{{ route('trips.csv',$trips['id'].'-end') }}">export csv</td>
   <td><a href="{{ route('trips.csv',$trips['id']).'-history' }}">export csv</td>
   <td><a href="{{ route('trips.csv',$trips['id']).'-all' }}">export all</a></td>
  </tr>
@endforeach
</table>
<br>
<h4>Summary</h4>
<br>
<table style="width:50%">

  <tr>
    <th>Max Speed</th>
    <th>Distance</th> 
    <th>Violation</th>

  </tr>
  @foreach ($summary as $trips)
  <tr>
   <td>{{$trips->max_speed}}</td>
   <td>{{$trips->distance}}</a></td>
   <td>{{$trips->violation}}</td>
  
  </tr>
  @endforeach

</table>
<br>
<h4>Duration</h4>
<br>
<table style="width:30%">

  <tr>
    <th>From</th>
    <th>To</th> 

  </tr>
  @foreach ($duration as $trips)
  <tr>
   <td>{{$trips->from}}</td>
   <td>{{$trips->to}}</a></td>

  
  </tr>
  @endforeach

</table>

</body>
</html>
