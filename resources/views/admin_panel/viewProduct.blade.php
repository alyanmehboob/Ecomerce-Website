<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Products</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex">
    @include('admin_panel/sidebar')
    <div class="container  v-100 ">

        <div class="card shadow">

            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">View Products</h4>
                <a href="{{url('addproduct')}}" class="btn btn-primary btn-sm">+ Add Product</a>
            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-bordered table-hover text-center align-middle">

                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <thead class="table-dark">
                            <tr>
                                <th>Id</th>
                                <th>Category id</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Description</th>
                                <!-- <th>Image</th> -->
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
 
                        <tbody>
                            @foreach($product as $val)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$val->emp_id}}</td>
                                <td>{{$val->product_name}}</td>
                                <td>{{$val->price}} </td>
                                <td>{{$val->stock_quantity}}</td>
                                <td>{{$val->description}}</td>
                                <!-- <td>
                                    <img src="https://via.placeholder.com/60" class="rounded" alt="">
                                </td> -->
                                <td><span class="badge bg-success">Active</span></td>
                                <td style="width: 140px;">
                                    <a href="{{url('/product/edit/'.$val->id )}}"><button class="btn btn-warning btn-sm">Edit</button></a>
                                    <a href="{{url('/product/delete/'.$val->id )}}"><button class="btn btn-danger btn-sm">Delete</button> </a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>
                <div class="row"> {{$product->links('pagination::bootstrap-4')}} </div>
            </div>

        </div>

    </div>

</body>

</html>