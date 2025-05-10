
@extends('layouts.app')
@section('content')

<div class="container margin-all">
    <h2 class="text-center mt-4"> Expense List </h2>
    <a href="{{ route('expense.create') }}" class="btn btn-primary my-2"> Add Expense </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th> Description </th>
                <th> Amount </th>
                <th> Category </th>
                <th> Date </th>
                <th> Actions </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($expenses as $expense)
            <tr>
                <td>{{ $expense->description }}</td>
                <td>{{ $expense->amount }}</td>
                {{-- <td>{{ $expense->category->name }}</td> --}}
                <td>{{ $expense->category ? $expense->category->name : 'Uncategorized' }}</td>
                <td>{{ $expense->date }}</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            ...
                        </button>

                        <div class="dropdown-menu bg-success" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('expense.edit', $expense->id) }}"> Edit </a>
                            <form action="{{ route('expense.destroy', $expense->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                @csrf
                                @method('DELETE')
                                <button class="dropdown-item btn btn-danger btn-sm" type="submit"> Delete </button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
