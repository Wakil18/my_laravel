<!-- Header_Area -->
<nav class="navbar navbar-default header_aera" id="main_navbar">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="col-md-2 p0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <font size="+3"><b style="color:Black;">Air<strong style="color:Green;">Pollution</strong></b>
                    </font>
                </a>
            </div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="col-md-10 p0">
            <div class="collapse navbar-collapse" id="min_navbar">
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="index.php">Home </a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="news.php">News & Gallery</a></li>
                    <li><a href="contact.php">Contact US</a></li>


                    <li class="dropdown submenu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account</a>
                        <ul class="dropdown-menu other_dropdwn">
                            <?php 
                    if(isset($_SESSION['loggedin']) && $_SESSION['user_role'] !=1)  {
              ?>
                            <li> <a class="dropdown-item" href="admin-form.php"><i class="fa fa-user"></i>
                                    <?= $_SESSION['uname'] ?></a></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out"></i> log-out</a></li>

                            <?php 
                }else if(isset($_SESSION['loggedin']) && $_SESSION['user_role'] !=0)  {
              ?>
                            <li> <a class="dropdown-item" href="user-profile-form.php"><i class="fa fa-user"></i>
                                    <?= $_SESSION['uname'] ?></a></li>

                            <li><a href="logout.php"><i class="fa fa-sign-out"></i> Log-Out</a></li>


                            <?php   }else{
            ?> <li><a href="login-form.php"><i class="fa fa-sign-in"></i> Sign-in</a></li>
                            <li><a href="reg-form.php" data-toggle="tooltip"
                                    title="Sign Up & Get a Free Home Pollution Testing Kit!"><i
                                        class="fa fa-user-plus"></i> Sign-up</a></li>

                            <?php    }
                 ?>
                        </ul>
                    </li>

                    <?php 
                    if(isset($_SESSION['loggedin']))  {       
                    ?>
                    <li><a href="#"><i class="fa fa-map-marker"></i>
                            <?php
                     $query = @unserialize (file_get_contents('http://ip-api.com/php/'));
                     if ($query && $query['status'] == 'success') {
                     echo $query['country'] . ', ' . $query['city'] ;
                     }  
                 ?>
                        </a></li>
                    <?php } ?>

                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </div><!-- /.container -->
</nav>
<!-- End Header_Area -->

<script>
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>