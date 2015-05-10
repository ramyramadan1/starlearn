!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('dist/img/avatar.png') }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Mohamed Abd Elsalam</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        
        <ul class="sidebar-menu">
            <li class="header">MENU</li>
            <li class="active treeview">
                <a href="{{URL::to('admin/dashboard')}}">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="#"><i class="fa fa-circle-o"></i> Student Admission</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> HR Managment</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Finance</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> News Managment</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Time Table</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Settings</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Attendance</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Examination</a></li>
                </ul>
            </li>
            <li class="active treeview">
                <a href="{{URL::to('admin/students')}}">
                <i class="glyphicon glyphicon-user"></i> <span>Students</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                
            </li>
        </ul>

    </section>
    <!-- /.sidebar -->
</aside>