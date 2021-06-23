<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Physical Store</title>
</head>
<body>
    <a href="/home">Home</a> | 
    <a href="/system/sales"> Sales Dashboard</a> | 
    <a href="/logout"> Logout</a> <br> <br>
    <table border="1">
        <tr>
            <td>Item Sold Today</td>
            <td>Item Sold This Week</td>
            <td>Most Sold Item Name</td>
            <td>Average Sale Amount</td>
        </tr>
        <tr>
            <td>{{$count}}</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
        </tr>
    </table>
</body>
</html>