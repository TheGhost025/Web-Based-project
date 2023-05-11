<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User login</title>
</head>
<body>
    <h1>User login</h1>
    {{ $uname }}
    {{ $upass }}
    <br>
    <form action="Users" method="POST">
        @csrf
        <input type="text" name="userName" placeholder="enter your name" />
        <br><br>
        <input type="password" name="userPass" placeholder="Enter your pass" />
        <br><br>
        <button type="submit"> login </button>

    </form>
</body>
</html>

<!--
@ extends('RegistrationForm')

@ section('title')
    Registration Form
@ endsection

@ section('menu')
@ parent
<link rel="stylesheet" href="{ { asset('css/reg.css') }}">
@ endsection
-->
