<nav class="navbar navbar-default">
<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <h4 class="navbar-brand" href="index.html">Inventaris Sekolah | SIG</h4>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right" style="margin-top: 10px">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <?php echo "$_SESSION[usernm]" ?>&nbsp;<i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="logoff.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
</div>
</nav>
<section class="panel panel-default container">
    <div id="navbar" class="navbar-collapse collapse center">
        <div class="container">
            <ul class="nav navbar-nav">
                <li>
                <a href="index.php?pg=beranda"><i class="glyphicon glyphicon-home"></i> Beranda</a>
                </li>
                <li>
                <a href="index.php?pg=profil"><i class="glyphicon glyphicon-user"></i> Profil</a>
                </li>
                <li>
                <a id="user" href="index.php?pg=inventaris"><i class="glyphicon glyphicon-th-list"></i> Inventaris</a>
                </li>
                <li>
                <a class="show" href="index.php?pg=organisasi"><i class="fa fa-users"></i> Organisasi</a>
                </li>
            </ul>
        </div>
    </div> 
</section>

<section class="container text-center" style="background-color: #ffffff">
    <div class="row" style="margin-bottom: 50px">
    <?php
        if(empty($_GET['pg']) OR $_GET['pg']=='beranda')include 'beranda.php';

            $link = $_GET['pg'];
            $link = explode("_", $link);
            $folder= $link[0];
            
            include 'pages/'.$folder.'/'.$_GET['pg'].'.php';
        
        ?>
    </div>
</section>