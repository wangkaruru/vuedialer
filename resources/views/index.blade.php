<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>SmartDial</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A web dialing system" name="description"/>
    <meta content="Crafted" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    <link rel="shortcut icon" href="{{asset('images/loader.gif')}}">
    <link href="{{mix('css/all.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css"/>
    

</head>

<body>
<div id="app">
    <router-view></router-view>
</div>
<script src="assets/js/app.min.js"></script>
<script src="{{mix('js/app.js')}}"></script>
<script src="{{mix('js/all.js')}}"></script>
<script src="https://unpkg.com/vue@latest"></script>
<!-- use the latest release -->
<script src="https://unpkg.com/vue-select@latest"></script>

</body>
</html>
