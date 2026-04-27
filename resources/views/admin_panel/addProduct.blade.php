<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Product</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light d-flex ">

    @include('admin_panel/sidebar')
    <div class="w-100">

        <div class="card shadow ">
            <div class="card-header bg-dark text-white">
                <h4 class="mb-0">Add Product</h4>
            </div>

            <div class="card-body">

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <form action="{{url(!empty($product->id) ? '/product/update/'.$product->id : '/addproduct')}}" method="post">
                    @csrf
                    <!-- Product Name -->
                    @error('productName')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                    <div class="mb-3">
                        <label class="form-label">Product Name</label>
                        <input value="{{old('productName', $product->product_name ?? '')}}" name="productName" type="text" class="form-control" placeholder="Enter product name">
                    </div>


                    <!-- Category -->
                    @error('selectCategory')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select name="selectCategory" class="form-select">
                            <option value="">Select category</option>
                            @foreach($category as $val)
                          
                            <option  value="{{$val->emp_id}}">
                                {{$val->category_name}}
                             </option>

                            @endforeach

                        </select>
                    </div>


                    <!-- Price -->
                    @error('price')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                    <div class="mb-3">
                        <label class="form-label">Price</label>
                        <input value="{{old('price' , $product->price ?? '')}}" name="price" type="number" class="form-control" placeholder="Enter price">
                    </div>




                    <!-- Stock -->
                    @error('stockQuantity')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                    <div class="mb-3">
                        <label class="form-label">Stock Quantity</label>
                        <input value="{{old('price' , $product->stock_quantity ?? '')}}" name="stockQuantity" type="number" class="form-control" placeholder="Enter stock">
                    </div>

                    <!-- Image -->
                    <!-- @error('productImage')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                    <div class="mb-3">
                        <label class="form-label">Product Image</label>
                        <input name="productImage" type="file" class="form-control">
                    </div> -->

                    <!-- Description -->
                    @error('description')
                    <span class="text-danger">
                        {{$message}}
                    </span>
                    @enderror
                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="4" placeholder="Enter product details">{{old('description',$product->description ?? '')}}</textarea>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="btn btn-primary w-25">
                        <!-- Add Category -->
                        {{ isset($product) ? 'Update Product' : 'Add Product' }}
                    </button>

                </form>

            </div>
        </div>

    </div>

</body>

</html>