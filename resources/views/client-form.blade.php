@extends('main')

@section('content')
<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="/lists">
    @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Company</label>
          <input type="text" id="title" name="company" class="form-control border-2 border-gray-400 px-4 py-2" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">VAT</label>
          <input type="number" name="vat" class="form-control border-2 border-gray-400 px-4 py-2" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Address</label>
          <input type="text" name="address" class="form-control border-2 border-gray-400 px-4 py-2" required="">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-8 py-2 rounded-md">Submit</button>
</form>
@endsection