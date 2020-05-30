
@extends('layouts.app')
@section('setting')
		<title>IFRI-UAC | ADMINISTRATION</title>
@endsection
@section('content')
    <h1>Step 1</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
     <form action="/etape1" method="POST">
        @csrf
     <input type="text" name="prix_voulu" class="form-controll" placeholder="Enter prix_voulu" value="{{ session()->get('location.prix_voulu') }}">
         <button type="submit" class="btn btn-primary">Continue</button>
     </form>
@endsection