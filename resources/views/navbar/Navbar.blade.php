<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .navbar {
            background-color: blue;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            color: white;
            text-decoration: none;
            font-size: 24px;
            font-weight: bold;
        }

        .navbar-nav {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar-nav li {
            margin-left: 10px;
        }

        .navbar-nav li a {
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .navbar-nav li a:hover {
            text-decoration: underline;
        }
    </style>

</head>
<body>
    <div class="navbar">
        <a href="#" class="navbar-brand">
            <img src="{{asset('logo/Logo.png')}}" alt="Logo">
        </a>
        <ul class="navbar-nav">
            <li><a href="#">Dashboard</a></li>
        </ul>
    </div>
</body>
</html>