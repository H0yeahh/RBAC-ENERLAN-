@extends('mainLayout')

@section('page-title', 'Main Landing Page')

@section('page-content')
<div class="container-fluid">
    <h1 class="text-center fw-bold mb-4">Welcome to the Site</h1>
    <div class="d-flex justify-content-center align-items-center mb-4" style="height: 50px;">
        <ul class="nav nav-pills mb-0">
            <li class="nav-item">
                <a class="nav-link"
                   href="{{ route('acctg') }}"
                   @unless(Auth::user()->hasRole('admin') || Auth::user()->hasRole('bookeeper') || Auth::user()->hasRole('auditor') || Auth::user()->hasRole('audasst'))
                       class="not-allowed" style="pointer-events: none; cursor: not-allowed; color: black;"
                   @endunless
                >
                    Accounting
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   href="{{ route('prod') }}"
                   @unless(Auth::user()->hasRole('admin') || Auth::user()->hasRole('assembler'))
                       class="not-allowed" style="pointer-events: none; cursor: not-allowed; color: black;"
                   @endunless
                >
                    Production
                </a>
            </li>

            @if(Auth::user()->hasRole('admin'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dash') }}">
                        Dashboard
                    </a>
                </li>
            @endif
        </ul>
    </div>

    <div id="carouselVideoExample" class="carousel slide carousel-fade" data-mdb-ride="carousel" style="position: relative; width: 100%; max-height: 60vh; overflow: hidden;">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <video class="img-fluid" autoplay loop muted style="object-fit: cover;">
                    <source src="https://mdbcdn.b-cdn.net/img/video/Tropical.mp4" type="video/mp4" />
                </video>
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-white">First slide label</h5>
                    <p class="text-white">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
.nav-pills.nav-link:not(.active):hover {
    color: #007bff;
}

.carousel-caption {
    background-color: rgba(0, 0, 0, 0.5);
}
</style>
