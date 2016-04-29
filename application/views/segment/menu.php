<?php
$menu = array(0, 0, 0, 0, 0, 0, 0, 0);

if ($_SESSION['position_id'] == 1) {
    $menu = array(0, 0, 0, 0, 1, 1, 1, 0);
} elseif ($_SESSION['position_id'] == 2) {
    $menu = array(0, 0, 0, 1, 0, 0, 0, 1);
} elseif ($_SESSION['position_id'] == 3) {
    $menu = array(1, 1, 1, 0, 0, 0, 0, 0);
}
?>
<div class="navbar nav_title" style="border: 0;">
    <a href="<?php echo site_url('dashboard/index') ?>" class="site_title"><span>Overtime R M S</span></a>
</div>
<div class="clearfix"></div>
<br />
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <?php if ($menu[0] == 1) { ?>
                <li>
                    <a href="<?php echo site_url('dashboard/index') ?>">
                        <i class="fa fa-dashboard">
                        </i> Dashboard 
                    </a>
                </li>
            <?php } ?>
            <?php if ($menu[1] == 1) { ?>
                <li>
                    <a href="<?php echo site_url('view_overtime/index') ?>">
                        <i class="fa fa-clock-o">                        
                        </i> เพิ่มข้อมูล โอ.ที. </a>
                </li>
            <?php } ?>
            <?php if ($menu[2] == 1) { ?>
                <li>
                    <a href="<?php echo site_url('comment_overtime/index') ?>">
                        <i class="fa fa-file-text">                       
                        </i> ผลการอนุมัติ โอ.ที </a>
                </li>               
            <?php } ?>

<!--            <li><a href="<?php // echo site_url('view_approve/index')       ?>"><i class="fa fa-file-text"></i> รายการ โอ.ที </a></li>-->
            <?php if ($menu[3] == 1) { ?>
                <li>
                    <a href="<?php echo site_url('leader_approve/index') ?>">
                        <i class="fa fa-user">
                        </i> หัวหน้า 
                    </a>
                </li>
            <?php } ?>
            <?php if ($menu[4] == 1) { ?>
                <li>
                    <a href="<?php echo site_url('director_approve/index') ?>">
                        <i class="fa fa-user">
                        </i> ฝ่ายบุคคล 
                    </a>
                </li>
            <?php } ?>
            <?php if ($menu[5] == 1) { ?>
                <li>
                    <a href="<?php echo site_url('') ?>">
                        <i class="fa fa-file-text">
                        </i> รายงานสรุป
                    </a>
                </li>
            <?php } ?>
            <?php if ($menu[6] == 1) { ?>
                <li>
                    <a><i class="fa fa-cogs">                       
                        </i> จัดการข้อมูลพื้นฐาน <span class="fa fa-chevron-down">                       
                        </span></a>
                    <ul class="nav child_menu" style="display: none">
                        <li>
                            <a href="<?php echo site_url('employee/index') ?>"> 
                                จัดการข้อมูลพนักงาน 
                            </a>
                        </li>                    
                        <li>
                            <a href="<?php echo site_url('department/index') ?>"> 
                                จัดการข้อมูลแผนก 
                            </a>
                        </li>
    <!--                    <li><a href="<?php // echo site_url('position/index')        ?>"> จัดการข้อมูลตำแหน่ง </a>                        
                        </li>-->
    <!--                    <li><a href="<?php // echo site_url('manage_role/index')        ?>"> จัดการบทบาท </a>
                        </li>-->
                    </ul>
                </li>               
            <?php } ?>
            <?php if ($menu[7] == 1) { ?>
                <li>
                    <a href="<?php echo site_url('employee_leader/index') ?>">
                        <i class="fa fa-thumbs-o-up">
                        </i> ผู้ใต้บังคับบัญชา
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>                        
</div>
<!-- /sidebar menu -->