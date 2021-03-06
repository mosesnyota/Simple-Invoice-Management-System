@extends('layouts.design')
@section('content')

    <!-- Start content -->
    <div class="content">

        <!-- Top Bar Start -->
        <div class="topbar">

        </div>
        <!-- Top Bar End -->

        <div class="page-content-wrapper ">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <h4 class="page-title m-0"><button type="button" class="btn btn-secondary btn-md  mr-1"
                                        > <b >  <h2><b> NO OF STORES: {{"  ".$locations->count()}} </b></h2>
                                        </b></button> </h4>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-success btn-lg float-right mr-1"
                                        data-toggle="modal" data-target="#modal-addlocation" data-backdrop="static"
                                        data-keyboard="false" href="#"> <b class="fa fa-plus-circle"> Add Store/Location
                                        </b></button>
                                    
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
                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">

                                <table id="datatable-buttons"
                                    class="table table-striped table-bordered dt-responsive"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th width="10%">#</th>
                                            <th  style="width: 30%">Store Name</th>
                                            <th>Description</th>
                                            <th>No. Of Items</th>
                                            <th></th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $counter = 1; ?>
                                            @foreach ($locations as $location)
                                                <tr>
                                                    <td>{{ $counter }}</td>
                                                    <td>{{ $location->store_name }}</td>
                                                    <td>{{ $location->description }}</td>
                                             
                                                    <td> <?php if ($location->total > 0) { ?>
                                                        <span class="badge badge-success">{{$location->total." Item(s) "}}</span>
                                                        <?php } else { ?>
                                                        <span class="badge badge-info">{{" Empty Store "}}</span>
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                                <a class="btn btn-primary btn-sm" href="locations/{{$location->store_id}}/edit"><i class="fas fa-edit"></i></a>
                                                                <button type="button" class="btn btn-danger btn-sm mr-1 delete-confirm"  href="locations/{{$location->store_id}}/destroy"> <a  data-role="deletepetty"> <i class="fa fa-trash" > </i></a>  </button>  
                                                               
                                                               
                      
                                                    <?php $counter += 1; ?>
                                                </tr>
                                            @endforeach
                                      
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>



            </div><!-- container fluid -->

        </div> <!-- Page content Wrapper -->

    </div> <!-- content -->


@include('locations.modals')
    <!-- End Right content here -->
@endsection
