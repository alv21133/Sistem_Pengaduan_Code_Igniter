<body style="background-color:#f0f0f8;">


    <!-- Left Panel --> 
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default"> 
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="<?php echo base_url().'l_admin' ?>"><i class="menu-icon fa fa-laptop"></i>Dashboard</a>
                    </li>
                    <li class="menu-title"></li>
                    <li class="menu-item-has-children dropdown">
                        <a href="<?php echo base_url()?>/Welcome/list_data/" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Data Laporan</a>
                        
                    </li>

                    <li class="menu-title"></li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="<?php echo base_url()?>/Welcome/input/" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>Lapor Kerusakan</a>
                        
                    </li>
                    <li class="menu-title"></li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="<?php echo base_url()?>/Welcome/logout/" class="dropdown-toggle"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-flash"></i>Keluar</a>
                       
                    </li>
                  
                </div>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        
    </aside><!-- /#left-panel --> 
    <!-- Left Panel -->
    <!-- Right Panel --> 
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header " style="background-color: purple">  
            <div class="top-left" style="background-color: purple">
                <div class="navbar-header " style="background-color: purple" > 
                    <a class="navbar-brand" href="./"><img style="width: 45px; height:45px" src="<?php echo base_url() ?>aset/images/amikom.png" alt="Logo"><p  style="color : white;position:absolute; bottom :-12px ; left:6%">Sistem Pengaduan <br>Universitas Amikom Yogyakarta</p></a>
                    <a class="navbar-brand hidden" href="./"><img src="<?php echo base_url() ?>assets/images/logo2.png" alt="Logo"></a> 
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a> 
                </div> 
            </div>
            <div class="top-right"> 
                <div class="header-menu"> 
                  <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><p style="margin-top:15px;margin-right:10px;color:white"><?php echo $_SESSION['nim']?> </p>
                            <img class="user-avatar rounded-circle" src="<?php echo base_url() ?>aset/images/user.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="<?php echo base_url().'Welcome/logout/' ?>"  ><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div> 
                </div>  
            </div>
        </header><!-- /header -->
        <!-- Header-->
