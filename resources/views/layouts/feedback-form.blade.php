@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Feedback Form</h1>
    @if ($errors -> any())
        < class="alert alert-danger">
            <ul>
                @foreach ($errors -> all() as $error)
                <li?>{{$error}}</li>
                @endforeach
            </ul>
</div>
@endif

<form action="/feedback/send" method="POST">
    @csrf
    <div class="mb-3">
        <label>Full Name</label>
        <input type="text" name="fullname" class="form-control" value="{{ old('fullname') }}" required>
</div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
</div>

    <div class="mb-3">
        <label>Comments</label>
        <textarea name="comment" class="form-control" required>{{ old('comment') }}</textarea>
</div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
