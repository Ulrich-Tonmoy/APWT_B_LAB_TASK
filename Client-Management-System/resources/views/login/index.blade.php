<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    
</body>
</html>

<body>
    <form method="post">
        <table>
            @csrf
            <tr>
                <td>Email</td>
                <td><input type="text" name="email" value="{{old('email')}}"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" value="{{old('password')}}"></td>
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

    <a href="/registration"> Signup</a>
</body>

</html>