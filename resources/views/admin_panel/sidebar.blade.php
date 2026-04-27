<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Admin Dashboard</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
        }

        .sidebar {
            height: 100vh;
            background-color: #343a40;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
        }

        .sidebar a:hover {
            background-color: #495057;
        }
    </style>
</head>

<body>


    <div class="   sidebar p-0 w-25">
        <h4 class="text-white text-center py-3">Admin Panel</h4>





        <div class="dropdown px-3">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown">
                Products
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item text-dark" href="{{url('addcategory')}}"> Add category</a></li>
                <li><a class="dropdown-item text-dark" href="{{url('viewcategory')}}">View category</a></li>
                <li><a class="dropdown-item text-dark" href="{{url('addproduct')}}">Add product</a></li>
                <li><a class="dropdown-item text-dark" href="{{url('viewproduct')}}">View product</a></li>
            </ul>
        </div>



    </div>



    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>