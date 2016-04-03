

<div class="row">
    <div class="col-lg-12">                           
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard fa-fw"></i><a href="<?php echo site_url('dashboard/index') ?>">Dashboard</a></li>
            <li><i class="fa fa-clock-o"></i> จัดการข้อมูล โอ.ที. </li>
        </ol>
    </div>
</div>
<div class="ln_solid"></div>

<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>จัดการข้อมูล โอ.ที.</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div class="x_content">

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">

                                <?php // echo form_open('view_overtime/insert') ?>
                                <table class="table table-bordered table-hover" id="dataTables-example">    
                                    <tbody>
                                        <tr class="odd gradeA">                                        
                                            <td align="center">
                                                
                                                ประจำเดือน
                                            </td>
                                            <td>
                                                <input class="form-control" type="date" placeholder="ประจำเดือน" name="monthly" value="<?php echo date('Y-m-d'); ?>">
                                            </td>                                                            
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" name="ok" value="ตกลง" class="btn btn-success">ตกลง</button>
                                        <button type="reset" class="btn btn-primary">ยกเลิก</button>
                                    </div>
                                </div>

                                <?php // echo form_close(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                    <thead>
                        <tr class="headings">
                            <th class="column-title"> # </th>
                            <th class="column-title">ลำดับที่</th>
                            <th class="column-title"> ประจำเดือน </th>
                            <th class="column-title no-link last" align="center"><span class="nobr"> จัดการ </span></th>
                            <th class="bulk-actions" colspan="8">
                                <a class="antoo" style="color:#fff; font-weight:500;">เลือกทั้งหมด ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                    </thead>

                    <tbody>  
                        <?php // foreach ($ot as $key => $value) { ?>
                            <tr class="odd pointer">
                                <td class="a-center ">
                                    <input type="checkbox" class="flat" name="table_records">
                                </td>
                                <td>
                                    <?php // echo $key + 1; ?>
                                </td>
                                <td>
                                    <?php // echo $value['monthly'] ?>
                                </td> 
                                <td><a href="<?php // echo site_url('managedata_overtime/index/' . $value['overtime_id']) ?>" class="btn btn-success btn-xs">จัดการข้อมูล โอ.ที.</a>                                                              </td>
                                </td>
                            </tr>                                        
                        <?php // } ?>
                    </tbody>

                </table>
                </form>

                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-success"><i class="fa fa-send-o"></i> รวมส่ง </button>                                                
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

</div>
