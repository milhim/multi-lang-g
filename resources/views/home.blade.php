@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 offset-sm-0 col-md-10 offset-md-1 ">
            <div class="p-2 flex-shrink-0 bd-highlight mt-3">
                <button type="button" class="btn btn-primary" id="btn-add" data-bs-toggle="modal" data-bs-target="#formModal">
                    New Appointment
                </button>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link bg-aqua-active" href="#" >English</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" >العربية</a>
                    </li>
                </ul>
            </div>
            <div class="row my-3">

                @foreach ($posts as $post)
                    <div class="col-md-4 my-3">
                        <div class="card">
                            <div class="card-header"> {{ $post->translate(app()->getLocale())->title }}</div>
                            <div class="card-body">
                                {{ $post->translate(app()->getLocale())->content }}
                            </div>
                            <div class="card-footer">
                                {{ $post->author }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
@endsection
