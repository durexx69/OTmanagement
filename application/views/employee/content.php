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
                            <br/>

                            <?php echo form_open('employee/insert'); ?>
                            <table class="table table-bordered table-hover" id="dataTables-example">    
                                <tbody>
                                    <tr class="odd gradeA">
                                        <td align="left">
                                            รหัสพนักงาน <text font="" style="color:#FF0000">*</text>
                                            <input class="form-control" placeholder="กรอกรหัสพนักงาน" name="emp_code" type="text" required="" autofocus="">  
                                        </td>

                                        <td align="left">
                                            ชื่อ <text font="" style="color:#FF0000">*</text>
                                            <input class="form-control" placeholder="กรอกชื่อภาษาไทย" name="emp_fname" type="text" required="" autofocus="">
                                        </td>
                                        <td align="left">
                                            นามสกุล <text font="" style="color:#FF0000">*</text>
                                            <input class="form-control" placeholder="กรอกนามสกุลภาษาไทย" name="emp_lname" type="text" required="" autofocus="">
                                        </td>
                                    </tr>
                                    <tr class="odd gradeA">                                        

                                    </tr>    
                                    <tr class="odd gradeA">                                                                                
                                        <td align="left">
                                            ชื่อเล่น<text font="" style="color:#FF0000">*</text>
                                            <input class="form-control" placeholder="กรอกชื่อเล่น" name="nickname" type="text" required="" autofocus="">                                        </td>
                                        <td align="left">
                                            เบอร์โทร
                                            <input class="form-control" placeholder="กรอกเบอร์โทร" name="tel" type="text" maxlength="12">
                                        </td>
                                        <td align="left">
                                            แผนก <text font="" style="color:#FF0000">*</text>
                                            <select class="form-control" name="dep_id" required="" autofocus="">
                                                <option value=""> กรุณาเลือกแผนก </option>
                                                <?php foreach ($dep as $key => $value){ ?>
                                                <option value="<?php echo $value['dep_id']; ?>"> <?php echo $value['dep_name']; ?> </option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                    </tr>

                                    <tr>
                                        
                                        <td align="left">
                                            ตำแหน่ง <text font="" style="color:#FF0000">*</text>
                                            <select class="form-control" name="position_id" required="" autofocus="">
                                                <option value=""> กรุณาเลือกตำแหน่ง </option>
                                                <?php foreach ($position as $key => $value){ ?>
                                                <option value="<?php echo $value['position_id']; ?>"> <?php echo $value['position_name']; ?> </option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td align="left">
                                            ชื่อเข้าใช้งานระบบ <text font="" style="color:#FF0000">*</text>
                                            <input class="form-control numberonly" type="text" name="user" placeholder="กรอกชื่อเขาใช้งาน" required="">
                                        </td>
                                        <td align="left">
                                            รหัสผ่าน <text font="" style="color:#FF0000">*</text>
                                            <input class="form-control numberonly" type="text" name="passwd" placeholder="กรอกรหัสผ่าน" required="">
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

                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered table-hover" id="dataTables-example">    
                <tbody><tr>
                        <td  align="center" bgcolor="#f5f5f5" colspan="10">
                            <b> <i class="fa fa-sitemap fa-fw" id="font-field-wait"></i> แสดงข้อมูล พนักงาน ทั้งหมด </b>
                        </td>
                    </tr>
                    <tr class="odd gradeA">
                        <td align="center">
                            ลำดับที่
                        </td>
                        <td align="center">
                            รหัสพนักงาน 
                        </td>                                                            
                        <td align="center">
                            ชื่อ - สกุล                                                               
                        </td>
                        <td align="center">
                            ชื่อเล่น                                                               
                        </td>
                        <td align="center">
                            แผนก                                                               
                        </td>
                        <td align="center">
                            ตำแหน่ง                                                               
                        </td>  
                        <td align="center">
                            เบอร์โทร                                                               
                        </td>
                        <td align="center" colspan="2">
                            จัดการ                                                               
                        </td>
                    </tr>
                    <?php foreach ($emp as $key => $value) { ?>
                    <tr class="odd gradeA">
                        <td align="center">
                            <?php  echo $key + 1; ?>
                        </td>
                        <td align="center">
                            <?php  echo $value['emp_code'] ?>
                        </td> 
                        <td align="center">
                            <?php  echo $value['emp_fname'] . "  " . $value['emp_lname'] ?>
                        </td>
                        <td align="center">
                            <?php  echo $value['nickname'] ?>
                        </td>
                        <td align="center">
                            <?php  echo $value['dep_name'] ?>
                        </td>
                        <td align="center">
                            <?php echo $value['position_name']; ?>
                        </td>
                        <td align="center">
                            <?php echo $value['tel']; ?>
                        </td>

                        <td align='center'>
                            <a href="<?php echo site_url('employee/update/' . $value['emp_id']); ?>"><i class="fa fa-pencil-square-o fa-1x" id="font-field"></i></a>
                        </td>
                        <td align='center'>
                            <a href="<?php echo site_url('employee/delete/' . $value['emp_id']); ?> " onclick = "JavaScript:return(confirm('คุณต้องการลบ--<?php echo $value['emp_fname']." ".$value['emp_lname']; ?>--จริงหรือไม่'));"><i class="fa fa-trash-o fa-1x" id="font-field"></i> </a> 
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>