<!DOCTYPE html>
<html>
<head>
    <style>
        /* Adjust sidebar position */
        .sidebar {
            position: fixed;
            width: 250px; /* Adjust width as needed */
            height: 100%; /* Full height */
            top: 0;
            left: 0;
            background-color: #0080ff; /* Dark background color */
            color: white;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
        }

        /* Style for sidebar links */
        .sidebar a {
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
            padding: 20px 0;
            padding-left: 20px;
            box-sizing: border-box;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        /* Icon style */
        .sidebar a svg {
            margin-right: 20px;
        }

        /* Hover effect */
        .sidebar a:hover {
            background-color: #343a40; /* Darker background on hover */
        }

        /* Submenu styling */
        .submenu {
            margin-left: 20px; /* Indentation for subcategories */
            display: none; /* Hide subcategories by default */
            flex-direction: column;
            width: calc(100% - 20px); /* Adjust width to align with parent */
        }

        /* Style for subcategory links */
        .submenu a {
            color: white;
            text-decoration: none;
            padding: 10px 0;
            padding-left: 20px;
            box-sizing: border-box;
            width: 100%;
        }

        .submenu a:hover {
            background-color: #555;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="sidebar">
    
    <a href="/">
        <img src="logo/Logo.png" alt="Logo" />
    </a>
   

    <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
        </svg>
        Home
    </a>
    
    <a href="#" onclick="toggleSubmenu('familySubmenu')">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zm4.5-7.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/>
        </svg>
        Family
    </a>
    <div id="familySubmenu" class="submenu">
        <a href="#">fam1</a>
        <a href="#">fam2</a>
        <a href="#">fam3</a>
        <a href="#">fam4</a>
        <a href="#">fam5</a>
        <a href="#">fam6</a>
        <a href="#">fam7</a>
        <a href="#">fam8</a>
    </div>

    <a href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-info-square" viewBox="0 0 16 16">
            <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
            <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
        </svg>
        About Me
    </a>
</div>

<script>
    function toggleSubmenu(submenuId) {
        var submenu = document.getElementById(submenuId);
        if (submenu.style.display === "block") {
            submenu.style.display = "none";
        } else {
            submenu.style.display = "block";
        }
    }
</script>

</body>
</html>
