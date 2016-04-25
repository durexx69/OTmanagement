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
                <h2> จัดการข้อมูล โอ.ที.</h2>                                        
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <?php echo form_open('managedata_overtime/insert/') ?>
<?php // print_r($ot); ?>
                <table class="table table-bordered table-hover" id="dataTables-example"> 
                    <tbody>
                        <tr>
                            <td align="left">
                                <?php foreach ($ot as $value){ ?>
                                <input type="hidden" name="overtime_id" value="<?php echo $value['overtime_id']; ?>"/>
                                <?php } ?>
                                ว/ด/ป ที่เริ่มทำ   
                                <input type="datetime-local" class="form-control" id="request_date" name="start_date" value="<?php echo date('Y-m-d'); ?>" required="" autofocus="">
                            </td>
<!--                            <td align="left"> <br>
                                <input type="checkbox" class="flat" id="checkbox" name="checkbox">
                                ทำ OT ข้ามวัน

                            </td>-->
                            <td align="left" colspan="2"> 
                                ว/ด/ป ที่สิ้นสุดการทำ
                                <input type="datetime-local" class="form-control" id="end_date" name="end_date" value="<?php echo date('Y-m-d'); ?>" required="" autofocus="">
                            </td>
                        </tr>                    
                        <tr>
                            <td>
                                งานที่ทำ
                                <textarea name="work" class="form-control" rows="4" cols="50" required="" placeholder="งานที่ปัฎิบัติ"></textarea>
                            </td>
                            <td colspan="2">
                                สถานที่ปัฎิบัติงาน
                                <textarea name="location_work" class="form-control" rows="4" cols="50" required="" placeholder="สถานที่ปัฎิบัติงาน"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" colspan="4"> 
                                <button type="submit" name="ok" value="ตกลง" class="btn btn-success"> บันทึก </button>
                                <button type="reset" class="btn btn-primary">ยกเลิก</button>
                            </td>
                        </tr>                            
                    </tbody>
                </table>

                <?php echo form_close(); ?>
                <div class="ln_solid"></div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>รายการที่บันทึก</h2>                                    
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="column-title" colspan="13"> ข้อมูลโอที [ทั่วไป] </th> 
                                        </tr>
                                        <tr class="headings">
                                            <th rowspan="2">
                                                #
                                            </th>
                                            <th class="column-title" rowspan="2">ลำดับ</th>                                            
                                            <th class="column-title" rowspan="2"> ว/ด/ป และ เวลา ที่เริ่ม </th>
                                            <th class="column-title" rowspan="2"> ว/ด/ป และ เวลา ที่สิ้นสุด </th>                                            
                                            <th class="column-title" rowspan="2"> งานที่ทำ/สถานที่ไป </th>                                            
                                            <th class="column-title" rowspan="2"> จัดการ </th>
                                        </tr>                                        
                                    </thead>
                                    <tbody>                        
                                        <tr class="odd pointer">
                                            <?php foreach ($md as $key => $value) { ?>
                                            <td class="a-center ">
                                                <input type="checkbox" class="flat" name="table_records">
                                            </td>
                                            <td class="a-center ">
                                                <?php echo $key + 1; ?>
                                            </td>                                           
                                            <td align="center">
                                                <?php echo $value['start_date'] ?>
                                            </td>
                                            <td align="center">
                                                <?php echo $value['end_date'] ?>
                                            </td>                                                                                     
                                            <td align="center">
                                                <?php echo $value['work']." " . "/" . " " .$value['location_work'] ?>
                                            </td>
                                            
                                            <td align='center'>
                                                <a href="<?php echo site_url('managedata_overtime/update/' . $value['issue_id']);   ?>"><i class="fa fa-pencil-square-o fa-1x" id="font-field"></i></a>
                                                <a href="<?php echo site_url('managedata_overtime/delete/' . $value['issue_id']);   ?>" onclick="JavaScript:return(confirm('คุณต้องการลบ--<?php echo $value['work'] . " " . "และ" . " " . $value['location_work'] ?>--จริงหรือไม่'));"><i class="fa fa-trash-o fa-1x" id="font-field"></i> </a> 
                                            </td>

                                        </tr>
                                        <?php } ?>

<!--                                        <tr class="odd pointer">
                                            <td align="right" colspan="4"><b>ค่ารวมเวลาทั้งหมด</b></td>
                                            <td align="center" colspan="3"> 24:00 </td>
                                        </tr>-->
                                </table>
                                </tbody>
                                </tbody>
                            </form>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-send-o"></i> ส่งข้อมูล </button>
                                </div>
                            </div>                           

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
