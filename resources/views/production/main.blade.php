@extends('mainLayout')

@section('page-content')
<div class="container-fluid px-4 py-5">
    <div class="row">
        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
            <div class="card shadow rounded-lg border-0">
                <div class="card-body text-center">
                    <blockquote class="blockquote mb-0">
                        <p class="mb-0">You must be the change you wish to see in the world. - Mahatma Gandhi</p>
                    </blockquote>
                </div>
                <div class="card-footer text-muted text-center">
                    <p>@include('slugs.homeLink')</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
