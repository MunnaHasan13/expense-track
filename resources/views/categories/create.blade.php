
@extends('layouts.app')

@section('content')
<div class="container margin-all">
    <h2 class="text-center mt-3"> Add New Category </h2>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label"> Name </label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary"> Save Category </button>
        <a href="{{ route('category.index') }}" class="btn btn-primary"> Back </a>
    </form>
</div>
@endsection
