<?php ?>
<div class="row">
    <div class="col-lg-12">                           
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard fa-fw"></i><a href="<?php echo site_url('dashboard/index') ?>">Dashboard</a></li>
            <li><i class="fa fa-thumbs-o-up"></i> อนุมัติ OT</li>
        </ol>
    </div>
</div>
<div class="ln_solid"></div>
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>อนุมัติ โอ.ที.</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <?php echo form_open(''); ?>
                <div class="x_content">                   
                    <table class="table table-striped responsive-utilities jambo_table bulk_action">
                        <thead>
                            <tr class="headings">
<!--                                    <th>
                                    <input type="checkbox" id="check-all" class="flat">
                                </th>-->
                                <th class="column-title">ลำดับที่</th>
                                <th class="column-title"> รหัสพนักงาน </th>
                                <th class="column-title"> ชื่อ-สกุล </th>
                                <th class="column-title"> แผนก </th>
                                <th class="column-title"> ประจำเดือน </th>
                                <th class="column-title no-link last" align="center"><span class="nobr"> จัดการ </span></th>
<!--                                    <th class="bulk-actions" colspan="8">
                                    <a class="antoo" style="color:#fff; font-weight:500;">เลือกทั้งหมด ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                </th>-->
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($director as $key => $value) { ?>
                                <tr class="odd pointer">
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo $value['emp_code']; ?></td>
                                    <td><?php echo $value['emp_fname'] . " " . $value['emp_lname']; ?></td>
                                    <td><?php echo $value['dep_name']; ?></td>
                                    <td><?php echo change_date($value['monthly']); ?></td>
                                    <td><a href="<?php echo site_url('director_approve/listdata/' . $value['overtime_id']) ?>" name="emp_id" class="btn btn-success btn-xs">ข้อมูล OT</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php echo form_close(); ?>
                    <div class="ln_solid"></div>
                    <!--                    <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> อนุมัติ </button>
                                            </div>
                                        </div>-->
                </div>
            </div>
        </div>
    </div>
</div>
