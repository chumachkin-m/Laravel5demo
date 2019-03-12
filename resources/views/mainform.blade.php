@extends('layouts.app')

@section('content')
  <h1>Laravel 5 form demo</h1>
  @if ($errors->any())
  <div class="alert alert-danger" role="alert">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
  @endif
  <form method="POST" action="/">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="formGroupNameInput">Name</label>
      <input type="text" class="form-control" name="formGroupNameInput" id="formGroupNameInput" placeholder="Please input Name" required>
    </div>
    <div class="form-group">
      <label for="formGroupPhoneInput">Phone number</label>
      <input type="text" class="form-control" name="formGroupPhoneInput" id="formGroupPhoneInput" placeholder="Please input Phone number" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection