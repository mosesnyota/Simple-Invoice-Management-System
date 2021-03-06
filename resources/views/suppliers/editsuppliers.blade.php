@extends('layouts.design')
@section('content')
<!-- Start content -->
<div class="content">



<div class="page-content-wrapper ">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">Edit Supplier</h4>
                        </div>
                        <div class="col-md-4">
                            
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end page-title-box -->
            </div>
        </div> 
        <!-- end page title -->

        

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                    <form role="form" method="post" action="update/{{$supplier->supplier_id}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
            
        
                            <div class="form-group row">
                                <label for="supplier_name" class="col-sm-2 col-form-label">Name/Organization</label>
                                <div class="col-sm-10">
                                <input type="text" autocomplete="off" class="form-control" id="supplier_name" name="supplier_name" value = "{{$supplier->supplier_name}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                <input type="text" autocomplete="off" class="form-control" id="address" name="address" value = "{{$supplier->address}}" required>
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <label for="contactperson" class="col-sm-2 col-form-label">Services Offered</label>
                                <div class="col-sm-10">
                                    <input type="text" autocomplete="off" class="form-control" id="services" name="services" value = "{{$supplier->services}}"  required>
                                </div>
                            </div>
        
                            
                            <div class="form-group row">
                                <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            
                                            <input type="text" autocomplete="off" name="phone" id="phone" class="form-control" value = "{{$supplier->phone}}" required>
                                      
                                    </div>
                                </div>
                            </div>
        
                            
                           
        
        
        
        
        
                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <div class="input-group mb-3">
                                        
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div>
                                            <input type="text" name="email" id="email" class="form-control"
                                            autocomplete="off"  value = "{{$supplier->email}}" required>
                                      
                                    </div>
                                </div>
                            </div>
                            
        
                        </div>
                        <!-- /.card-body -->
                        <div class="modal-footer center">
                            
                            <button type="submit" class="align-self-center btn btn-lg btn-block btn-primary" class="btn btn-primary">Save</button>
                        </div>
                    </form>
              
                       

                        

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->            

    </div><!-- container fluid -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->



<!-- End Right content here -->
@endsection