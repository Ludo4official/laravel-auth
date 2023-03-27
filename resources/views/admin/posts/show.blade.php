@extends('layouts.admin')

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center mb-4">
            <div class="col">
                <h1>
                    {{ $post->title }}
                </h1>

                <p>
                    {{ $post->content }}
                </p>
            </div>
        </div>
    </div>
@endsection