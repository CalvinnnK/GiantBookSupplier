<div>

  <div class="d-flex flex-column justify-content-center text-center" style="background-color: yellow; height: 15vh" >
        <h1 >Giant Book Supplier</h1>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            
          @php
              $list = App('App\Http\Controllers\CategoryController')->get_category();
          @endphp

          @foreach($list as $l)
            <li><a class="dropdown-item" href="{{route('category',[$l->id])}}">{{$l->category}}</a></li>
          @endforeach
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route('publisher')}}">Publisher</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route('contacts')}}">Contact</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
</div>