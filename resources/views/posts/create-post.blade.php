@extends('layouts.app')

@section('content')
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link bg-aqua-active" href="#" id="english-link">English</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" id="spanish-link">العربية</a>
        </li>
    </ul>
    <div class="card">
        <form action="{{ route('post.store',app()->getLocale()) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="author">Author</label>
                <input type="text" name="author" id="author" class="form-control">
            </div>
            <div class="card-body" id="english-form">
                <div class="form-group">
                    <label class="required" for="en_title">Title</label>
                    <input class="form-control {{ $errors->has('en_title') ? 'is-invalid' : '' }}" type="text"
                        name="en_title" id="en_title" value="{{ old('en_title', '') }}" required>
                    @if ($errors->has('en_title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('en_title') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="en_content">Content</label>
                    <textarea class="form-control {{ $errors->has('en_content') ? 'is-invalid' : '' }}" name="en_content" id="en_content">{{ old('en_content') }}</textarea>
                    @if ($errors->has('en_content'))
                        <div class="invalid-feedback">
                            {{ $errors->first('en_content') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="card-body d-none" id="spanish-form">
                <div class="form-group">
                    <label class="required" for="title">العنوان</label>
                    <input class="form-control {{ $errors->has('ar_title') ? 'is-invalid' : '' }}" type="text"
                        name="ar_title" id="ar_title" value="{{ old('ar_title', '') }}" required>
                    @if ($errors->has('ar_title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('ar_title') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="ar_content">نص المنشور</label>
                    <textarea class="form-control {{ $errors->has('ar_content') ? 'is-invalid' : '' }}" name="ar_content"
                        id="ar_content">{{ old('ar_content') }}</textarea>
                    @if ($errors->has('ar_content'))
                        <div class="invalid-feedback">
                            {{ $errors->first('ar_content') }}
                        </div>
                    @endif
                </div>
            </div>



            <input type="submit" class="btn btn-primary" value="Create Post">
        </form>
    </div>

@section('create-post')
    <script src="{{ asset('js/create-post.js') }}"></script>
@endsection

@endsection
