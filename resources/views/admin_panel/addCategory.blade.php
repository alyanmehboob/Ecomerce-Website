<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Category</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex">
    @include('admin_panel/sidebar')
    <div class="container">

        <div class="w-100">
            <div>

                <div class="card shadow">

                    <div class="card-header bg-dark text-white">
                        <h4>Add Category</h4>
                    </div>

                    <div class="card-body">
                        @if(session('success')) 
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <form action="{{url(!empty($category->id) ? '/update/'.$category->id : '/addcategory')}}" method="post">
                            @csrf

                            <!-- Category Name -->
                            @error('categoryName')
                            <span class="text-danger">
                                {{$message}}
                            </span> 
                            @enderror


                            <div class="mb-3">
                                <label class="form-label">Category Name</label>
                                <input value="{{ old('categoryName',isset($editcategory) ? $editcategory->category_name : '') }}" name="categoryName" type="text" class="form-control" placeholder="Enter category name">
                            </div>

                            <!-- Status -->
                            @error('status')
                            <span class=" text-danger">
                                {{$message}}
                            </span>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label">Status</label>

                                <select name="status" class="form-select">
                                    <option value="">Select status</option>

                                    <option value="active" {{ old('status' ,isset($editcategory) ? $editcategory->status : '') == 'active' ? 'selected' : ''  }}>
                                        Active
                                    </option>

                                    <option value="inactive" {{ old('status',isset($editcategory) ? $editcategory->status : '') == 'inactive' ? 'selected' : '' }}>
                                        Inactive
                                    </option>
                                </select>
                            </div>

                            <!-- Description -->
                            @error('description')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" rows="4" placeholder="Enter category description">{{ old('description',isset($editcategory) ? $editcategory->description : '') }}</textarea>
                            </div>

                            <!-- Submit Button -->


                            <!-- <a   class="btn btn-primary w-100>  button</a> -->
                            <button type="submit" class="btn btn-primary w-25">
                                <!-- Add Category -->
                                {{ isset($category) ? 'Update Category' : 'Add Category' }}
                            </button>


                        </form>

                    </div>

                </div>

            </div>
        </div>

    </div>

</body>

</html>