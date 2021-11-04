@extends('welcome')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{ asset('admin/img/ricky.jpg') }}"
                            alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">ricky</h3>

                    <p class="text-muted text-center">ricky@21</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Followers</b> <a class="float-right">0</a>
                        </li>
                        <li class="list-group-item">
                            <b>Following</b> <a class="float-right">0</a>
                        </li>
                    </ul>
                    
                    
                    <a href="#"
                        class="btn btn-primary btn-block"><b>Edit Profile</b></a>

                </div>

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">About Me</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <strong><i class="fas fa-birthday-cake mr-1"></i> Umur</strong>

                        <p class="text-muted">
                            21 tahun
                        </p>

                        <hr>

                        <strong><i class="far fa-file-alt mr-1"></i> Bio</strong>

                        <p class="text-muted">halo namaku ricky bisa dipanggil ricky umur ricky tinggal di blbalblalblab</p>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- About Me Box -->
            
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card">
                
                
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="posts">
                           
                            <!-- Post -->
                            <div class="post">
                                
                                <!-- /.user-block -->

                                <div class="row mx-0">
                                
                                    <div class="col-lg-4 col-md-6 pt-md-0 pt-3">
                                        <div class="card d-flex flex-column align-items-center">
                                            <div class="product-name">Nike Tshirts for Men</div>
                                            <div class="card-img"> <img src="https://www.freepnglogos.com/uploads/t-shirt-png/t-shirt-png-printed-shirts-south-africa-20.png" alt="" height="100" id="shirt"> </div>
                                            <div class="text-muted text-center mt-auto">Available Sizes</div>
                                            <div id="avail-size">
                                                <div class="btn-group d-flex align-items-center flex-wrap" data-toggle="buttons"> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox"> 80 </label> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> 92 </label> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> 102 </label> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> 104 </label> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> 106 </label> <label class="btn btn-success form-check-label"> <input class="form-check-input" type="checkbox" checked> 108 </label> </div>
                                            </div>
                                            <div class="card-body pt-0">
                                                
                                                <div class="d-flex align-items-center price">
                                                    <div class="del mr-2"><span class="text-dark">RP 55000 </span></div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    
                                  
                                    
                                </div>
                                

                            </div>
                            <!-- /.post -->
                           
                            
                            
                        </div>
                        <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div><!-- /.container-fluid -->

@endsection









