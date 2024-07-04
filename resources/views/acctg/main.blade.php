@extends('mainLayout')

@section('page-content')
<div class="container-fluid d-flex flex-column justify-content-center align-items-center vh-100 p-5">
    <h1 class="display-5 fw-bold text-center mb-5" style="color: #333;">Simplicity is the ultimate sophistication. - Leonardo da Vinci</h1>
    <div class="d-flex justify-content-center w-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        @can('create')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('acctg/new') }}">Add New Ledger Entry</a>
                            </li>
                        @elsecan('viewAll')
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('acctg/view/all') }}" class="btn btn-primary">View All Ledgers</a>
                            </li>
                        @endcan
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="w-75 mx-auto d-flex justify-content-center">
        <p>
            @include('slugs.homeLink')
        </p>
    </div>
</div>
@endsection
