@extends('frontend.layouts.cart')
@section('content')
<section id="mainBody">
<form>
<div class="container">
<h3 class="title"><span>Shopping Cart</span></h3>
<ul class="breadcrumb">
  <li><a href="#">Home</a> <span class="divider">/</span></li>
  <li class="active">Checkout</li>
</ul>

<h3 class="title"><span>Member login</span></h3>
<div class="well">
<div class="row-fluid">
	<form>
		<div class="span4">
			<label>Username *</label>
			<input class="span11" type="text">
		</div>
		<div class="span4">	
			<label>Password *</label>
			<input class="span11" type="password">
		</div>
		<div class="span4">
			<br>
			<button class="btn btn-warning">Login</button> &nbsp; &nbsp; <a href="#">Lost your password?</a>
		</div>
	</form>
</div>
</div>

<div class="row">
		<div class="span12">
		<h3 class="title"><span>Cart item details</span></h3>
		<div class="well">
		<table class="table table-bordered table-striped">
			  <thead>
				  <tr>
					<th>Remove</th>
					<th>Image</th>
					<th>Item Name</th>
					<th>Quantity</th>
					<th>Unit Price</th>
					<th>Total</th>
				  </tr>
				</thead>
				<tbody>
				  <tr>
					<td class=""><input type="checkbox" value="" id="optionsCheckbox"></td>
					<td class="cntr"><a href="products.html"><img src="themes/images/clothes/1.jpg" alt="#"></a></td>
					<td>Women's Wear </td>
					<td><input type="text" placeholder="1" class="input-mini"></td>
					<td>$12.00</td>
					<td>$12.00</td>
				  </tr>			  
				  <tr>
					<td class=""><input type="checkbox" value="" id="optionsCheckbox1"></td>
					<td class="cntr"><a href="products.html"><img src="themes/images/clothes/2.jpg" alt="#"></a></td>
					<td>Women's Wear </td>
					<td><input type="text" placeholder="2" class="input-mini"></td>
					<td>$9.00</td>
					<td>$18.00</td>
				  </tr>				 
				  <tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
					<td><strong>$30.00</strong></td>
				  </tr>		  
				</tbody>
			  </table>
		</div>
		</div>
		<div class="span12"><h3 class="title"><span>Address details</span></h3></div>
		<div class="span6">
		<form>
			<h4>Billing Address</h4>
			<div class="well">
			<label>Country *</label>
			<select><option>Select a country…</option> <option>United Kingdom</option></select>
			<label>First Name *</label>
			<input type="text">
			<label>Last Name *</label>
			<input type="text">
			<label>Company Name</label>
			<input type="text">
			<label>Address *</label>
			<input type="text">

			<label>Town / City *</label>
			<input type="text">
			<label>County </label>
			<input type="text">
			<label>Postcode *</label>
			<input type="text">
			<label>Email Address *</label>
			<input type="email">
			<label>Phone *</label>
			<input type="tel"><br><br>
			<button class="btn btn-success">Save</button>
			</div>
		</form>
		</div>
		
		<div class="span6">
		<form>
			<h4>Shipping Address</h4>
			<div class="well">
			<label>Country *</label>
			<input type="text">

			<label>First Name *</label>
			<input type="text">
			<label>Last Name *</label>
			<input type="text">
			<label>Company Name</label>
			<input type="text">
			<label>Address *</label>
			<input type="text">

			<label>Town / City *</label>
			<input type="text">
			<label>County </label>
			<input type="text">
			<label>Postcode *</label>
			<input type="text">
			<label>Email Address *</label>
			<input type="email">
			<label>Phone *</label>
			<input type="tel">
			<br><br>
			<button class="btn btn-success">Save</button>
			</div>
		</form>	
		</div>
		<div class="span12">
		<h3 class="title"><span>Have a coupon?</span></h3>
		<div class="well">
			<input  class="span10" placeholder="Coupon code" type="text">
			<button class="btn btn-success pull-right">Submit</button> 
			<br class="clr">
		</div>
		</div>
		<div class="span12">
		<h3 class="title"><span>Payment type selection</span></h3>
		<div class="well">	
			
		<label><input type="radio"  name="pm"> <strong>Direct Bank Transfer </strong></label>
		<p><em>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order wont be shipped until the funds have cleared in our account.</em></p>

		<label><input type="radio"  name="pm"> <strong>Cheque Payment </strong></label>
		<p><em>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</em></p>
		<label><input type="radio" name="pm"> <strong>PayPal </strong></label>
		<p><em>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account</em></p>
		<br>

		<button type="button" class="btn btn-success btn-large pull-right">Place an order</button>
		<a href="/" class="btn btn-large btn-warning">Continue shopping</a>
		</div>
	 </div>
    </div>
  </div>
  </form>
</section>
@endsection