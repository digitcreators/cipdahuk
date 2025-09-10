@extends('layouts.web')

@section('title', $blog->title ?? '-')
@section('description', $blog->meta_description ?? '-')
@section('canonical', $blog->canonical ?? '-')

@section('content')
<style>
    .sticky-wrapper {
        height: 1200px;
    }
    .free-features {
        position: -webkit-sticky;
        position: sticky;
        top: 10px;
    }
    .features-point {
        padding-top: 8px;
        padding-bottom: 8px;
        line-height: 1.8;
        border-bottom: 2px solid #ecedee;
    }
    .free {
    color: var(--color-secondary);
}
    .side-panel {
    margin-bottom: 15px;
    padding: 20px;
    border: 3px solid #E6E4E6;
    background-color: #fff;
    font-size: 14px;
    overflow: hidden;
}
.bg-transparent {
    background-color: transparent;
}
</style>
<div class="">
    <section class="bg-light py-5">
        <div class="container">
            <nav aria-label="breadcrumb">
                <div class="bg-transparent breadcrumb ml-1 flex">
                    <li class="breadcrumb-item "><a href="{{ route('blogs') }}" class="text-dark text-decoration-none">Blogs</a></li>
                    <li class="breadcrumb-item text-dark"><a href="{{ route('blogs.category', [$category->slug])}}" class="text-dark text-decoration-none">{{ $category->name}}</a></li>
                    <li class="breadcrumb-item active text-dark text-decoration-none" aria-current="page">{{ $blog->title }}</li>
                </div>
            </nav>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <a href="{{ url(config('app.storage_path'). $blog->image_path) }}" target="_blank">
                            <img src="{{ url(config('app.storage_path'). $blog->image_path) }}" alt="{{ $blog->title }}" class="card-img-top">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-8 side-panel">
                    <div class="card p-4">
                        <h2 class="mb-4">{{ $blog->title }}</h2>
                        <div>{!! $blog->description !!}</div>
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
                            <p>No blogs found</p>
                        @endif
                    </div>
                    <div class="mb-4 side-panel">
                        <h3 class="text-white p-3 h5" style="background:#be8672;">
                            <i class="fa fa-folder-open me-2" aria-hidden="true"></i>Categories</h3>
                        <ul class="list-unstyled">
                            @foreach ($categories as $category)
                                <li class="py-2"><a href="{{ route('blogs.category', $category->slug) }}" class="text-dark text-decoration-none" >{{ $category->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sticky-wrapper">
                        <div class="card free-features p-4">
                            <h3 class="text-white p-3" style="background:#be8672;">Free Features</h3>
                            <ul class="list-unstyled">
                                <li class="py-2 d-flex justify-content-between"><span>Professional Assistance</span> <span class="free">free</span></li>
                                <li class="py-2 d-flex justify-content-between"><span>Plagiarism Report</span> <span class="free">free</span></li>
                                <li class="py-2 d-flex justify-content-between"><span>Prompt Response</span> <span class="free">free</span></li>
                                <li class="py-2 d-flex justify-content-between"><span>Formatting</span> <span class="free">free</span></li>
                                <li class="py-2 d-flex justify-content-between"><span>Revisions</span> <span class="free">free</span></li>
                            </ul>
                            <div class="text-center mt-3">
                                <a href="{{ route('order')}}" class="hero-section-order py-2  fw-bold w-100">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
