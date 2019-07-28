@extends('layouts.app')

@section('content')
    <h1>Tools</h1>
    <div>
        @if (!empty($tools))
            <ul class="list-group">
                @foreach($tools as $alat)
                    <li class="list-group-item">{{ $alat }}</li>
                @endforeach
            </ul>
        @else
            <p>There is no tools.</p>
        @endif
    </div>
@endsection

@section('footer')
    This is footer.
@endsection
