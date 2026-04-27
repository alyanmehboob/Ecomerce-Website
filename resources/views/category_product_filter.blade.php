<!DOCTYPE html>
<html>

<head>
    <title>Shop</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    @include('navbar')

    <div class="container mt-3">
        <div class="row">

            @if($products->count() > 0)

            @foreach($products as $product)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100">
                    <img src="" class="card-img-top" alt="image">
                    <div class="card-body">
                        <h5 class="card-title">Price : {{$product->price}}</h5>
                        <h5 class="card-title">{{$product->product_name}}</h5>
                        <p class="card-text">{{$product->description}}</p>
                        <a href="#" class="btn btn-primary">Cart</a>
                        <a href="{{url('product/'.$product->slug_url)}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach

            @else

            <div class="col-12 text-center mt-5">
                <h3>😕 No Products Available</h3>
                <p class="text-muted">Try another category</p>
            </div>

            @endif

        </div>
    </div>



</body>

</html>