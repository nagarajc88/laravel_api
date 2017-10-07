@extends('backend.layouts.app')
@section('content')

<!-- Striped Rows -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                  Products
                  <a href="/product-add"  class="pull-right btn btn-success">
					  + Add Products
				</a>
                </h2>
            </div>
            <div class="body table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Sku</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Discription</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="products"></tbody>
                </table>
                <ul id="product_pagination" class="pull-right pagination-sm"></ul>
            </div>
        </div>
    </div>
</div>
<!-- #END# Striped Rows -->  
@endsection