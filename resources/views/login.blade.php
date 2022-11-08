<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login </h1>
    <h1>{{ Auth::User()?->name }}</h1>
    <form method="post" action="{{ url('login/') }}">
        @csrf
        <label>Email</label>
        <input type="email" placeholder="Email" name="email" id="">
        <label>Password</label>
        <input type="password" placeholder="Password" name="password">

        <button type="submit">
            Iniciar sesión
        </button>
    </form>
</body>

</html>