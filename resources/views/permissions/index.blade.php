@extends('layouts.app')

@section('content')

<div class="container">
    @if (session()->has('message'))
        <p class="alert alert-success">{{ session()->get('message') }} <button class="close" data-dismiss="alert">&times;</button></p>
    @endif
    <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Permission Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($permissions as $permission)
          <tr>
            <th>{{ $loop->index+1 }}</th>
            <td>{{ $permission->name }}</td>
            <td>
                <a href="#" class="btn btn-sm btn-success">Edit</a>
                <form action="{{ route('permission.destroy', $permission->id) }}" class="d-inline-block" method="POST">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Are You Sure?')" class="btn btn-sm btn-danger" type="submit">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>


@endsection
