<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <a href="/home">Home</a> | 
    <a href="/system/sales"> Sales Dashboard</a> | 
    <a href="/logout"> Logout</a> <br> <br>
    <table border="1">
        <tr>
            <td><a href="/system/sales/physical_store">Physical Store</a></td>
            <td><a href="/system/sales/physical_store">Social Media</a></td>
            <td><a href="/system/sales/physical_store">Ecommerce Web</a></td>
        </tr>
        <tr>
            <td>{{$count}}</td>
            <td>0</td>
            <td>0</td>
        </tr>
    </table>
    {{session('msg')}}
</body>
</html>