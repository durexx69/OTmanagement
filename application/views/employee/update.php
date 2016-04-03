<div class="row">
    <div class="col-lg-12">                           
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard fa-fw"></i><a href="<?php echo site_url('dashboard/index') ?>">Dashboard</a></li>
            <li><i class="fa fa-cogs"></i> จัดการข้อมูลพนักงาน </li>
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
                            <h2>จัดการข้อมูลพนักงาน</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />

                            <?php echo form_open('employee/update/' . $emp['emp_id']); ?>
                            <table class="table table-bordered table-hover" id="dataTables-example">    
                                <tbody>
                                    <tr class="odd gradeA">
                                        <td align="left">
                                            รหัสพนักงาน <text font="" style="color:#FF0000">*</text>
                                            <input class="form-control" placeholder="กรอกรหัสพนักงาน" name="emp_code" type="text" value="<?php echo $emp['emp_id'] ?>" required="" autofocus="">  
                                        </td>

                                        <td align="left">
                                            คำนำหน้าชื่อ <text font="" style="color:#FF0000">*</text>
                                            <br>
                                            <select class="form-control" name="pf_id">
                                                <?php foreach ($pre as $key => $value) { ?>
                                                    <?php if ($emp['pf_id'] == $value['pf_id']) { ?>
                                                        <option selected="selected" value="<?php echo $value['pf_id'] ?>"><?php echo $value['pf_name'] ?></option>
                                                    <?php } else { ?>
                                                        <option value="<?php echo $value['pf_id'] ?>"><?php echo $value['pf_name'] ?></option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </td>

                                        <td align="left">
                                            ชื่อ <text font="" style="color:#FF0000">*</text>
                                            <input class="form-control" placeholder="กรอกชื่อภาษาไทย" name="fname_th" type="text" value="<?php echo $emp['fname'] ?>" required="" autofocus="">
                                        </td>

                                        <td align="left">
                                            นามสกุล <text font="" style="color:#FF0000">*</text>
                                            <input class="form-control" placeholder="กรอกนามสกุลภาษาไทย" name="lname_th" type="text" value="<?php echo $emp['lname'] ?>" required="" autofocus="">
                                        </td>
                                    </tr>

                                    <tr class="odd gradeA">                                        
                                        <td align="left">
                                            ชื่อเล่น
                                            <input class="form-control" placeholder="กรอกชื่อเล่น" name="nickname" type="text" value="<?php echo $emp['nickname'] ?>">
                                        </td>

                                        <td align="left"> 
                                            รหัสประจำตัวประชาชน 
                                            <input class="form-control numberonly" placeholder="กรอกรหัสประจำตัวประชาชน" name="card_id" type="text" value="<?php echo $emp['card_id'] ?>" maxlength="13"> 
                                        </td>

                                        <td align="left">
                                            เพศ <text font="" style="color:#FF0000">*</text>
                                            <br>
                                            <input class="radio-control" type="radio" name="sex" value="m" required="" autofocus="">&nbsp; ชาย
                                            <input class="radio-control" type="radio" name="sex" value="f" required="" autofocus="">&nbsp; หญิง
                                        </td>

                                        <td align="left">
                                            ว/ด/ป เกิด <text font="" style="color:#FF0000">*</text>
                                            <input class="form-control" name="birthday" type="date" value="<?php echo $emp['birthday'] ?>">
                                        </td>
                                    </tr>

                                    <tr class="odd gradeA">                                                                                
                                        <td align="left">
                                            กรุ๊ปเลือด
                                            <select class="form-control" name="blood">
                                                <option value="" required="">กรุ๊ปเลือด</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="O">O</option>
                                                <option value="AB">AB</option>
                                            </select>
                                        </td>

                                        <td align="left">
                                            นํ้าหนัก
                                            <input class="form-control numberonly" placeholder="กรอกนํ้าหนัก" name="weight" type="text" maxlength="3" value="<?php echo $emp['weight'] ?>">
                                        </td>

                                        <td align="left">
                                            ส่วนสูง
                                            <input class="form-control numberonly" placeholder="กรอกส่วนสูง" name="hight" type="text" maxlength="3" value="<?php echo $emp['height'] ?>">
                                        </td>

                                        <td align="left">
                                            เบอร์โทร
                                            <input class="form-control" placeholder="กรอกเบอร์โทร" name="tel"  onkeypress="checkTel()" type="text" maxlength="12" value="<?php echo $emp['tel'] ?>">
                                        </td>
                                    </tr>

                                    <tr class="odd gradeA">                                        
                                        <td align="left">
                                            สังกัด แผนก <text font="" style="color:#FF0000">*</text>
                                            <select class="form-control" name="dep_id" required="" autofocus="">
                                                <?php foreach ($dep as $key => $data) { ?>
                                                    <?php if($emp['dep_id'] == $data['dep_id']) { ?>
                                                        <option selected="selected" value="<?php echo $data['dep_id'] ?>"> <?php echo $data['dep_name'] ?> </option>
                                                    <?php } else { ?>
                                                        <option value="<?php echo $data['dep_id'] ?>"> <?php echo $data['dep_name'] ?> </option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>

                                        <td align="left">
                                            ตำแหน่ง <text font="" style="color:#FF0000">*</text>
                                            <select class="form-control" name="org_position" required="" autofocus="">
                                                <option value=""> กรุณาเลือกตำแหน่ง </option>
                                                <option value="network"> network </option>
                                                <option value="admin"> admin </option>
                                                <option value="programing"> programing </option>
                                            </select>
                                        </td>

                                        <td align="left">
                                            ระดับเงินเดือน
                                            <input class="form-control numberonly" name="salary" placeholder="กรอกระดับเงินเดือน" type="text" maxlength="7" value="<?php echo $emp['salary'] ?>">

                                        </td>

                                        <td align="left">
                                            วันที่เริ่มทำงาน <text font="" style="color:#FF0000">*</text>
                                            <input class="form-control" name="start_date" type="date" required="" autofocus="" value="<?php echo $emp['start_date'] ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td align="left">
                                            ชื่อเข้าใช้งานระบบ <text font="" style="color:#FF0000">*</text>
                                            <input class="form-control numberonly" type="text" name="user" placeholder="กรอกชื่อเขาใช้งาน" required="" value="<?php echo $emp['us'] ?>">
                                        </td>

                                        <td align="left">
                                            รหัสผ่าน <text font="" style="color:#FF0000">*</text>
                                            <input class="form-control numberonly" type="text" name="passwd" placeholder="กรอกรหัสผ่าน" required="" value="<?php echo $emp['pw'] ?>">
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="4" align="left">
                                            ความสามารถพิเศษ
                                            <textarea name="skill" class="form-control" placeholder="กรอกรายละเอียดความสามารถพิเศษ"><?php echo $emp['skill'] ?></textarea>
                                        </td>                                                   
                                    </tr>

                                    <tr class="odd gradeA">
                                        <td colspan="4" align="left">
                                            <i class="glyphicon glyphicon-plus fa-1x" id="color_icon"></i>
                                            <span>รูปประจำตัว</span>
                                            <input class="form-control" type="file" name="file" value="<?php echo $emp['image'] ?>">
                                        </td>
                                    </tr>

                                </tbody>
                            </table>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="ok" value="ตกลง" class="btn btn-success">ตกลง</button>
                                    <a href="<?php echo site_url('employee/insert'); ?>"><i class="btn btn-primary">ยกเลิก</i></a>
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