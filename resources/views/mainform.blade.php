@extends('layouts.app')

@section('content')
  <h1>Laravel 5 form demo</h1>
  <form>
    <div class="form-group">
      <label for="formGroupNameInput">Name</label>
      <input type="text" class="form-control" id="formGroupNameInput" placeholder="Please input Name">
    </div>
    <div class="form-group">
      <label for="formGroupPhoneInput">Phone number</label>
      <input type="text" class="form-control" id="formGroupPhoneInput" placeholder="Please input Phone number">
    </div>
  </form>
@endsection