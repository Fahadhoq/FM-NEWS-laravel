@extends('Backend.layout.master')



@section('container')

<h1>ADD PAYMENT CATEGORY</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('message'))
  <div class="alert alert-{{ session('type') }}">
      {{ session('message') }}
  </div>
@endif

<main role="main" class="container">
  <div class="row">

  <form action="{{ route( 'payment.category.create' ) }}" method="post" >
  @csrf

  <div class="form-group">
    <label for="name">Payment Category Name </label>
    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Enter Payment Category name">
  </div>

      <div class="form-group">
          <label for="amount">Payment Amount </label>
          <input type="text" class="form-control" name="amount" value="{{ old('amount') }}" placeholder="Enter Payment Amount">
      </div>

  <div class="form-group">
  <label for="status"> Status </label>
  <select name="status" class="form-control" >
  <option value="0">Inactive</option>
  <option value="1">Active</option>
</select>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div><!-- div row -->

</main>

@endsection
