<!-- top navigation -->
<?php
$position = "";
if ($_SESSION['position_id'] == 1) {
    $position = "ฝ่ายบุคคล";
} elseif ($_SESSION['position_id'] == 2) {
    $position = "หัวหน้า";
} elseif($_SESSION['position_id'] == 3){
    $position = "พนักงาน";
}

//print_r($_SESSION);
?>


<div class="top_nav">
    <div class="nav_menu">
        <nav class="" role="navigation">
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <?php echo $_SESSION['emp_fname'] . ' ' . $_SESSION['emp_lname'] ." [ ตำแหน่ง ] : ".$position; ?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                        <li><a href="<?php echo site_url('employee/update_private/') ?>">  Profile</a>
                        </li>
                        <li><a href="<?php echo site_url('login/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                        </li>
                    </ul>
                </li>                
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->