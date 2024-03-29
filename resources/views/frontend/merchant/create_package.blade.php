@extends('layouts.merchant')

@section('header')
<header class="header">
  <h2>Add Package</h2>
  <span class="back-btn"><a href="javascript:;" onclick="window.history.go(-1); return false;">
      <img src="{{ static_file('merchant/images/icon-back-arrow.png') }}" alt=""></a>
  </span>
</header>
@endsection
@section('content')
<div class="profile">

  <form method="post" action="{{ route('merchant.package.add') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="hidden" class="form-control" placeholder="Food Item" name="type" value="package">
      <input type="text" class="form-control" placeholder="Package Name" name="name" value="{{ old('name') }}">
    </div>
    <div class="form-group">
        <textarea class="form-control" placeholder="Write Here ..."  name="description">{{ old('description') }}</textarea>
    </div>
    <div class="form-group">
        {!!Form::select('category_id', $category, '', ['class' => 'form-control'])!!}
    </div>

    <div class="form-group">
      <input type="text" class="form-control" placeholder="Price" name="price" value="{{ old('price') }}">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" placeholder="No. of Days for Breakfast" name="breakfast" value="{{ old('breakfast') }}">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="No. of Days for Lunch" name="lunch" value="{{ old('lunch') }}">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" placeholder="No. of Days for Dinner" name="dinner" value="{{ old('dinner') }}">
    </div>
    <div class="form-group clearfix">
    <div class=" pull-left custom-check-form form-checkbox">
      <input id="Vegetarian" name="is_veg" value="1" type="checkbox">
      <label for="Vegetarian">Vegetarian</label>
    </div>
    <div class=" pull-left custom-check-form form-checkbox">
      <input id="Halal" name="is_halal" value="1" type="checkbox">
      <label for="Halal">Halal</label>
    </div>
  </div>
    <div class="form-group clearfix">
            <div class="img-row clearfix">
            <img src="images/img-placeholder.png" alt="">
          </div>
          <!-- <a href="#"><img src="images/icon-add.png" alt=""></a> -->
          </div>

    <div class="text-center mg-top">
 <button type="submit" class="btn btn-default">Submit</button>
 </div>
  </form>
</div>
@endsection
