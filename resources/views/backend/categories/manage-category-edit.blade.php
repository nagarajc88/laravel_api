@extends('backend.layouts.app')
@section('content')
<div class="container-fluid">
  <div class="block-header">
      <h2>
          Add Category
      </h2>
  </div>
  <!-- Basic Validation -->
  <div class="row clearfix">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
              <div class="header">
                  <h2>Add Category
                  <a href="/category"  style="float: right;" class="btn btn-default">Back</a>
                  </h2>
              </div>
              <div class="body" id="create-category">
               <form id="form_validation" data-toggle="validator" action="{{ route('category-control.store') }}" method="POST">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group form-float">
                          <div class="form-line">
                          <select class="form-control" name="parent_id" id="exampleSelect1" required ></select>
                              <label class="form-label">Parent Category:</label>
                          </div>
                      </div>
                      <div class="form-group form-float">
                          <div class="form-line">
                              <input type="text" class="form-control" name="name" required>
                              <label class="form-label">Category Name:</label>
                          </div>
                      </div>
                      <div class="form-group form-float">
                          <div class="form-line">
                              <input type="text" class="form-control" name="slug" required>
                              <label class="form-label">Slug:</label>
                          </div>
                      </div>
                      <div class="form-group form-float">
                          <div class="form-line">
                              <input type="file" class="form-control" name="image" required>
                              <!-- <label class="form-label">Image:</label> -->
                          </div>
                      </div>
            
                      <div class="form-group form-float">
                          <div class="form-line">
                              <textarea name="description" cols="30" rows="5" class="form-control no-resize" required></textarea>
                              <label class="form-label">Description:</label>
                          </div>
                      </div>
                      <div class="form-group">
                          <input type="checkbox" id="checkbox" value="1" name="status">
                          <label for="checkbox">Status</label>
                      </div>
                      <button id="submit-category" class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection