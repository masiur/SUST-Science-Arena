 <!-- Aside Start-->
<aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="#" class="logo-expanded">
                    <i class="ion-social-buffer"></i>
                    <span href="{!!route('dashboard')!!}" class="nav-label">{!! Config::get('customConfig.names.siteName')!!}</span>

                </a>
            </div>
            <!-- / brand -->

            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">

                     <li class="{!! Menu::isActiveRoute('dashboard') !!}"><a href="{{ route('dashboard') }}"><i class="ion-flask"></i> <span class="nav-label">Dashboard</span></a>                 
                    </li>


                    <li class="has-submenu {!! Menu::areActiveRoutes(['member.add',  'member.list']) !!}"><a href="#"><i class="ion-compose"></i> <span class="nav-label">Executive Committee</span></a>
                        <ul class="list-unstyled">
                            <li><a href="{!! route('member.add') !!}">Add EC Member </a></li>
                            <li><a href="{!! route('member.list') !!}">List of EC Members</a></li>
                        </ul>
                    </li>

                    <li class="{!! Menu::isActiveRoute('info.edit') !!}"> <a href="{!! route('info.edit') !!}"><i class="ion-compose"></i> <span class="nav-label">SSA Info</span></a>
                    </li>

                    <li class="{!! Menu::isActiveRoute('message') !!}"> <a href="{!! route('message') !!}"><i class="ion-compose"></i> <span class="nav-label">Messages</span></a>
                    </li>

                    <li class="has-submenu"><a href="{!! route('pending.blog') !!}"><i class="ion-compose"></i> <span class="nav-label">Blog | Articles</span><span class="badge bg-purple">{{ count(App\Models\Blog::all()) }}</span></a>
                       <!-- <ul class="list-unstyled">
                            <li><a href="{!! route('blog.create') !!}">Create blog</a></li>
                            <li><a href="{!!route('blog.index') !!}">All Event List</a></li>

                        </ul> -->
                    </li>


                   <li class="has-submenu {!! Menu::areActiveRoutes(['event.index', 'event.create']) !!}"><a href="#"><i class="ion-compose"></i> <span class="nav-label">Events</span></a>
                        <ul class="list-unstyled">
                            <li><a href="{!! route('event.create') !!}">Create Event</a></li>
                            <li><a href="{!!route('event.index') !!}">All Events</a></li>

                        </ul>
                    </li>


                  <li class="has-submenu"><a href="#"><i class="ion-stats-bars"></i> <span class="nav-label">News</span></a>
                        <ul class="list-unstyled">
                            <li><a href="{!! route('news.create') !!}">Create News</a></li>
                            <li><a href="{!!route('news.index') !!}">All News</a></li>

                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#"><i class="ion-grid"></i> <span class="nav-label">Category</span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('category.index') }}">All Categories</a></li>
                            <li><a href="{{ route('category.create') }}">Add Category</a></li>

                        </ul>
                    </li>

                    <li class="has-submenu"><a href="#"><i class="ion-grid"></i> <span class="nav-label">User Manage</span></a>
                        <ul class="list-unstyled">
                            <li><a href="{{ route('user.index') }}">List of All Users</a></li>

                        </ul>
                    </li>


                </ul>
            </nav>



</aside>
        <!-- Aside Ends-->



