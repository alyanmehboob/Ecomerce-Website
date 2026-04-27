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
    <main class=" p-5 h-75  text-center text-white bg-dark  ">
        <h1>Welcome to Our E-Commerce Store</h1>
        <p class="lead">Discover the best products at unbeatable prices. Our online store offers a wide range of high-quality items, fast delivery, and secure payment options. Shop with confidence and enjoy a seamless shopping experience from the comfort of your home.</p>
        <p class="lead">
            <a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-primary">Explore...</a>
        </p>
    </main>
    <div class="container mt-3">
        <div class="row">
            @foreach($products as $product)
             <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 w-25">
                <div class="card h-100">
                    <img src="" class="card-img-top" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->price}}</h5>
                        <h5 class="card-title">{{$product->product_name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <a href="{{'product/'.$product->slug_url}}" class="btn btn-primary">Cart</a>
                        <a href="{{'product/'.$product->slug_url}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- This is my footer portion -->
    @include('footer')




</body>

</html>