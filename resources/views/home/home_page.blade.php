<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h1>Tes Ajax Response</h1>
        <a href="javascript:void(0)" class="btn btn-primary" onclick="tesAjax()">Tes !!!</a>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script>

        $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        const server = "{{ url('') }}/";

        function tesAjax()
        {
            var url_test = server + "test-ajax";
            $.ajax({
                type: 'POST',
                url:  url_test,
                data: {},
                statusCode: {
                    404: function(responseObject, textStatus, jqXHR) {
                        // No content found (404)
                        // This code will be executed if the server returns a 404 response
                        console.log("halaman 404");
                    },
                    503: function(responseObject, textStatus, errorThrown) {
                        // Service Unavailable (503)
                        // This code will be executed if the server returns a 503 response
                    }           
                }
            })
            .done(function(data){
                console.log(data);
            })
            .fail(function(jqXHR, textStatus){
                console.log("gagal");
            })
            .always(function(jqXHR, textStatus) {
                console.log("selesai");
            });
        }
    </script>

</body>

</html>