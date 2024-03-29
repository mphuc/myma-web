@extends('layouts.admin')

@section('content')

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Advertisement</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form id="demo-form2" action="{{ route('admin.advertisement.add') }}" method="POST" enctype="multipart/form-data"  data-parsley-validate class="form-horizontal form-label-left">
              {{ csrf_field() }}

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="language">Language</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                  <select id="language" class="form-control" name="language">
                      <option value="en">English</option>
                      <option value="mn">Mandarin</option>
                      <option value="ta">Tamil</option>
                      <option value="bn">Bengali</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Title</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                  <input type="text" id="name" name="name" value="{{ old('name') }}" class="control-label">
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="full-name">Type</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                  <select id="role" class="form-control" name="type">
                      <option value="home" @if(old('type') == 'home') selected="selected" @endif>Home</option>
                      <option value="landing" @if(old('type') == 'landing') selected="selected" @endif>Landing</option>
                  </select>
                </div>
              </div>


              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Image</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                  <input type="file" class="control-label" name="image">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Start Time</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                  <input id="birthday" name="start" class="date-picker control-label" required="required" type="text">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">End Time</label>
                <div class="col-md-6 col-sm-9 col-xs-12">
                  <input id="birthday" name="end" class="date-picker control-label" required="required" type="text">
                </div>
              </div>

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-3 col-sm-3 col-xs-12"></div>
                <div class="col-md-6 col-sm-9 col-xs-12">
                  <!-- <button class="btn btn-primary" type="button">Cancel</button> -->
                  <!-- <button class="btn btn-primary" type="reset">Reset</button> -->
                  <button type="submit" class="btn btn-success">Add</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

@endsection
@section('scripts')
<script>
$('[name=language]').on('change', function(){
    var value = $(this).val();
    $('.language').addClass('hide');
    $('.'+value).removeClass('hide');

});
</script>

@endsection
