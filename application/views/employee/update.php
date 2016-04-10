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
                                            <input class="form-control" placeholder="กรอกรหัสพนักงาน" name="emp_code" type="text" value="<?php echo $emp['emp_code']; ?>" required="" autofocus="">  
                                        </td>                                        

                                        <td align="left">
                                            ชื่อ <text font="" style="color:#FF0000">*</text>
                                            <input class="form-control" placeholder="กรอกชื่อภาษาไทย" name="emp_fname" type="text" value="<?php echo $emp['emp_fname']; ?>" required="" autofocus="">
                                        </td>

                                        <td align="left">
                                            นามสกุล <text font="" style="color:#FF0000">*</text>
                                            <input class="form-control" placeholder="กรอกนามสกุลภาษาไทย" name="emp_lname" type="text" value="<?php echo $emp['emp_lname']; ?>" required="" autofocus="">
                                        </td>
                                    </tr>

                                    <tr class="odd gradeA">                                        
                                        <td align="left">
                                            ชื่อเล่น<text font="" style="color:#FF0000">*</text>
                                            <input class="form-control" placeholder="กรอกชื่อเล่น" name="nickname" type="text" value="<?php echo $emp['nickname']; ?>">
                                        </td> 
                                        <td align="left">
                                            เบอร์โทร
                                            <input class="form-control" placeholder="กรอกเบอร์โทร" name="tel" type="text" maxlength="12" value="<?php echo $emp['tel']; ?>">
                                        </td>
                                        <td align="left">
                                            แผนก <text font="" style="color:#FF0000">*</text>
                                            <select class="form-control" name="dep_id" required="" autofocus="">
                                                <?php foreach ($dep as $key => $data) { ?>
                                                    <?php if ($emp['dep_id'] == $data['dep_id']) { ?>
                                                        <option selected="selected" value="<?php echo $data['dep_id'] ?>"> <?php echo $data['dep_name']; ?> </option>
                                                    <?php } else { ?>
                                                        <option value="<?php echo $data['dep_id'] ?>"> <?php echo $data['dep_name'] ?> </option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                    </tr>                                    

                                    <tr class="odd gradeA">                                                                               
                                        <td align="left">
                                            ตำแหน่ง <text font="" style="color:#FF0000">*</text>
                                            <select class="form-control" name="position_id" required="" autofocus="">
                                                <?php foreach ($position as $key => $data) { ?>
                                                    <?php if ($emp['position_id'] == $data['position_id']) { ?>
                                                        <option selected="selected" value="<?php echo $data['position_id']; ?>"> <?php echo $data['position_name']; ?> </option>
                                                    <?php }else{ ?>
                                                        <option value="<?php echo $data['position_id']; ?>"> <?php echo $data['position_name']; ?> </option>
                                                    <?php } ?>
                                                <?php } ?>
                                            </select>
                                        </td> 
                                        <td align="left">
                                            ชื่อเข้าใช้งานระบบ <text font="" style="color:#FF0000">*</text>
                                            <input class="form-control numberonly" type="text" name="user" placeholder="กรอกชื่อเขาใช้งาน" required="" value="<?php echo $emp['us']; ?>">
                                        </td>

                                        <td align="left">
                                            รหัสผ่าน <text font="" style="color:#FF0000">*</text>
                                            <input class="form-control numberonly" type="text" name="passwd" placeholder="กรอกรหัสผ่าน" required="" value="<?php echo $emp['passwd']; ?>">
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