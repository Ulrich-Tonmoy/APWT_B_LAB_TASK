<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Log</title>
</head>

<body>
    <a href="/home">Home</a> | 
    <a href="/system/sales"> Sales Dashboard</a> | 
    <a href="/logout"> Logout</a> <br> <br>
    <form method="post">
        @csrf
        <table>
            <tr>
                <td>Customer Name</td>
                <td><input type="text" name="customer_name"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="number" name="phone"></td>
            </tr>
            <tr>
                <td>Product Id</td>
                <td><input type="text" name="product_id"></td>
            </tr>
            <tr>
                <td>Product Name</td>
                <td><input type="text" name="product_name"></td>
            </tr>
            <tr>
                <td>Unit Price</td>
                <td><input type="number" name="unit_price"></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input type="text" name="quantity"></td>
            </tr>
            <tr>
                <td>Payment Type</td>
                <td>
                    <select name="payment_type">
                        <option></option>
                        <option value="Card">Card</option>
                        <option value="Cash">Cash</option>
                        <option value="Online">Online</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>

        </table>
    </form>
    </center>
    {{session('msg')}}
    <br>
    @foreach ($errors->all() as $err)
    {{$err}}
    </br>
    @endforeach
</body>

</html>