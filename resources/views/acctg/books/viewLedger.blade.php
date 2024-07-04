@extends('mainLayout')

@section('page-content')
<div class="container-fluid">
    <div class="row g-4">
        <div class="col-12 text-center bg-secondary text-white py-3">
            <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
        </div>
    </div>
    <div class="row g-4">
        <div class="col-md-6 offset-md-3">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    Ledger Entry Details
                </div>
                <div class="card-body">
                    <strong>Entry Number:</strong> {{ $ledger->id }}<br>
                    <strong>Entry Details:</strong><br>
                    <textarea name="" id="" cols="30" rows="5" class="form-control text-start" readonly>
                        {{ $ledger->entry }}
                    </textarea>
                    <strong>Amount:</strong> PHP <span class="fw-bold">{{ number_format($ledger->amount,2) }}</span><br>
                    <strong>Encoded By:</strong> {{ $encoder->user_firstname.' '.$encoder->user_lastname }}
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 mt-4">
        <div class="col-12 text-center">
            <a href="{{ route('ledgers') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
@endsection
