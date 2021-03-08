<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="mdi mdi-close"></i>
    </button>

    <div class="left-side-logo d-block d-lg-none">
        
            
        
        
    </div>

    <div class="sidebar-inner slimscrollleft">
        
        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li>
                    <a href="{{URL::to('/')}}" class="waves-effect">
                        <i class="dripicons-home"></i>
                        
                        <b> Dashboard </b>
                    </a>
                </li>


                @can('VIEW_SCHOOL')
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-view-thumb"></i><span> School </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        
                        <li><a href="{{URL::to('/')}}/school"><b class="fas fa-school" aria-hidden="true"> School Dashboard </b></a></li>
                        <li><a href="{{URL::to('/')}}/courses"><b class="fa fa-chart-pie" aria-hidden="true"> Manage Courses </b></a></li>
                        <li><a href="{{URL::to('/')}}/students"><b class="fa fa-chart-bar" aria-hidden="true"> Manage Students </b></a></li>
                        <li><a href="{{URL::to('/')}}/schoolfees"><b class="fa fa-chart-line" aria-hidden="true"> School Fees </b></a></li>

                    </ul>
                </li> @endcan



                @can('VIEW_INVENTORY')<li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-view-thumb"></i><span> Inventory </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">

                    <li><a href="{{URL::to('/')}}/locations"><b class="fa fa-chart-line" aria-hidden="true"> Manage Stores </b></a></li>
                    <li><a href="{{URL::to('/')}}/productcategory"><b class="fa fa-chart-pie" aria-hidden="true"> Categories </b></a></li>
                    <li><a href="{{URL::to('/')}}/products"><b class="fa fa-chart-bar" aria-hidden="true"> Manage Products </b></a></li>


                    </ul>
                </li> @endcan

                @can('VIEW_ASSETS')<li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-view-thumb"></i><span> Catalogue </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                    <a href="{{URL::to('/')}}/catalogue" class="fa fa-chart-line"   ><b class="dripicons-view-thumb"> CATALOGUE </b></a>
                    <a href="{{URL::to('/')}}/catalogcategories" class="fa fa-chart-line"   ><b class="dripicons-view-thumb"> ASSET CATEGORY </b></a>
                  
                    
   
                    </ul>
                </li> @endcan

                @can('VIEW_EXPENSES')
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-money-check-alt"></i> <span> Expenses </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        
                        <li><a href="{{URL::to('/')}}/expense"><b class="fa fa-dollar-sign" aria-hidden="true"> Manage Expenses </b></a></li>
                        <li><a href="{{URL::to('/')}}/expensecategory"><b class="fa fa-dollar-sign" aria-hidden="true"> Expenses Category</b></a></li>
  
                        
                    </ul>
                </li>
                @endcan




                @can('VIEW_PRODUCTION')<li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-money-check-alt"></i> <span> Production </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{URL::to('/')}}/production"><b class="fas fa-money-check-alt" aria-hidden="true"> Manage Invoices </b></a></li>
                        <li><a href="{{URL::to('/')}}/quotations"><b class="fas fa-money-check-alt" aria-hidden="true"> Manage Quotations </b></a></li>

                    </ul>
                </li>
                @endcan


                @can('VIEW_STAFF')<li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-user"></i> <span> Staff </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        
                        <li><a href="{{URL::to('/')}}/staff"> <b class="fa fa-users" > Manage Staff </b></a></li>
                    </ul>
                </li> @endcan

                @can('VIEW_SUPPLIERS')<li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-user"></i> <span> Suppliers </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        
                        <li><a href="{{URL::to('/')}}/suppliers"> <b class="fa fa-users" > Manage Suppliers </b></a></li>
                    </ul>
                </li> @endcan

                @can('VIEW CUSTOMERS')<li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-user"></i> <span> Customers </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        
                        <li><a href="{{URL::to('/')}}/customers"> <b class="fa fa-users" > Manage Customers </b></a></li>
                    </ul>
                </li> @endcan


                @can('VIEW DONORS')<li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-users"></i> <span> Donors </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    
                    <ul class="list-unstyled">
                        <li><a href="{{URL::to('/')}}/sponsors"> <b class="dripicons-user" > Manage Financiers </b></a></li>
                    </ul>
                </li> @endcan

               

                @can('VIEW PETTY CASH')<li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-dollar-sign"></i> <span> Petty Cash </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        
                        <li><a href="{{URL::to('/')}}/pettycash"> <b class="fas fa-dollar-sign" > Manage Transactions </b></a></li>
                    </ul>
                </li> @endcan

               

               
            

                @can('IS ADMINISTRATOR')<li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-copy"></i><span> User Rights </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{URL::to('/')}}/roles">Manage Roles</a></li>
                        <li><a href="{{URL::to('/')}}/permissions">Manage Permissions</a></li>
                    </ul>
                </li> @endcan


            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>