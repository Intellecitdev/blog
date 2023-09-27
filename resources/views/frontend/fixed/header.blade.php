@php
    $categories = App\Models\Category::where('status', 'active')
        ->orderBy('name', 'ASC')
        ->get();
@endphp

<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder"><a class="nav-link" href="{{ route('home') }}">Welcome to Blog</a></h1>
            <div class="d-lg-flex justify-content-center align-items-center">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item me-2"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                </ul>
                <div class="dropdown">
                    <button class="btn dropdown-toggle outline-none border-none" type="button" id="dropdownMenuButton2"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                        @foreach ($categories as $category)
                            <li><a class="dropdown-item"
                                    href="{{ route('category.details', $category->slug) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
