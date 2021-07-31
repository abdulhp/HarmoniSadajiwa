<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{route('admin.postLogin')}}" method="POST">
        @csrf
        @error('username')
            <p>{{$message}}</p>    
        @enderror
        <label for="username">Username </label>
        <input type="text" name="username" id="username" class="@error('username') is-invalid @enderror"><br>
        <label for="password">password</label>
        <input type="password" name="password" id="password"><br>
        <input type="submit">
    </form>
</body>
</html>