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
    <section class="bg-light py-5" >
        <div class="container">
            <h1 class="text-dark fw-bold mb-4">Blogs</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 bg-white side-panel">
                    <div class="row">
                        @if (count($blogs) > 0)
                            @foreach ($blogs as $blog)
                                <div class="col-md-6 mb-4">
                                    <div class="card shadow-sm">
                                        <a href="{{ route('blogs.show', $blog->slug) }}">
                                            <img src="{{ url(config('app.storage_path'). $blog->image_path) }}" class="card-img-top" alt="thumbnail">
                                        </a>
                                        <div class="card-body">
                                            <h5 class="card-title">
                                                <a href="{{ route('blogs.show', $blog->slug) }}" class="text-dark text-decoration-none">
                                                    {{ Str::limit($blog->title, 50, '...') }}
                                                </a>
                                            </h5>
                                            <div class="d-flex align-items-center mt-3">
                                                <i class="fa fa-user px-1"></i>
                                                <div>
                                                    <p class="mb-0 fw-semibold">{{ $blog->user->name }}</p>
                                                    <p class="mb-0 text-muted">{{ showDate($blog->created_at) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach                
                        @else
                            <div class="col-12">
                                <p class="text-center text-muted">No Blog found</p>
                            </div>
                        @endif
                    </div>
                    <div class="mt-4">
                        {{ $blogs->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="mb-4 side-panel">
                        <h3 class="text-white p-3 h5" style="background:#be8672;">
                            <i class="fa fa-file-text me-2" aria-hidden="true"></i>Recent Posts</h3>
                        @if (count($blogs) > 0)
                            <ul class="list-unstyled">
                                @foreach ($blogs as $blog)
                                    <li class="py-2">
                                        <a href="{{ route('blogs.show', $blog->slug) }}" class="text-dark text-decoration-none">{{ $blog->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p class="text-muted">No blogs found</p>
                        @endif
                    </div>
                    <div class="mb-4 side-panel">
                        <h3 class="text-white p-3 h5" style="background:#be8672;">
                            <i class="fa fa-folder-open me-2" aria-hidden="true"></i>Categories</h3>
                        <ul class="list-unstyled">
                            @foreach ($categories as $category)
                                <li class="py-2">
                                    <a href="{{ route('blogs.category', $category->slug) }}" class="text-dark text-decoration-none">{{ $category->name }}</a>
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
