    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>signup Register</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    </head>

    <body>
        <!-- Pills navs --> 
        <div class="w-50 mx-auto mt-5   ">
            <h1 class="text-primary text-center">Signup</h1>
            <!-- Pills navs -->
            <!-- Pills content -->
            <div class="tab-content w-50 mx-auto border p-3 rounded">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                    <form method="post">
                        @csrf
                        @error('username')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="name"> Username</label>
                            <input type="text" id="name" name="username" class="form-control" value="{{old('username')}}" />
                        </div>
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="email">Email </label>
                            <input type="text" id="email" name="email" class="form-control" value="{{old('email')}}" />
                        </div>
                        @error('password')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline ">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}" />
                        </div>


                        <div>
                            <p><a href="{{url('/login')}}">Login</a></p>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">sign up</button>

                        <!-- Register buttons -->


                    </form>
                </div>

                <!-- Pills content -->
            </div>
    </body>

    </html>