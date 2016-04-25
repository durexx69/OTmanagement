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
            <li><a href="<?php echo site_url('dashboard/index') ?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
            <li><a href="<?php echo site_url('employee/update_private/') ?>"><i class="fa fa-user"></i> ประวัติพนักงาน </a></li>
            <li><a href="<?php echo site_url('view_overtime/index') ?>"><i class="fa fa-clock-o"></i> จัดการข้อมูล โอ.ที. </a></li>
<!--            <li><a href="<?php // echo site_url('view_approve/index') ?>"><i class="fa fa-file-text"></i> รายการ โอ.ที </a></li>-->
            <li><a href="<?php echo site_url('leader_approve/index') ?>"><i class="fa fa-share-square-o"></i> หัวหน้า </a></li>
            <li><a href="<?php echo site_url('director_approve/index') ?>"><i class="fa fa-thumbs-o-up"></i> ผู้อนุมัติ </a></li>        
            <li><a><i class="fa fa-cogs"></i> จัดการข้อมูลพื้นฐาน <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li><a href="<?php echo site_url('employee/index') ?>"> จัดการข้อมูลพนักงาน </a>
                    </li>                    
                    <li><a href="<?php echo site_url('department/index') ?>"> จัดการข้อมูลแผนก </a>
                    </li>
<!--                    <li><a href="<?php // echo site_url('position/index') ?>"> จัดการข้อมูลตำแหน่ง </a>                        
                    </li>-->
<!--                    <li><a href="<?php // echo site_url('manage_role/index') ?>"> จัดการบทบาท </a>
                    </li>-->
                </ul>
            </li>
        </ul>
    </div>                        
</div>
<!-- /sidebar menu -->