<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Granja</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <style>
        h1 {
            text-align: center;
            font-size: 2em;
            font-weight: bold;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
<script>
     $(document).ready(function() {
        $("#createAnimal").click(function () {
        $.ajax ({
            type: "POST",
            url: "http://localhost:8000/api/animales",
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (data) {
            $('#Table > tbody').empty();
            $.each(data, function (i, item) {
            var rows = 
            "" +
            "" + item.id + "" +
            "" + item.Nombres + "" +
            "" + item.Cargo + "" +
            "" + item.Dpto + "" +
            "";
            $('#Table > tbody').append(rows);
            });
            console.log(data);
            },
            failure: function (data) {
            alert(data.responseText);
            },
            error: function (data) {
            alert(data.responseText);
            }
            });
        });
     });
</script>
</html>