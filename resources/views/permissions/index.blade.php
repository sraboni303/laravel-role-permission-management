@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Permission Name</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1</th>
            <td>Mark</td>
            <td>
                <a href="#" class="btn btn-sm btn-success">Edit</a>
                <a href="#" class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
</div>


@endsection
