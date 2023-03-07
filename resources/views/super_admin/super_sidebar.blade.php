<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link  {{Request::is('super_admin/super_dashboard') ? 'active':''}}" href="{{url('super_admin/super_dashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                superDashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link {{Request :: is('super_admin/category') || Request :: is('super_admin/add-category') || Request::is('super_admin/edit-category/*') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Category
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse {{Request :: is('super_admin/category') || Request :: is('super_admin/add-category') || Request::is('super_admin/edit-category/*') ? 'show':''}}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link  {{Request::is('super_admin/add-category') ? 'active':''}}" href="{{url('supert_admin/add-category')}}">add category</a>
                                    <a class="nav-link {{Request::is('super_admin/category') || Request::is('super_admin/edit-category/*') ? 'active':''}}" href="{{url('/super_admin/category')}}">view category</a>
                                </nav>
                            </div>
                            <a class="nav-link {{Request :: is('super_admin/posts') || Request :: is('super_admin/add-post')  || Request::is('super_admin/post/*') ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Posts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse {{Request :: is('super_admin/posts') || Request :: is('super_admin/add-post')  || Request::is('super_admin/post/*') ? 'show':''}}" id="collapsePosts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link {{Request::is('super_admin/add-post') ? 'active':''}}" href="{{url('super_admin/add-post')}}">add post</a>
                                    <a class="nav-link {{Request::is('super_admin/posts') || Request::is('super_admin/post/*') ? 'active':''}}" href="{{url('/super_admin/posts')}}">view post</a>
                                </nav>
                            </div>
                            
                            <a class="nav-link {{Request::is('super_admin/users') || Request::is('super_admin/user/*') ? 'active':''}}" href="{{url('super_admin/users')}}" >
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                               users
                              
                            </a>
                          
                            <!-- <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div> -->
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{Auth::user()->name}}
                    </div>
                </nav>
            </div>