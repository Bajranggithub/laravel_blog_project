@extends('layout.app')

@section('content')
    <div class="container">
        {{-- @php
            dd($data);
        @endphp --}}
        <div class="row post_view">
            <div class="col-md-12 text-center">
                <h1>{{ $data->implode('title') }}</h1>
            </div>
            <div class="col-md-12 mt-5">
                <img src="{{ 'http://127.0.0.1:8000/' }}/{{ $data->implode('file') }}" alt=""
                    width="100%
                ">
            </div>
            <div class="col-md-12 text-center mt-5">
                <h1>{{ $data->implode('subtitle') }}</h1>
            </div>
            <div class="col-md-12 p-5 postview_discription">
                <p>{!! $data->implode('discription') !!}</p>
            </div>
        </div>
    </div>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap');

        .post_view h1 {
            font-size: 50px;
            font-weight: 501;
            font-family: 'Abril Fatface', cursive;
        }

        .post_view p {
            font-size: 18px;
            line-height: 2;
            letter-spacing: 1px;
            color: #606060;
        }

        .post_view img {
            height: 500px;
            object-fit: cover;
        }
    </style>
@stop
