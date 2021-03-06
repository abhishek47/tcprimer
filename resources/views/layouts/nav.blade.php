        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                       <a href="/home" class="logo hidden-xs"><img src="/images/logo.png" width="40px;" /> <h4>TDrive</h4></a>
                        <a href="/home" class="logo visible-xs"><span><i class="fa fa-truck" style="color: white;"></i> TD</span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">

                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="navbar-c-items">
                                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="" class="form-control">
                                     <a href="" style="color: white;"><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                            <li class="dropdown navbar-c-items">
                                <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                    <i class="icon-bell"></i> <!-- <span class="badge badge-xs badge-danger">3</span> -->
                                </a>
                                <ul class="dropdown-menu dropdown-menu-lg">
                                    <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                    <li class="list-group slimscroll-noti notification-list">

                                       <!-- list item
                                       <a href="javascript:void(0);" class="list-group-item">
                                          <div class="media">
                                             <div class="pull-left p-r-10">
                                                <em class="fa fa-diamond noti-primary"></em>
                                             </div>
                                             <div class="media-body">
                                                <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                             </div>
                                          </div>
                                       </a> -->

                                      
                                    </li>
                                   <!-- <li>
                                        <a href="javascript:void(0);" class="list-group-item text-right">
                                            <small class="font-600">See all notifications</small>
                                        </a> -->
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown navbar-c-items">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="/images/avatar-1.jpg" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                  <!--  <li><a href="javascript:void(0)"><i class="ti-user text-custom m-r-10"></i> Profile</a></li>
                                    <li><a href="javascript:void(0)"><i class="ti-settings text-custom m-r-10"></i> Settings</a></li> -->
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="ti-power-off text-danger m-r-10"></i> Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

           <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <ul class="navigation-menu">
                           <li>
                                <a href="/home">Home</a>
                            </li>


                            <li>
                                <a href="/vehicles">Vehicles</a>
                            </li>

                            <li>
                                <a href="/people">People</a>
                            </li>

                             <li>
                                <a href="/customers">Customers</a>
                            </li>

                            <li>
                                <a href="/consignments">Consignments</a>
                            </li>

                            <li>
                                <a href="#">Journeys</a>
                            </li>

                            <li class="has-submenu last-elements">
                                <a href="#">Accounts</a>
                                <ul class="submenu">
                                    <li><a href="/expenses"> Expenses</a></li>
                                    <li><a href="/sales"> Sales</a></li>
                                    <li><a href="/reports"> Reports</a></li>
                                </ul>
                            </li>

                           
                            
                          
                        </ul>
                    </div>
                </div> 
            </div>  <!-- end navbar-custom -->
        </header>
        <!-- End Navigation Bar-->