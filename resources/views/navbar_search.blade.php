<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    @include('navbar')



    <div class="container mt-5">
        <h2 class="mb-4 text-center">Search Products</h2>

        <div class="row">

            <div class="col-md-3 mb-4 d-flex w-100">
                @foreach($search_products as $val)
                <div class="card h-100 shadow-sm m-3 w-25">

                    <!-- Product Image -->
                    <img src="" class="card-img-top" height="200">

                    <div class="card-body">
                        <h5 class="card-title">{{$val->price}}</h5>
                        <h5 class="card-title">{{$val->product_name}}</h5>
                        <p class="card-text">{{$val->description}}</p>

                        <a class="btn btn-primary btn-sm">
                            Details
                        </a>
                        <!-- Add to Cart -->
                        <a class="btn btn-success btn-sm  ">
                            Add to Cart
                        </a>

                    </div>

                </div>
                @endforeach
            </div>


        </div>
    </div>

</body>

</html>