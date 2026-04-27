 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

 <style>
     .nav-link:hover {

         border-bottom: 1px solid #06214a58;

         /* outline-offset: 1px; */
     }
 </style>
 <nav class="navbar navbar-expand-lg bg-secondary p-2 mx-auto">
     <div class="container-fluid ">
         <a class="navbar-brand text-white fw-bold">(LOGO)</a>



         <nav class="navbar bg-secondary justify-content-center">
             @error('search')
             <span class="text-warning">{{$message}}</span>
             @enderror
           
             <form class="d-flex align-items-center gap-2" method="Get" action="{{url('search')}}">
                 <input class="form-control" name="search" type="search" placeholder="Search" aria-label="Search">
                 <button class="btn btn-outline-light" type="submit">Search</button>
             </form>
         </nav>


         <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
             <div class="navbar-nav">
                 <a class="nav-link text-white active" href="{{url('home')}}">Home</a>
                 <a class="nav-link text-white active" href="{{url('shop')}}">Shop</a>
                 <a class="nav-link text-white active" href="{{url('cart')}}">Cart</a>
                 <a class="nav-link text-white active" href="{{url('login')}}">Login</a>
             </div>
         </div>


         <div class="m-2 text-end">
             <select style="cursor: pointer;"
                 class="form-select w-auto d-inline-block"
                 onchange="location = this.value;">

                 <option selected disabled>Category</option>

                 @foreach($category as $val)
                 <option value="{{ url('/category/'.$val->slug_url) }}">
                     {{ $val->category_name }}
                 </option>
                 @endforeach

             </select>
         </div>









     </div>

 </nav>