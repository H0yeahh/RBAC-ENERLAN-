@extends('mainLayout')

@section('page-content')
<div class="container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-5 fw-bold">Your Pleasure</h1>
            <p class="lead">People find pleasure in different ways. I find it in keeping my mind clear.</p>
            <hr class="my-4">
            <p>
                <a href="{{ route('usertool') }}" class="btn btn-primary">Manage User Roles and Permissions</a>
            </p>
            <p>
                <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
            </p>
        </div>
    </div>
</div>
@endsection
