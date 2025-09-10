@extends('layouts.web')

@section('content')
<style>
    .side-panel {
    margin-bottom: 15px;
    padding: 20px;
    border: 3px solid #E6E4E6;
    background-color: #fff;
    font-size: 14px;
    overflow: hidden;
}
</style>
<div class="">
    <section class="bg-light py-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-12 text-center text-md-start">
                    <h1 class="text-dark fw-bold mb-4">{{ $category->name }}</h1>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-8 side-panel">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-2 g-4">
                        @if (count($blogs) > 0)
                            @foreach ($blogs as $blog)
                                <div class="col">
                                    <div class="card h-100 shadow-sm">
                                        <a href="{{ route('blogs.show', $blog->slug) }}">
                                            <img src="{{ url(config('app.storage_path') . $blog->image_path) }}" class="card-img-top" alt="thumbnail" loading="lazy">
                                        </a>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <a href="{{ route('blogs.show', $blog->slug) }}" class="text-decoration-none text-dark">
                                                    {{ Str::limit($blog->title, 50, '...') }}
                                                </a>
                                            </h5>
                                            <p class="card-text text-muted">By {{ $blog->user->name }} - {{ showDate($blog->created_at) }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach                
                        @else
                            <div class="col-12 text-center">
                                <p class="text-muted">No Blog found</p>
                            </div>
                        @endif
                    </div>  
                </div>
                <div class="col-lg-4">
                    <div class="mb-4 p-3 bg-white shadow-sm">
                        <h3 class="text-white p-2 rounded h5" style="background:#be8672;">
                             <i class="fa fa-file-text me-2" aria-hidden="true"></i>Recent Posts</h3>
                        @if (count($blogs) > 0)
                            <ul class="list-unstyled">
                                @foreach ($blogs as $blog)
                                    <li class="py-2">
                                        <a href="{{ route('blogs.show', $blog->slug) }}" class="text-decoration-none text-dark">{{ $blog->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-muted">No blogs found</p>
                        @endif
                    </div>
                    <div class="mb-4 p-3 bg-white shadow-sm">
                        <h3 class="text-white p-2 rounded h5" style="background:#be8672;">
                            <i class="fa fa-folder-open me-2" aria-hidden="true"></i>Categories</h3>
                        <ul class="list-unstyled">
                            @foreach ($categories as $category)
                                <li class="py-2">
                                    <a href="{{ route('blogs.category', $category->slug) }}" class="text-decoration-none text-dark">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
