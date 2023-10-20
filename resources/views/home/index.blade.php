<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>home</title>
</head>
<body>
    <h1>歡迎來到我的網站</h1>
    <p>這是一個簡單的HTML網頁。</p>
    @extends('layouts.master')
    @section('title','Home')
    @section('content')
    <h1>Home</h1>
    <p>This is my body content.</p>
    @endsection
</body>
</html>
