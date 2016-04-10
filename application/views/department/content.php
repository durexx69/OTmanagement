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

                            <?php echo form_open('department/insert'); ?>
                            <table class="table table-bordered table-hover" id="dataTables-example">    
                                <tbody>                                    
                                    <tr class="odd gradeA">
                                        <td align="center">
                                            แผนก
                                        </td>
                                        <td>
                                            <input class="form-control" type="text" placeholder="ชื่อแผนก" name="department">
                                        </td>                                            

                                    </tr>
                                </tbody></table>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="ok" value="ตกลง" class="btn btn-success">ตกลง</button>
                                    <button type="reset" class="btn btn-primary">ยกเลิก</button>
                                </div>
                            </div>

                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered table-hover" id="dataTables-example">    
                <tbody><tr>
                        <td colspan="8" align="center" bgcolor="#f5f5f5" colspan="5">
                            <b> <i class="fa fa-sitemap fa-fw" id="font-field-wait"></i> แสดงข้อมูล แผนก ทั้งหมด </b>
                        </td>
                    </tr>
                    <tr class="odd gradeA">
                        <td align="center">
                            ลำดับที่
                        </td>                                                            
                        <td align="center">
                            แผนก                                                               
                        </td>
                        <td align="center" colspan="2">
                            จัดการ                                                               
                        </td>
                    </tr>
                    <?php foreach ($department as $key => $value) { ?>
                        <tr class="odd gradeA">
                            <td align="center">
                                <?php echo $key + 1; ?>
                            </td>
                             
                            <td>
                                <?php echo $value['dep_name']; ?>                                   
                            </td>
                            <td align='center'>
                                <a href="<?php echo site_url('department/update/' . $value['dep_id']); ?>"><i class="fa fa-pencil-square-o fa-1x" id="font-field"></i></a>
                            </td>
                            <td align='center'>
                                <a href="<?php echo site_url('department/delete/' . $value['dep_id']); ?>" onclick="JavaScript:return(confirm('คุณต้องการลบ--<?php echo $value['dep_name'] ?>--จริงหรือไม่'));"><i class="fa fa-trash-o fa-1x" id="font-field"></i> </a> 
                            </td>
                        </tr>
                    <?php } ?>

                </tbody></table>


        </div>
    </div>
</div>