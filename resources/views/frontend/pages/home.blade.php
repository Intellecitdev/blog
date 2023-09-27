@extends('frontend.layout')
@section('title', 'Blog')
@section('main')

    <div class="col-lg-8">
        <!-- Nested row for non-featured blog posts-->
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href=""><img class="card-img-top" src="{{ url('uploads/thumbnail', $post->thumbnail) }}"
                                alt="{{ $post->title }}" /></a>
                        <div class="card-body">
                            <div class="small text-muted">
                                <a href="{{ route('category.details', $post->category->slug) }}"
                                    class="text-decoration-none text-white rounded"
                                    style="display:inline-block; background:#6610f2; padding: 2px 8px; ">{{ $post->category->name }}</a>
                                <span class="small text-muted">
                                    {{ now()->parse($post->porsted_at)->format('d, F Y') }}
                                </span>
                            </div>
                            <h2 class="card-title h4 mt-2"><a class="text-decoration-none text-dark fw-normal "
                                    href="{{ route('post.details', $post->slug) }}">{{ $post->title }}</a></h2>
                            <p class="card-text">{!! Str::limit($post->content, 100) !!}</p>
                            <a class="btn btn-primary" href="{{ route('post.details', $post->slug) }}">Read more →</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Pagination-->
        <nav aria-label="Pagination">
            <hr class="my-0" />
            {{ $posts->links('pagination::bootstrap-5') }}
        </nav>
    </div>
@endsection
