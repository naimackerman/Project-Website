@extends('welcome')
@section('content')
<style>
	@import url(https://fonts.googleapis.com/css?family=Calibri:400,300,700);
	.mt-100 {
		margin-top: 100px
	}

	.product-wrapper,
	.product-img {
		overflow: hidden;
		position: relative
	}

	.mb-45 {
		margin-bottom: 45px
	}

	.product-action {
		bottom: 0px;
		left: 0;
		opacity: 0;
		position: absolute;
		right: 0;
		text-align: center;
		transition: all 0.6s ease 0s
	}

	.product-wrapper {
		border-radius: 10px
	}

	.product-img>span {
		background-color: #fff;
		box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);
		color: #333;
		display: inline-block;
		font-size: 12px;
		font-weight: 500;
		left: 20px;
		letter-spacing: 1px;
		padding: 3px 12px;
		position: absolute;
		text-align: center;
		text-transform: uppercase;
		top: 20px
	}

	.product-action-style {
		background-color: #fff;
		box-shadow: 0 0 8px 1.7px rgba(0, 0, 0, 0.06);
		display: inline-block;
		padding: 16px 2px 12px
	}

	.product-action-style>a {
		color: #979797;
		line-height: 1;
		padding: 0 21px;
		position: relative
	}

	.product-action-style>a.action-plus {
		font-size: 18px
	}

	.product-wrapper:hover .product-action {
		bottom: 20px;
		opacity: 1
	}

	.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(31, 65, 129);
  background-color: rgb(31, 65, 129);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
	position: relative;
  width: 650px;
  height: 800px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  left: 10px;
  
}
#canpas{
	position: relative;
  width: 650px;
  height: 800px;
  border-radius: 20px;
  padding: 40px;
  box-sizing: border-box;
  background: #ecf0f3;
  left: 70px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}





.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}



</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="product-wrapper mb-45 text-center">
                <div class="product-img"> <img src="{{ asset('admin/img/sample-1.jpg') }}" width="220" height="300" alt="" style="border-radius: 25px;" onclick="openNav()" > </a> <span class="text-center"><i class="fa fa-rupee"></i> 43,000</span>
                    <div class="product-action">
                        <div class="product-action-style"> <a href="#"> <i class="fa fa-plus"></i> </a> <a href="#"> <i class="fa fa-heart"></i> </a> <a href="#"> <i class="fa fa-shopping-cart"></i> </a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-wrapper mb-45 text-center">
                <div class="product-img"> <a href="#" data-abc="true"> width="220" <img src="{{ asset('admin/img/sample-2.jpg') }}" height="300" alt="" style="border-radius: 25px;" onclick="openNav()"> </a> <span><i class="fa fa-rupee"></i> 41,000</span>
                    <div class="product-action">
                        <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i> </a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-wrapper mb-45 text-center">
                <div class="product-img"> <a href="#" data-abc="true"> <img src="{{ asset('admin/img/sample-3.jpg') }}" width="220" height="300" alt="" style="border-radius: 25px;" onclick="openNav()" > </a> <span><i class="fa fa-rupee"></i> 33,000</span>
                    <div class="product-action">
                        <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i> </a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="product-wrapper mb-45 text-center">
                <div class="product-img"> <a href="#" data-abc="true"> <img src="{{ asset('admin/img/sample-4.jpg') }}" width="220" height="300" alt="" style="border-radius: 25px;" onclick="openNav()"> </a> <span><i class="fa fa-rupee"></i> 23,000</span>
                    <div class="product-action">
                        <div class="product-action-style"> <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#" data-abc="true"> <i class="fa fa-plus"></i> </a> <a class="action-heart" title="Wishlist" href="#" data-abc="true"> <i class="fa fa-heart"></i> </a> <a class="action-cart" title="Add To Cart" href="#" data-abc="true"> <i class="fa fa-shopping-cart"></i> </a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="myNav" class="overlay">
	<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
	<tr>
		<td>
			<div class="overlay-content">
		

				<label> Pilih</label>
				<label class="container">78-80 cm
					<input type="radio" checked="checked" name="radio">
					<span class="checkmark"></span>
				  </label>
				  <label class="container">80-85 cm
					<input type="radio" name="radio">
					<span class="checkmark"></span>
				  </label>
				  <label class="container">85-90 cm
					<input type="radio" name="radio">
					<span class="checkmark"></span>
				  </label>
				  <label class="container">90-95 cm
					<input type="radio" name="radio">
					<span class="checkmark"></span>
				  </label>
					
				  
					
			</div>
		</td>
		<td>

			<canvas id="myCanvas" width="200" height="100" style="border:1px solid #000000;">
			</canvas>

		</td>
		
	  </tr>
	
	

	
  </div>

<!-- Modal -->
<script>
	function openNav() {
	  document.getElementById("myNav").style.width = "100%";
	}
	
	function closeNav() {
	  document.getElementById("myNav").style.width = "0%";
	}
	</script>

@endsection