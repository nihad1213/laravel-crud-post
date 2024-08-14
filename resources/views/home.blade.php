<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @auth
    <p>Congrats, you are logged in!</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Log Out</button>
    </form>
    @else
    <div style="border: 3px solid #000;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="Enter Name">
            <input name="email" type="email" placeholder="Enter Mail">
            <input name="password" type="password" placeholder="Password">
            <button type="submit">Register</button>
        </form>
    </div>

    <div style="border: 3px solid #000;">
        <h2>Log in</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="Enter Name">
            <input name="loginpassword" type="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>
    </div>
    @endauth

</body>
</html>
