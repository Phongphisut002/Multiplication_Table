@extends('layouts.default')

@section('title', 'Titles')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Multiplication Table Generator</title>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
  body {
    margin: 0;
    font-family: Arial, sans-serif;
  }
  #content {
    text-align: center;
    padding-top: 50px;
  }
  table {
    border-collapse: collapse;
    margin: 0 auto;
    width: 80%;
    max-width: 600px;
  }
  table, th, td {
    border: 1px solid black;
    padding: 10px;
    text-align: center;
  }
</style>
</head>
<body>

<div id="content">
  <label for="num">Enter a number:</label>
  <input type="number" id="num">
  <button id="generateTable">Generate Table</button>
  <div id="multiplicationTable"></div>
</div>

<script>
  $(document).ready(function(){
    $("#generateTable").click(function(){
      var num = parseInt($("#num").val());
      if(!isNaN(num)){
        var tableHtml = "<table>";
        for(var i = 1; i <= 12; i++){
          tableHtml += "<tr><td>" + num + " × " + i + " = </td><td>" + (num * i) + "</td></tr>";
        }
        tableHtml += "</table>";
        $("#multiplicationTable").html(tableHtml);
      } else {
        alert("Please enter a valid number.");
      }
    });
  });
</script>

</body>
</html>


@endsection
