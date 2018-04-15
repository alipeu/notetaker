<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Note-taker</title>
        <link rel="icon" href="{{ url('assets/notes.png') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}"></link>
        <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}"></link>
        <script type="text/javascript" src="{{ url('js/jquery-3.3.1.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <span class="navbar-brand">Note-taker, a basic CRUD application</span>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <div style="margin-left:auto;margin-right:0px;">
                    <span>&copy 2018, Created by Alif Hilmi Akbar</span>
                </div>
            </div>
        </nav>