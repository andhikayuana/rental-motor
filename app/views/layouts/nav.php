<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?=$this->location('home')?>"><?=$this->configMain['name'];?></a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
                
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?=$this->session->getValue('nama');?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="<?=$this->location('home/logout');?>" onclick="return confirm('Logout?');"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li><a href="<?=$this->location('home');?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard </a></li>
            <li>
                <a href="#"  data-target="#demo"><i class="fa fa-fw fa-book"></i> Berkas <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo">
                    <li>
                        <a href="<?=$this->location('pelanggan')?>"> <i class="fa fa-fw fa-users"></i> Data Pelanggan</a>
                    </li>
                    <li>
                        <a href="<?=$this->location('motor')?>"> <i class="fa fa-fw fa-bicycle"></i> Data Motor</a>
                    </li>
                    <li>
                        <a href="<?=$this->location('inventaris')?>"> <i class="fa fa-fw fa-tasks"></i> Inventaris</a>
                    </li>
                    <li>
                        <a href="<?=$this->location('operator')?>"> <i class="fa fa-fw fa-user"></i> Operator</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"  data-target="#demo"><i class="fa fa-fw fa-calendar"></i> Transaksi <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="demo">
                    <li>
                        <a href="<?=$this->location('peminjaman')?>"> <i class="fa fa-fw fa-forward"></i> Peminjaman</a>
                    </li>
                    <li>
                        <a href="<?=$this->location('pengembalian')?>"> <i class="fa fa-fw fa-backward"></i> Pengembalian</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>