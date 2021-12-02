<style>
    .links{width: 100%; display: flex; justify-content: space-around; flex-direction: row;}
</style>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="image-1"></div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="links">
                        <a href="products">MEMBER LIST</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
