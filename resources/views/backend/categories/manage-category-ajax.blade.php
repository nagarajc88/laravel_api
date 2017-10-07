@extends('backend.layouts.app')
@section('content')
	<div class="container-fluid">
	    <div class="block-header">
	        <h2>Categories</h2>
	    </div>
	    <!-- Basic Table -->
	    <div class="row clearfix">
	        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	            <div class="card">
	                <div class="header">
	                    <h2>
	                        Categories
	                        <a href="add-new-category"><button type="button" class="pull-right btn btn-success" >
								  + Add Category
							</button></a>
	                    </h2>
	                </div>
	                <div class="body table-responsive">
	                    <table class="table">
	                        <thead>
	                            <tr>
	                                <th>Category</th>
	                            </tr>
	                        </thead>
	                        <tbody id="categories"></tbody>

	                    </table>
	                    <ul id="category_pagination" class="pull-right pagination-sm"></ul> 
	                </div>
	            </div>
	        </div>
	    </div>
   </div>
@endsection