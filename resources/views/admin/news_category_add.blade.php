@extends('admin.admin_layout')

@section('news-drop')
active
@endsection

@section('news_category')
active
@endsection

@section('content')
<div class="section-header">
    <h1>Add News Category</h1>
    <div class="ml-auto">
        <a href="{{ route('admin.news_category') }}" class="btn btn-primary">View All</a>
    </div>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    @if(session()->has('success'))
                        <div class="alert alert-success">
                            <p>{{ session()->get('success') }}</p>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('admin.news_category_insert') }}" method="POST">
                    @csrf
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="slug" value="{{ old('slug') }}">
                            </div>
                        </div>

                        <h6 class="p-2 seo-info">SEO Information</h6>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control" name="meta_title" value="{{ old('meta_title') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="form-control h_140" name="meta_description">{{ old('meta_description') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
