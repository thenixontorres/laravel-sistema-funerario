@extends('layouts.app')

@section('content')
    @include('modificacions.show_fields')

    <div class="form-group">
           <a href="{!! route('modificacions.index') !!}" class="btn btn-default">Back</a>
    </div>
@endsection
