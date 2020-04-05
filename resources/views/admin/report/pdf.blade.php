
<html >
<head>
 <title>{{ $data['name'] }}</title>
 <style type="text/css">
   .th{
    color:white;background-color: #000;
   }
 </style>
</head>
<body>
  <center><h2>Ledger Report <br>( {{$data['date_to']}}) --- ({{$data['date_from']}} ) </h2></center>
  <hr>
  <div style="margin-top: 7px">
  
  <h4 style="color:green">{{ $data['name']}}</h4>

  <h4 style="color:green">
    Balance: <b style="font-size: 20px;">{{ $data['balance']}}</b>
  </h4>
    
  </div>
  
<br><br>
  <table style="width:100%;border-collapse: collapse;" border="1">
                                                
     <tr>
      <th style="color:white;background-color: #000;">Date</th>
      <th style="color:white;background-color: #000;">Particulars</th>
      
      <th style="color:white;background-color: #000;">Credit</th>
      <th style="color:white;background-color: #000;">Debit</th>
     </tr>

      @foreach($records as $record)
        <tr>
          <td>
            {{$record->date}}
          </td>
          <td>
            {{$record->particular}}
          </td>
          
          <td>
            {{$record->credit}}
          </td>
          <td>
            {{$record->debit}}
          </td>
        </tr>
      @endforeach
    
     </table>
  
  </body>
</html>