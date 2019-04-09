@extends('layouts.app')
@section('content')

<div class="container-fluid gedf-wrapper">
    <div class="row">
        <div class="col-md-3">
            @include('partials.user')
        </div>
        <div class="col-md-6 gedf-main">
            @include('partials.tweets')
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="cardbody">
                    <div class="card-title">
                        People
                    </div>
                    @include('partials.follow')
                </div>
            </div>
            <div>
                @include('partials.footer')
            </div>
        </div>
    </div>
</div>


@endsection
