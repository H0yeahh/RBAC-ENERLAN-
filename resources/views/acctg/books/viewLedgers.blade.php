@extends('mainLayout')

@section('page-content')
<div class="container-md">
    <!-- Be present above all else. - Naval Ravikant -->
    <table class="table table-bordered table-striped table-hover">
       <tr class="text-center">
          <th>#</th>
          <th>Entry</th>
          <th>Entry Amount</th>
          <th>Encoded By</th>
          <th></th>
       </tr>
       @foreach($allBooks as $book)
       <tr class="text-center">
          <td>{{ $book->id }}</td>
          <td>{{ $book->entry }}</td>
          <td class="text-end">{{ number_format($book->amount,2) }}</td>
          <td>{{ $book->user_id }}</td>
          <td>
            <a href="{{ route('ledger',$book->id) }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="black" class="bi bi-journal-check" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M10.854 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 8.793l2.646-2.647a.5.5 0 0 1 .708 0"/>
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
</svg>
          </td>
       </tr>
       @endforeach
       <tr>
          <td colspan="5">
              {{ $allBooks->links() }}
          </td>
       </tr>
    </table>

    <a href="{{ route('acctg') }}" class="btn btn-primary">Back</a>
</div>
@endsection
