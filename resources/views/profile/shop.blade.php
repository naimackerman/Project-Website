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
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    
                                    <a href="#">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Toko A</div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Kunjungi Toko</div>
                                    </div>
                                    </a>
                                    <!-- <a href="whatsapp://send?abid=phonenumber&text=Hello%2C%20World!">Send Message</a>
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Hubungi Penjual</div>
                                        </div>
                                    </a> -->
                                    <div class="col-auto">
                                        <img src="{{ asset('admin/img/sample-2.jpg') }}" width="200" height="150">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="#">
                    <div class="card border-left-success shadow h-100 py-2">
                    <!-- <div class="card border-left-primary shadow h-100 py-2"> -->
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Toko A</div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Kunjungi TOko</div>
                                </div>
                                <div class="col-auto">
                                        <img src="{{ asset('admin/img/sample-2.jpg') }}" width="200" height="150">
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="#">
                    <div class="card border-left-info shadow h-100 py-2">
                    <!-- <div class="card border-left-primary shadow h-100 py-2"> -->
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Toko A</div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Kunjungi TOko</div>
                                </div>
                                <div class="col-auto">
                                        <img src="{{ asset('admin/img/sample-2.jpg') }}" width="200" height="150">
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="#">
                    <div class="card border-left-warning shadow h-100 py-2">
                    <!-- <div class="card border-left-primary shadow h-100 py-2"> -->
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Toko A</div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Kunjungi TOko</div>
                                </div>
                                <div class="col-auto">
                                        <img src="{{ asset('admin/img/sample-2.jpg') }}" width="200" height="150">
                                </div>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
       
    </div>
</div>
<script>
	function openNav() {
	  document.getElementById("myNav").style.width = "100%";
	}
	
	function closeNav() {
	  document.getElementById("myNav").style.width = "0%";
	}
	</script>

@endsection