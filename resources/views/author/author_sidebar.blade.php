<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link {{Request::is('author/authordashboard') ? 'active':''}}" href="{{url('author/authordashboard')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                authorDashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                           
                            <a class="nav-link {{Request :: is('author/posts') || Request :: is('author/add-post') || Request::is('author/post/*')  ? 'collapse active':'collapsed'}}" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePosts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Posts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse {{Request :: is('author/posts') || Request :: is('author/add-post') ||Request::is('author/post/*') ? 'show':''}}" id="collapsePosts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link {{Request::is('author/add-post') ? 'active':''}}" href="{{url('author/add-post')}}">add post</a>
                                    <a class="nav-link {{Request::is('author/posts') || Request::is('author/post/*') ? 'active':''}}" href="{{url('/author/posts')}}">view post</a>
                                </nav>
                            </div>
                       
<!--                            
                            <div class="sb-sidenav-menu-heading">Addons</div>
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