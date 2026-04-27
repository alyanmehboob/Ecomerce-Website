    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Login Register</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    </head>

    <body>
        <!-- Navbar  -->
        <div class="w-50 mx-auto">
            
            <h1 class="text-primary text-center">Login</h1>
            <div class="tab-content w-50 mx-auto border p-3 rounded">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">

                    <form method="post">
                        @csrf
                        <!-- Email input -->
                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" />
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" />
                        </div>

                        <!-- 2 column grid layout -->
                        <div class="row mb-4">
                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Checkbox -->
                                <div class="form-check mb-3 mb-md-0">
                                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                    <label class="form-check-label" for="loginCheck"> Remember me </label>
                                </div>
                            </div>

                            <div class="col-md-6 d-flex justify-content-center">
                                <!-- Simple link -->
                                <a href="#!">Forgot password?</a>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Login in</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href="{{url('/signup')}}">Sign up</a></p>
                        </div>
                    </form>
                </div>

                <!-- Pills content -->
            </div>
    </body>

    </html>