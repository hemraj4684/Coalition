@extends('layout.default')
@section('title')Product View @endsection
<header class="row">
        <div class="well">
            <b >Product Information</b>
        </div>        
</header>
@section('content')
<div class="row">
        <form role="form" id="product-form" method="post">
            <input type="hidden" id="token" name="_token" value="{{{ csrf_token() }}}" />
            <div class="col-lg-6">
                <div class="well well-sm"><strong>Add new products </strong></div>
                <div class="form-group">
                    <label for="productname">Enter Product Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="pName" id="productname" placeholder="Enter Product Name" required>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="qty">Enter Quantity in Stock</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="qty" name="pQty" placeholder="Enter Quantity in Stock" required>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="price">Enter Price</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="price" name="pPrice" placeholder="Enter Price" required>
                       
                    </div>
                </div>
                <div class="form-group">
                    <label for="price">Total Price</label>
                    <div class="input-group">
                        <input type="number" class="form-control" id="price" name="pTotalPrice" placeholder="Total Price" required>
                       
                    </div>
                </div>
               
                <input type="submit" name="submit" id="submit" value="Add Product" class="btn btn-info pull-left">
            </div>
        </form>
        <BR />
            <div id="message" class="col-md-12">
                
                
            </div>
    </div>
    	<h2>Product Information</h2>          
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Quantity in Stock</th>
        <th>Price</th>
        <th>Created At</th>
      </tr>
    </thead>
    <tbody>
    @if(isset($products) && !empty($products))
    @foreach($products as $product)
    <?php dd($product) ?>
        <tr>
        <td>{{$product->product_name}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->qty}}</td>
        <td>{{$product->date}}</td>
      </tr>
    @endforeach
    @endif  
    </tbody>
  </table>
</div>
@endsection