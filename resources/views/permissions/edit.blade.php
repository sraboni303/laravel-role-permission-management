@extends('layouts.app')

@section('content')

<div class="container">
    @if (session()->has('message'))
        <p class="alert alert-success">{{ session()->get('message') }}</p>
    @endif
    <form>
        <div class="mb-3">
          <label for="name" class="form-label">Permission Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name">
          @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
      </form>
</div>

@endsection
