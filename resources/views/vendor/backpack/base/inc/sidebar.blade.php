@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="{{ asset('user.png') }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="{{ url(config('backpack.base.route_prefix').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          {{-- <li class="header">{{ trans('backpack::base.administration') }}</li> --}}
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

          

         {{--  <li class="treeview">
              <a href="#"><i class="fa fa-newspaper-o"></i> <span>News</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url(config('backpack.base.route_prefix').'/article') }}"><i class="fa fa-newspaper-o"></i> <span>Articles</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/category') }}"><i class="fa fa-list"></i> <span>Categories</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/tag') }}"><i class="fa fa-tag"></i> <span>Tags</span></a></li>
              </ul>
          </li> --}}

          

          <!-- menu item for the police crime records management system-->
          <li class="treeview">
          <a href="#"><i class="fa fa-cogs"></i> <span>Rules & Regulations</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
          <li><a href="{{ url(config('backpack.base.route_prefix').'/rule') }}"><i class="fa fa-file-o"></i> <span>Add Rules</span></a></li>
          </ul>
          </li>

          <li class="treeview">
          <a href="#"><i class="fa fa-cogs"></i> <span>Employee</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">

          <li><a href="{{ url(config('backpack.base.route_prefix').'/employee') }}"><i class="fa fa-list"></i> <span>Add Employee</span></a></li>

         
          </ul>
          </li>
          <li><a href="{{ url(config('backpack.base.route_prefix').'/claim') }}"><i class="fa fa-list"></i> <span>Add Claim</span></a></li>

         



             <li class="treeview">
             <a href="#"><i class="fa fa-cogs"></i> <span>Crimes</span> <i class="fa fa-angle-left pull-right"></i></a>
             <ul class="treeview-menu">
          <li><a href="{{ url(config('backpack.base.route_prefix').'/policestation') }}">

            {{-- <i class="fa fa-file-o"></i> <span>Add Police Station</span></a></li> --}}
            
          <li><a href="{{ url(config('backpack.base.route_prefix').'/crime') }}"><i class="fa fa-list"></i> <span>Add Crime</span></a></li>
           <li><a href="{{ url(config('backpack.base.route_prefix').'/prisoner') }}"><i class="fa fa-file-o"></i> <span>Add Prisoner</span></a></li>
         
             <li><a href="{{ url(config('backpack.base.route_prefix').'/prison') }}"><i class="fa fa-list"></i> <span>Add Prison </span></a></li>

        {{--   <li><a href="{{ url(config('backpack.base.route_prefix').'/page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix').'/menu-item') }}"><i class="fa fa-list"></i> <span>Menu</span></a></li> --}}

          {{-- <li><a href="{{ url(config('backpack.base.route_prefix').'/page') }}"><i class="fa fa-file-o"></i> <span>Pages</span></a></li>
          <li><a href="{{ url(config('backpack.base.route_prefix').'/menu-item') }}"><i class="fa fa-list"></i> <span>Menu</span></a></li> --}}
          </ul>
          </li>
          {{-- <li class="treeview">
           <a href="#"><i class="fa fa-cogs"></i> <span>Reports</span> <i class="fa fa-angle-left pull-right"></i></a>
             <ul class="treeview-menu">

           <li><a href="{{ url(config('backpack.base.route_prefix').'/reportcrime') }}"><i class="fa fa-list"></i> <span>Add Crime Report </span></a></li>
           </ul>
           </li> --}}

          <!-- end of the menu items for crime records-->

         <!-- Users, Roles Permissions -->
         {{--  <li class="treeview">
            <a href="#"><i class="fa fa-group"></i> <span>Users, Roles, Permissions</span> <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/user') }}"><i class="fa fa-user"></i> <span>Users</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/role') }}"><i class="fa fa-group"></i> <span>Roles</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin') . '/permission') }}"><i class="fa fa-key"></i> <span>Permissions</span></a></li>
            </ul>
          </li> --}}

         {{--  <li class="treeview">
              <a href="#"><i class="fa fa-cogs"></i> <span>Advanced</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{ url(config('backpack.base.route_prefix').'/elfinder') }}"><i class="fa fa-files-o"></i> <span>File manager</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/backup') }}"><i class="fa fa-hdd-o"></i> <span>Backups</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/log') }}"><i class="fa fa-terminal"></i> <span>Logs</span></a></li>
                <li><a href="{{ url(config('backpack.base.route_prefix').'/setting') }}"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
              </ul>
          </li> --}}



          <!-- ======================================= -->
          {{-- <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li> --}}
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
