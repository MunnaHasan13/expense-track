
@extends('layouts.app')

@section('content')
<div class="container margin-all">
    <h2 class="text-center"> Edit Expense </h2>
    <form action="{{ route('expense.update', $expense->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="description" class="form-label"> Description </label>
            <textarea name="description" class="form-control">{{ $expense->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label"> Amount </label>
            <input type="number" name="amount" class="form-control" value="{{ $expense->amount }}" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label"> Category </label>
            <select name="category_id" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $expense->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label"> Date </label>
            <input type="date" name="date" class="form-control" value="{{ $expense->date }}" required>
        </div>
        <button type="submit" class="btn btn-primary"> Update Expense </button>
    </form>
</div>
@endsection
