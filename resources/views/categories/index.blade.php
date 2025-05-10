
@extends('layouts.app')
@section('content')

<div class="container margin-all">
    <h2 class="text-center mt-5"> Category List </h2>
    <a href="{{ route('category.create') }}" class="btn btn-primary my-2"> Add Category </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th> Name </th>
                <th> Actions </th>
            </tr>
        </thead>
        <tbody>
            @if(isset($categories))
                @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                ...
                            </button>

                            <div class="dropdown-menu bg-success" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('category.edit', $category->id) }}"> Edit </a>
                                <form action="{{ route('category.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
                                    @csrf
                                    @method('DELETE')
                                    <button class="dropdown-item btn btn-danger btn-sm" type="submit"> Delete </button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="2" class="text-center"> No categories available </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

@endsection
