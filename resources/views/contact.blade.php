<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body>
    <table style="solid black">
        <tr>
          <th>Ad</th>
          <th>Soyad</th> 
          <th>Send Mail</th>
        </tr>
        <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td> 
          <td>  <a href= "{{route('mail')}}"    type="button">> Send Mail </a></td>
        </tr>
        
      </table>
    
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    function Mail(id) {
        swal({
            title: "Warning",
            text: "Are you sure?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            buttons: ["No", "Yes"],
        })
            .then((SendMessage) => {
                if (willDelete) {
                    let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    $.ajax({
                        url:  {{route('mail')}},
                        data: { "_token": "{{ csrf_token() }}", email:email },
                        method: "POST",
                        success: function (data) {
                            if(data==="ok"){
                                swal("Success!", "Mail sent!", "success");
                                window.setTimeout(function(){location.reload()},2000)
                            }else{
                                swal("Error!", "Mail did not send!", "error");
                            }
                        },
                        error: function (x, sts) {
                            console.log("Error...");
                            console.log('no');
                        },
                    });
                } else {
                    swal("Cancelled!");
                }
            });
    }
</script>

</html>