<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>View Category</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">




</head>

<body class="bg-light  ">

    <div class="d-flex">

        @include('admin_panel/sidebar')
        <div class="card shadow  w-100">
            <form class="form-inline w-50 d-flex m-2 rounded border border-5 p-0">
                <input class="form-control " type="search" placeholder="Search">
                <button class="btn btn-outline-success ms-2  " type="submit">Search</button>
            </form>
            <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">View Categories</h4>
                <nav class="navbar navbar-light bg-light">

                </nav>
                <a href="{{url('addcategory')}}" class="btn btn-primary btn-sm">+ Add Category</a>

            </div>

            <div class="card-body">

                <div class="table-responsive">

                    <table class="table table-striped table-hover text-center align-middle">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <thead class="table-dark">
                            <tr>
                                <th>Id</th>
                                <th>Category Name</th>
                                <th>Slug URL</th>
                                <th>Status</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($categories as $val)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$val->category_name}}</td>
                                <td style="width: 250px;">{{$val->slug_url}}</td>
                                <td><span class="badge bg-success">{{$val->status}}</span></td>
                                <td>{{$val->description}}</td>
                                <td style="width: 140px;">
                                    <a href="{{ url('edit', $val->id) }}"> <button class="btn btn-warning btn-sm">Edit</button></a>
                                    <a href="{{url('delete/'.$val->id )}}"><button class="btn btn-danger btn-sm">Delete</button> </a>
                                </td>

                            </tr>

                            @endforeach

                        </tbody>
                    </table>

                </div>
                <div class="row">
                    {{$categories->links('pagination::bootstrap-4')}}
                </div>
            </div>

        </div>

    </div>
</body>

</html>