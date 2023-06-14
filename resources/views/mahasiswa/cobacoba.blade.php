<!DOCTYPE html>
<html>

<head>
    <style>
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>
    <div class="dropdown">
        <button class="dropbtn">Login</button>
        <div class="dropdown-content">
            <ul>
                <li><a href="#">Login Mahasiswa</a></li>
                <li><a href="#">Login Industri</a></li>
            </ul>
        </div>
    </div>
</body>

</html>
