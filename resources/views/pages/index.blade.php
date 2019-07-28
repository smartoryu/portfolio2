@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Welcome!</h1>
        <p>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button"> <i class="fa fa-search form-control-feedback"></i> </button>
                </div>
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
            </div>
        </p>
    </div>
@endsection

@section('footer')
    This is footer.
@endsection
