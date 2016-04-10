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

                <table class="table table-bordered table-hover" id="dataTables-example"> 
                    <tbody>
                    <tr>
                        <td align="left">
                            <input type="hidden" name="overtime_id" value="<?php // echo $overtime ?>"/>
                            ว/ด/ป ที่เริ่มทำ   
                            <input type="date" class="form-control" id="request_date" name="request_date" value="<?php echo date('Y-m-d'); ?>" required="" autofocus="">
                        </td>
                        <td align="left"> <br>
                            <input type="checkbox" class="flat" id="checkbox" name="checkbox">
                            ทำ OT ข้ามวัน

                        </td>
                        <td align="left" colspan="2"> 
                            ว/ด/ป ที่สิ้นสุดการทำ
                            <input type="date" class="form-control" id="end_date" name="end_date" value="<?php echo date('Y-m-d'); ?>" autofocus="" disabled="disabled">                                                                               
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
                                            <th class="column-title" rowspan="2">สถานะ</th>
                                            <th class="column-title" rowspan="2"> ว/ด/ป ที่เริ่ม </th>
                                            <th class="column-title" rowspan="2"> ว/ด/ป ที่สิ้นสุด </th>
                                            <th class="column-title" colspan="2"> เวลาทำงาน </th>
                                            <th class="column-title" rowspan="2"> งานที่ทำ/สถานที่ไป </th>
                                            <th class="column-title"> ล่วงเวลาปกติ </th>
                                            <th class="column-title"> ทำงานวันหยุด </th>
                                            <th class="column-title"> ล่วงเวลาวันหยุด </th>
                                            <th class="column-title" rowspan="2"> เบี้ยเลี้ยง </th>
                                            <th class="column-title" rowspan="2"> จัดการ </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                เวลาเข้า : 
                                            </th>
                                            <th>
                                                เวลาออก :
                                            </th>
                                            <th>
                                                1.5 เท่า : ชม.
                                            </th>
                                            <th>
                                                2 เท่า : ชม.
                                            </th>
                                            <th>
                                                3 เท่า : ชม.
                                            </th>
                                        </tr>

                                    </thead>
                                    <tbody>                        
                                        <tr class="odd pointer">
                                            <?php // foreach ($ot as $key => $value) { ?>
                                                <td class="a-center ">
                                                    <input type="checkbox" class="flat" name="table_records">
                                                </td>
                                                <td class="a-center ">
                                                    <?php // echo $key + 1; ?>
                                                </td>
                                                <td align="center">

                                                </td>
                                                <td align="center">
                                                    <?php // echo $value['start_date'] ?>
                                                </td>
                                                <td align="center">
                                                    <?php // echo $value['end_date'] ?>
                                                </td>
                                                <td align="center">
                                                    <?php // echo $value['start_time'] ?>
                                                </td>
                                                <td align="center">
                                                    <?php // echo $value['end_time'] ?>
                                                </td>
                                                <td >
                                                    <?php // echo $value['work'] . "/" . " " . $value['location_work'] ?>
                                                </td>
                                                <td align="center">

                                                </td>
                                                <td align="center">

                                                </td>
                                                <td align="center"> 

                                                </td>
                                                <td align="center">
                                                    <?php // echo $value['type_allowance'] ?>
                                                </td>
                                                <td align='center'>
                                                    <a href="<?php // echo site_url('managedata_overtime/update/' . $value['issue_id']); ?>"><i class="fa fa-pencil-square-o fa-1x" id="font-field"></i></a>
                                                    <a href="<?php // echo site_url('managedata_overtime/delete/' . $value['issue_id']); ?>" onclick="JavaScript:return(confirm('คุณต้องการลบ--<?php // echo $value['pillar_name'] . " " . "และ" . " " . $value['initial']      ?>--จริงหรือไม่'));"><i class="fa fa-trash-o fa-1x" id="font-field"></i> </a> 
                                                </td>

                                            </tr>
                                        <?php // } ?>

                                        <tr class="odd pointer">

                                            <td align="right" colspan="7"><b>ค่ารวมเวลาทั้งหมด</b></td>
                                            <td align="center">24:00</td>
                                            <td align="center"> 15:00</td>
                                            <td align="center"> </td>
                                            <td align="center"> </td>
                                            <td align="center" colspan="2"> </td>
                                        </tr>
                                </table>
                                </tbody>
<!--                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="column-title" colspan="12"> ข้อมูล [StandBy] </th> 
                                        </tr>
                                        <tr class="headings">
                                            <th rowspan="2">
                                                #
                                            </th>
                                            <th class="column-title" rowspan="2">ลำดับ</th>
                                            <th class="column-title" rowspan="2">สถานะ</th>
                                            <th class="column-title" rowspan="2"> ว/ด/ป </th>
                                            <th class="column-title" rowspan="2"> งานที่ทำ/สถานที่ไป </th>
                                            <th class="column-title" rowspan="2"> StandBy </th>
                                            <th class="column-title" rowspan="2"> เบี้ยเลี้ยง </th>
                                            <th class="column-title no-link last" align="center" rowspan="2"><span class="nobr"> จัดการ </span></th>
                                        </tr>
                                    </thead>
                                    
                                        <tr class="odd pointer">
                                            <td class="a-center ">
                                                <input type="checkbox" class="flat" name="table_records">
                                            </td>
                                            <td class="a-center ">

                                            </td>
                                            <td align="center"> 

                                            </td>
                                            <td align="center">

                                            </td>
                                            <td> 

                                            </td>
                                            <td></td>
                                            <td align='center'>
                                                <a href="<?php // echo site_url('pillar/update/' . $value['pillar_id']);      ?>"><i class="fa fa-pencil-square-o fa-1x" id="font-field"></i></a>
                                            </td>
                                            <td align='center'>
                                                <a href="<?php // echo site_url('pillar/delete/' . $value['pillar_id']);      ?>" onclick="JavaScript:return(confirm('คุณต้องการลบ--<?php // echo $value['pillar_name'] . " " . "และ" . " " . $value['initial']      ?>--จริงหรือไม่'));"><i class="fa fa-trash-o fa-1x" id="font-field"></i> </a> 
                                            </td>
                                        </tr>
                                    
                                </table>-->
<!--                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="column-title" colspan="12"> ข้อมูลโอที [ทั่วไป] </th> 
                                        </tr>
                                        <tr class="headings">
                                            <th rowspan="2">
                                                #
                                            </th>
                                            <th class="column-title" rowspan="2">ลำดับ</th>
                                            <th class="column-title" rowspan="2">สถานะ</th>
                                            <th class="column-title" rowspan="2"> ว/ด/ป </th>
                                            <th class="column-title" colspan="2"> เวลาทำงาน </th>
                                            <th class="column-title" rowspan="2"> งานที่ทำ/สถานที่ไป </th>
                                            <th class="column-title"> ล่วงเวลาปกติ </th>
                                            <th class="column-title"> ทำงานวันหยุด </th>
                                            <th class="column-title"> ล่วงเวลาวันหยุด </th>
                                            <th class="column-title" rowspan="2"> เบี้ยเลี้ยง </th>
                                            <th class="column-title" rowspan="2"> จัดการ </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                เวลาเข้า : 
                                            </th>
                                            <th>
                                                เวลาออก :
                                            </th>
                                            <th>
                                                1.5 เท่า : ชม.
                                            </th>
                                            <th>
                                                2 เท่า : ชม.
                                            </th>
                                            <th>
                                                3 เท่า : ชม.
                                            </th>
                                        </tr>

                                    </thead>
                                    <tbody>                        
                                        <tr class="odd pointer">
                                            <td class="a-center ">
                                                <input type="checkbox" class="flat" name="table_records">
                                            </td>
                                            <td class="a-center ">1</td>
                                            <td align="center"> </td>
                                            <td align="center">7 เม.ย. 58</td>
                                            <td align="center">17:00</td>
                                            <td align="center">23:00</td>
                                            <td >รับคุณกนกวิภา</td>
                                            <td align="center">7:00</td>
                                            <td align="center"></td>
                                            <td align="center"> </td>
                                            <td align="center"> ค่าอาหาร/ค่ารถ </td>
                                            <td align="center"> <a href="Edit_OT.php" class="btn btn-info btn-xs"><i class="fa fa-edit"></i> แก้ไข </a>
                                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i> ลบ </button> </td>
                                        </tr>
                                        <tr class="odd pointer">

                                            <td align="right" colspan="7"><b>ค่ารวมเวลาทั้งหมด</b></td>
                                            <td align="center">7:00</td>
                                            <td align="center"> </td>
                                            <td align="center"> </td>
                                            <td align="center" colspan="2"> </td>
                                        </tr>
                                </table>-->
                                </tbody>
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
    </div>
</div>
