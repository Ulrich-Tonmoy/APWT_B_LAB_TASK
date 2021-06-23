<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <form method="post">
        <table>
            @csrf
            <tr>
                <td>Name</td>
                <td><input type="text" name="name" value="{{old('name')}}"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="{{old('email')}}"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="{{old('password')}}"></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input type="password" name="cpassword" value="{{old('cpassword')}}"></td>
            </tr>
            <tr>
                <td>Country</td>
                <td><input type="text" name="country" value="{{old('country')}}"></td>
            </tr>
            <tr>
                <td>City</td>
                <td><input type="text" name="city" value="{{old('city')}}"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="text" name="phone" value="{{old('phone')}}"></td>
            </tr>
            <tr>
                <td>Company Name</td>
                <td><input type="text" name="company_name" value="{{old('company_name')}}"></td>
            </tr>
            <tr>
                <td>User Type</td>
                <td>
                    <select name="user_type">
                        <option></option>
                        <option value="Admin">Admin</option>
                        <option value="Customer">Customer</option>
                        <option value="Vendors">Vendors</option>
                        <option value="Accountants">Accountants</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="submit"></td>
            </tr>
        </table>
    </form>
    
    {{session('msg')}}
		<br>

		@foreach ($errors->all() as $err)
			{{$err}} <br>
		@endforeach
    <a href="/login"> Login</a>
</body>
</html>