<!DOCTYPE html>
<html>

<head>


    <title>Shop</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JS (important for dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    @include('navbar')
<h1 class="text-center">All Product</h1>

    <div class="container mt-3">
        <div class="row">
            @foreach($products as $product)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                    <img src=" " class="card-img-top" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">Price : {{$product->price}}</h5>
                        <h5 class="card-title">{{$product->product_name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <a href="{{url('cart')}}" class="btn btn-primary">Cart</a>
                        <a href="{{'product/'.$product->slug_url}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


 