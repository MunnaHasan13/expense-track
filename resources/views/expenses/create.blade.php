
@extends('layouts.app')
@section('content')

<div class="container margin-all">
    <h2 class="text-center mt-3"> Add Expense </h2>
    <form action="{{ route('expense.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="description" class="form-label"> Description </label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label"> Amount </label>
            <input type="number" name="amount" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label"> Category </label>
            <select name="category_id" class="form-control" required>
                <option value=""> Select Category </option>
                @if(isset($categories))
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                @else
                    <option value=""> No categories available </option>
                @endif
            </select>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label"> Date </label>
            <input type="date" name="date" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary"> Save Expense </button>
    </form>
</div>

@endsection
