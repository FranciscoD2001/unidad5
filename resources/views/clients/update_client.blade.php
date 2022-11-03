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

    <form method="post" action="{{ url('clients/') }}">
        @method('PUT')
        @csrf
        <label>
            Nombre:
        </label>
        <input type="text" placeholder="Maria" name="name" value="{{ $client[0]->name }}">
        <br>
        <label>
            Email
        </label>
        <input type="email" placeholder="example@gmail.com" name="email" value="{{$client[0]->email}}">
        <br>
        <label>
            Phone Number
        </label>
        <input type="text" placeholder="612xxxxxxxx" name="phone_number" value="{{$client[0]->phone_number}}">
        <br>

        <input type="hidden" name="id" value="{{$client[0]->id}}">
        <button type="submit">
            Actualizar
        </button>
    </form>
</body>
</html>