<div class="row">
    <div class="col-lg-12">                           
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard fa-fw"></i><a href="<?php echo site_url('dashboard/index') ?>">Dashboard</a></li>
            <li><i class="fa fa-cogs"></i> จัดการข้อมูลแผนก </li>
        </ol>
    </div>
</div>
<div class="ln_solid"></div>

<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>จัดการข้อมูล แผนก</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <?php ?>
                            <?php echo form_open('position/update/' . $position['position_id']); ?>
                            <table class="table table-bordered table-hover" id="dataTables-example">    
                                <tbody>                                   
                                    <tr class="odd gradeA">
                                        <td align="center">
                                            ตำแหน่ง
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" placeholder="ชื่อตำแหน่ง" name="position" value="<?php echo $position['position_name'] ?>">
                                        </td>                                            

                                    </tr>
                                </tbody></table>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="ok" value="ตกลง" class="btn btn-success">ตกลง</button>
                                    <a href="<?php echo site_url('position/insert'); ?>"><i class="btn btn-primary">ยกเลิก</i></a>
                                </div>
                            </div>

                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>