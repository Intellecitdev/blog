@extends('frontend.layout')
@section('title', $post->title)
@section('meta_keywords', $post->meta_keywords)
@section('meta_description', $post->meta_description)
@section('main')
    <div class="col-lg-8">
        <!-- Featured blog post-->
        <div class="card mb-4">
            <img class="card-img-top" src="{{ url('/uploads/thumbnail', $post->thumbnail) }}" alt="{{ $post->title }}" />
            <div class="card-body">
                <div class="small text-muted my-3"><a href="{{ route('category.details', $post->category->slug) }}"
                        class="text-decoration-none text-white rounded me-1"
                        style="display:inline-block; background:#FF2900; padding: 2px 8px; ">{{ $post->category->name }}</a>
                    {{ now()->parse($post->posted_at)->format('d M Y') }}</div>
                <h2 class="card-title">{{ $post->title }}</h2>
                <p class="card-text">
                    {!! $post->content !!}
                </p>
            </div>
        </div>
        @push('relatedPost')
            <div class="row mb-5">
                @if ($relatedPost->count() > 0)
                    <p class="display-4">Related Post</p>
                @endif
                @foreach ($relatedPost as $post)
                    <div class="col-md-4 d-flex align-items-stretch">
                        <div class="card text-bg-secondary" style="background-color:#FF2900 !important">
                            <a href="{{ route('post.details', $post->slug) }}" class="text-decoration-none">
                                <img src="{{ url('/uploads/thumbnail', $post->thumbnail) }}" class="card-img"
                                    alt="{{ $post->title }}">
                                <div class="card-body">
                                    <div class="d-flex flex-column justify-content-center align-items-center text-white">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p class="card-text">
                                            <small>{{ now()->parse($post->posted_at)->format('d F Y') }}</small>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endpush
    </div>

    <script type="application/ld+json">
    {
        "@context": "https://www.chinabazarb2b.com/blog/",
        "@type": "BlogPosting",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ url()->current() }}"
        },
        "headline": "{{ $post->title }}",
        "description": "{!! $post->content !!}",
        "image": "{{ url('/uploads/thumbnail', $post->thumbnail) }}",
        "author": {
            "@type": "Person",
            "name": "{{ $post->author->name }}"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Chinabazarb2b Blog",
            "logo": {
                "@type": "ImageObject",
                "url": "https://www.chinabazarb2b.com/blog/images/logo.png"
            }
        },
        "datePublished": "{{ now()->parse($post->posted_at)->format('d F Y') }}",
        "dateModified": "{{ now()->parse($post->updated_at)->format('d F Y') }}"
    }
    </script>
@endsection
