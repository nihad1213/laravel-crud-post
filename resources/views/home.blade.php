<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="border: 3px solid #000;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name = "name" type="text" name="" placeholder="Enter Name">
            <input name = "email" type="text" placeholder="Enter Mail">
            <input name = "password" type="password" name="" placeholder="Password">
            <button>Register</button>
        </form>
    </div>
</body>
</html>