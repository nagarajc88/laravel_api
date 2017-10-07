@extends('backend.layouts.app')
@section('content')
<div class="container-fluid">
	<div class="block-header">
	    <h2>
	        Add Product
	    </h2>
	</div>
<!-- Basic Validation -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card">
	    <div class="header">
	        <h2>Add Product
	        <a href="/product"  style="float: right;" class="btn btn-default">Back</a>
	        </h2>
	    </div>
<div class="body" id="create-product">
<form id="product_form_details" data-toggle="validator" action="{{ route('product-control.store') }}" method="POST">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<!-- Nav tabs -->
	<ul class="nav nav-tabs nav-justified indigo" role="tablist">
	    <li class="nav-item">
	        <a class="nav-link active" data-toggle="tab" href="#panel5" role="tab"><i class="fa fa-user"></i>General</a>
	    </li>
	    <li class="nav-item">
	        <a class="nav-link" data-toggle="tab" href="#panel6" role="tab"><i class="fa fa-heart"></i> Category</a>
	    </li>
	    <li class="nav-item">
	        <a class="nav-link" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-envelope"></i> Image</a>
	    </li>
	    <li class="nav-item">
	        <a class="nav-link active" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user"></i>Price</a>
	    </li>
	    <li class="nav-item">
	        <a class="nav-link" data-toggle="tab" href="#panel9" role="tab"><i class="fa fa-heart"></i> Details</a>
	    </li>
	    <li class="nav-item">
	        <a class="nav-link" data-toggle="tab" href="#panel10" role="tab"><i class="fa fa-envelope"></i> SEO</a>
	    </li>
	</ul>
	<!-- Tab panels -->
	<div class="tab-content">
	    <!--Panel 1  in show active-->
	    <div class="tab-pane fade in active" id="panel5" role="tabpanel">
	      <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
				        <div class="form-group form-float">
				            <div class="form-line">
				                <input type="text" class="form-control" id="product_name" name="product_name" required>
				                <label class="form-label">Name:</label>
				            </div>
				        </div>
				        <div class="form-group form-float">
				            <div class="form-line">
				                <input type="text" class="form-control" name="product_slug" id="product_slug" required>
				                <label class="form-label">Slug:</label>
				            </div>
				        </div>
				        <div class="form-group form-float">
					        <div class="form-line">
					        <select class="form-control" required >
					        	<option >Please Select</option>
					        	<option value="1">2</option>
					        </select>
					            <label class="form-label">Brand:</label>
					        </div>
					    </div>
				        <div class="form-group">
				            <input type="checkbox" name="product_status" id="product_status" value="1">
				            <label for="checkbox">Status</label>
				        </div>
				      </div>
				    </div>
				 </div>
               </div>
	       </div>
	    <!--/.Panel 1-->
	    <!--Panel 2-->
	    <div class="tab-pane fade" id="panel6" role="tabpanel">
	        <!-- Multi Select -->
	            <div class="row clearfix">
	                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	                    <div class="card">
	                        <div class="body">
	                            <select id="optgroup" class="ms product_categories_view" name="product_categories[]" multiple="multiple">
	                            </select>
	                            <ul id="category_pagination" class="full-right pagination-sm"></ul>
	                        </div>
	                    </div>

	                </div>

	            </div>
	            <!-- #END# Multi Select -->
	    </div>
	    <!--/.Panel 2-->
	    <!--Panel 3-->
	    <div class="tab-pane fade" id="panel7" role="tabpanel">
	        <!-- File Upload | Drag & Drop OR With Click & Choose -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="body">
                            <form action="/" id="frmFileUpload" class="dropzone" method="post" enctype="multipart/form-data">
                                <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                    <h3>Drop files here or click to upload.</h3>
                                    <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
                                </div>
                                <div class="fallback">
                                    <input id="product_image" name="product_image" type="file" multiple />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# File Upload | Drag & Drop OR With Click & Choose -->
	    </div>
	    <!--/.Panel 3-->
	    <!--Panel 4-->
	    <div class="tab-pane fade" id="panel8" role="tabpanel">
	        <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
	        			<div class="form-group form-float">
				            <div class="form-line">
				                <input type="text" class="form-control" id="product_price" name="product_price" required>
				                <label class="form-label">Price:</label>
				            </div>
				        </div>
				        <div class="form-group form-float">
				            <div class="form-line">
				                <input type="text" class="form-control" id="product_special_price" name="product_special_price" required>
				                <label class="form-label">Special Price:</label>
				            </div>
				        </div>
	                </div>
	              </div>
	            </div>
	        </div>
	      </div>
	    <!--/.Panel 4-->
	    <!--Panel 5-->
	    <div class="tab-pane fade" id="panel9" role="tabpanel">
	     <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
	        			<textarea class="mceEditor" name="product_bdescription" id="product_bdescription">
	                     This will be a editor, since it has aselector class.</textarea>
	               </div>
	              </div>
	            </div>
	        </div>
	    </div>
	    <!--/.Panel 5-->
	    <!--Panel 6-->
	    <div class="tab-pane fade" id="panel10" role="tabpanel">
	       <div class="row clearfix">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
	        			<div class="form-group form-float">
				            <div class="form-line">
				                <input type="text" class="form-control" id="product_seo_key" name="product_seo_key" required>
				                <label class="form-label">SEO Key:</label>
				            </div>
				        </div>
				        <div class="form-group form-float">
				            <div class="form-line">
				                <input type="text" class="form-control" id="product_seo" name="product_seo" required>
				                <label class="form-label">SEO:</label>
				            </div>
				        </div>
	                </div>
	              </div>
	            </div>
	        </div>
	      </div>
	    <!--/.Panel 6-->
	    <button type="submit" style="float:right;" class="btn btn-primary">Submit</button>
	</div>

 </form>
</div>		
@endsection