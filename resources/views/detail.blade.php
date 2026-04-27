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

    <div class="container mt-4" >
        <div class="row justify-content-center">

            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4" style="border: 1px solid red;">

                <div class="card h-100 shadow-sm border-0 rounded-3 overflow-hidden" >

                    <!-- Product Image -->
                    <img src="" class="card-img-top" alt="product image" style="height: 200px; object-fit: cover;">

                    <div class="card-body d-flex flex-column">

                        <!-- Product Name -->
                        <h5 class="fw-bold mb-1">{{$product->product_name}}</h5>

                        <!-- Price -->
                        <h6 class="text-success mb-2">
                            Price: {{$product->price}} PKR
                        </h6>

                        <!-- Description -->
                        <p class="card-text text-muted small">
                            {{$product->description}}
                        </p>

                        <!-- Buttons -->
                        <div class="mt-auto d-flex gap-2">

                            <a href="#" class="btn btn-outline-primary w-50">
                                Cart
                            </a>

                            <a href="{{url('product/'.$product->slug_url)}}" class="btn btn-primary w-50">
                                Detail
                            </a>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>


</body>

</html>