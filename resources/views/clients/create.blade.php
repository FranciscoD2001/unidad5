<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Crear un cliente
    </h1>

    <form method="post" action="http://127.0.0.1:8000/clients">
        @csrf
        <label>
            Nombre:
        </label>
        <input type="text" placeholder="Maria" name="name">
        <br>
        <label>
            Email
        </label>
        <input type="email" placeholder="example@gmail.com" name="email">
        <br>
        <label>
            Phone Number
        </label>
        <input type="text" placeholder="612xxxxxxxx" name="phone_number">
        <br>
        <button type="submit">
            Guardar
        </button>
    </form>
</body>
</html>