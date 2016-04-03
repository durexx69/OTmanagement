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
                <?php echo form_open('managedata_overtime/update/' .$result['issue_id']) ?>

                <table class="table table-bordered table-hover" id="dataTables-example"> 
                    <tbody>

                        <tr>
                            <td align="left">
                                
                                ว/ด/ป ที่เริ่มทำ   
                                <input type="date" class="form-control" id="request_date" name="request_date" value="<?php echo $result['start_date'] ?>" required="" autofocus="">
                            </td>
                            <td align="left"> <br>
                                <input type="checkbox" class="flat" id="checkbox" name="checkbox">
                                ทำ OT ข้ามวัน

                            </td>
                            <td align="left" colspan="2"> 
                                ว/ด/ป ที่สิ้นสุดการทำ
                                <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo $result['end_date'] ?>" autofocus="">                                                                               
                            </td>
                        </tr>
                        <tr class="odd gradeA">
                            <td align="left">
                                ประเภท OT   
                                <select type="text" class="form-control" id="request_time" name="type" required="" autofocus="">
                                    <option value=""> กรุณาเลือก ประเภท OT </option>
                                    <?php foreach ($type as $value) { ?>
                                        <option value="<?php echo $value['type_id'] ?>"> <?php echo $value['overtime_name'] ?>  </option>
                                    <?php } ?>
                                </select>
                            </td>                                
                            <td align="left" colspan="2"> 
                                ค่าเบี้ยเลี้ยงเฉพาะหน่วยงาน
                                <select type="text" class="form-control" id="request_time" name="allowance" autofocus="">
                                    <option value=""> กรุณาเลือก ค่าเบี้ยเลี้ยงเฉพาะหน่วยงาน </option>
                                    <?php foreach ($allow as $value) { ?>
                                        <option value="<?php echo $value['allow_id'] ?>"> <?php echo $value['type_allowance'] ?>  </option>
                                    <?php } ?>
                                </select>                                
                            </td> 
                        </tr>
                        <tr>
                            <td>
                                เวลาเข้า
                                <select type="text" class="form-control" id="request_time" name="request_time" required="" autofocus="">
                                    <option value=""> กรุณาเลือก เวลา </option>
                                    <option value="8:30"> 8:30  </option>
                                    <option value="9:00"> 9:00  </option>
                                    <option value="9:30"> 9:30  </option>
                                    <option value="10:00"> 10:00  </option>
                                    <option value="10:30"> 10:30  </option>
                                    <option value="11:00"> 11:00  </option>
                                    <option value="11:30"> 11:30  </option>
                                    <option value="12:00"> 12:00  </option>
                                    <option value="13:00"> 13:00  </option>
                                    <option value="13:30"> 13:30  </option>
                                    <option value="14:00"> 14:00  </option>
                                    <option value="14:30"> 14:30  </option>
                                    <option value="15:00"> 15:00  </option>
                                    <option value="15:30"> 15:30  </option>
                                    <option value="16:00"> 16:00  </option>
                                    <option value="16:30"> 16:30  </option>
                                    <option value="17:00"> 17:00  </option>
                                    <option value="17:30"> 17:30  </option>

                                </select>
                            </td>
                            <td colspan="2">
                                เวลาออก
                                <select type="text" class="form-control" id="end_time" name="end_time" required="" autofocus="">
                                    <option value=""> กรุณาเลือก เวลา </option>
                                    <option value="8:30"> 8:30  </option>
                                    <option value="9:00"> 9:00  </option>
                                    <option value="9:30"> 9:30  </option>
                                    <option value="10:00"> 10:00  </option>
                                    <option value="10:30"> 10:30  </option>
                                    <option value="11:00"> 11:00  </option>
                                    <option value="11:30"> 11:30  </option>
                                    <option value="12:00"> 12:00  </option>
                                    <option value="13:00"> 13:00  </option>
                                    <option value="13:30"> 13:30  </option>
                                    <option value="14:00"> 14:00  </option>
                                    <option value="14:30"> 14:30  </option>
                                    <option value="15:00"> 15:00  </option>
                                    <option value="15:30"> 15:30  </option>
                                    <option value="16:00"> 16:00  </option>
                                    <option value="16:30"> 16:30  </option>
                                    <option value="17:00"> 17:00  </option>
                                    <option value="17:30"> 17:30  </option>

                                </select>

                            </td>
                        </tr>                            

                        <tr>
                            <td>
                                งานที่ทำ
                                <textarea name="work" class="form-control" rows="4" cols="50" required="" placeholder="งานที่ปัฎิบัติ"><?php echo $result['work'] ?></textarea>
                            </td>
                            <td colspan="2">
                                สถานที่ปัฎิบัติงาน
                                <textarea name="location_work" class="form-control" rows="4" cols="50" required="" placeholder="สถานที่ปัฎิบัติงาน"><?php echo $result['location_work'] ?></textarea>

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
<script>
    $(document).ready(function () {

//        $('#checkbox').click(function () {
//
//        });


    });


</script>