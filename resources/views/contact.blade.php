<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <table style="solid black">
        <tr>
          <th>Ad</th>
          <th>Soyad</th> 
          <th>Send Mail</th>
        </tr>
        <tr>
          <td>{{$user->Name}}</td>
          <td>{{$user->Surname}}</td> 
          <td>  <a href= "{{route('mail')}}"    type="button">> Send Mail </a></td>
        </tr>
        
      </table>
    
</body>
</html>