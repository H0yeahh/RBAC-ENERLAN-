@extends('mainLayout')

@section('page-title','Account Registration')

@section('auth-content')

<section class="text-center">

  <div class="p-3 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 250px;
        "></div>

  <div class="card mx-10 mx-md-5 shadow-5-strong bg-body-tertiary" style="
        margin-top: -60px;
        backdrop-filter: blur(20px);
        ">
    <div class="card-body py-5 px-md-5">
      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-4">Register New User</h2>
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
              <div class="col-md-6 mb-3">
                <div class="form-outline">
                  <input type="text" name="firstname" value="{{ old('firstname') }}" required class="form-control form-control-sm" />
                  <label class="form-label" for="form3Example1">First name</label>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-outline">
                  <input type="text" name="lastname" value="{{ old('lastname') }}" required class="form-control form-control-sm" />
                  <label class="form-label" for="form3Example2">Last name</label>
                </div>
              </div>
            </div>

            <div class="form-outline mb-3">
              <input type="text" name="name" value="{{ old('name') }}" required class="form-control form-control-sm" />
              <label class="form-label" for="form3Example3">Username</label>
            </div>

            <div class="form-outline mb-3">
              <input type="email" name="email" class="form-control form-control-sm" />
              <label class="form-label" for="form3Example4">Email address</label>
            </div>

            <div class="form-check d-flex justify-content-center mb-3">
              <input class="form-check-input me-2" type="checkbox" name="generate_email" id="form2Example33" checked />
              <label class="form-check-label" for="form2Example33">
                Generate email address
              </label>
            </div>

            <div class="form-outline mb-3">
              <input type="password" name="password" required class="form-control form-control-sm" />
              <label class="form-label" for="form3Example5">Password</label>
            </div>

            <div class="form-outline mb-3">
              <input type="password" name="password_confirmation" required class="form-control form-control-sm" />
              <label class="form-label" for="form3Example6">Confirm Password</label>
            </div>

            <div class="d-flex justify-content-center align-items-center mt-3 mb-3">
              <button type="reset" class="btn btn-primary btn-block ms-2">Register</button>
              <button type="submit" class="btn btn-md btn-danger">Clear</button>
            </div>


            <div class="text-center mb-4">
              <a href="{{ route('home') }}" class="btn btn-md btn-secondary">Return to Landing Page</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection