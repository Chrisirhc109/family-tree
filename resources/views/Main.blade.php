<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
</head>
<style>
    .sidebar-container {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 200px; /* Same width as sidebar */
    }

    .content {
        margin-left: 200px; /* Same width as sidebar */
        padding: 20px;
    }

    .forbody {
        background-color:rgb(170, 116, 46)
    }
    
</style>

<body class="forbody">

    <div class="sidebar-container">
        @include('sidebar.Sidebar')
    </div>  
    

    <div class="content">
        @yield('content')
    </div>
</body>
</html>