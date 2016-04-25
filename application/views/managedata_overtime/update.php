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
                <?php echo form_open('managedata_overtime/update/' . $date['issue_id']) ?>

                <table class="table table-bordered table-hover" id="dataTables-example"> 
                    <tbody>

                        <tr>
                            <td align="left">
                                
                                ว/ด/ป ที่เริ่มทำ   
                                <input type="datetime-local" class="form-control" id="request_date" name="start_date" value="<?php echo $date['start_date'] ?>" required="" autofocus="">
                            </td>
<!--                            <td align="left"> <br>
                                <input type="checkbox" class="flat" id="checkbox" name="checkbox">
                                ทำ OT ข้ามวัน

                            </td>-->
                            <td align="left" colspan="2"> 
                                ว/ด/ป ที่สิ้นสุดการทำ
                                <input type="datetime-local" class="form-control" id="end_date" name="end_date" value="<?php echo $date['end_date'] ?>" autofocus="">                                                                               
                            </td>
                        </tr>                                                                            
                        </tr>                            
                        <tr>
                            <td>
                                งานที่ทำ
                                <textarea name="work" class="form-control" rows="4" cols="50" required="" value="<?php echo $date['work'] ?>"></textarea>
                            </td>
                            <td colspan="2">
                                สถานที่ปัฎิบัติงาน
                                <textarea name="location_work" class="form-control" rows="4" cols="50" required="" value="<?php echo $date['location_work'] ?>"></textarea>

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



            </div>
        </div>
    </div>
</div>
