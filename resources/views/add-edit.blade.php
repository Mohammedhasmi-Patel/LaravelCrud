<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="/update/{{$data->id}}" method="post">
        @csrf
        @method("PUT")
        <h1>Add User</h1>

        <input type="text" name="username" placeholder="Enter Username" value="{{ $data->username ?? '' }}">
        <br />
        <br />

        <input type="email" name="email" placeholder="Enter Email" value="{{ $data->email ?? '' }}">
        <br />
        <br />

        <input type="text" name="age" placeholder="Enter Age" value="{{ $data->age ?? '' }}">
        <br />
        <br />

        <input type="password" name="password" placeholder="Enter Password">
        <br />
        <br />

        <button type="submit">Submit</button>
    </form>
</body>

</html>

<style>
    form {
        margin: 75px;
        border: 2px solid #131313;
        width: 450px;
        height: 450px;
        padding: 15px;
    }

    form h1 {
        text-align: center;
    }

    form input, button {
        margin-left: 60px;
    }
</style>
