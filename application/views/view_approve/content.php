<div class="row">
    <div class="col-lg-12">                           
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard fa-fw"></i><a href="<?php echo site_url('dashboard/index') ?>">Dashboard</a></li>
            <li><i class="fa fa-file-text"></i> รายการอนุมัติ</li>
        </ol>
    </div>
</div>
<div class="ln_solid"></div>

<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>รายการ [อนุมัติ]</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="column-title" colspan="12"> ข้อมูลโอที [ทั่วไป] </th> 
                            </tr>
                            <tr class="headings">
                                <th class="column-title" rowspan="2">ลำดับ</th>
                                <th class="column-title" rowspan="2">สถานะ</th>
                                <th class="column-title" rowspan="2"> ว/ด/ป </th>
                                <th class="column-title" colspan="2"> เวลาทำงาน </th>
                                <th class="column-title" rowspan="2"> งานที่ทำ/สถานที่ไป </th>
                                <th class="column-title"> ล่วงเวลาปกติ </th>
                                <th class="column-title"> ทำงานวันหยุด </th>
                                <th class="column-title"> ล่วงเวลาวันหยุด </th>
                                <th class="column-title" rowspan="2"> เบี้ยเลี้ยง </th>
                                <th class="column-title" rowspan="2"> สถานะ </th>
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
                                <td class="a-center ">1</td>
                                <td align="center">H </td>
                                <td align="center">2 ก.ค. 58</td>
                                <td align="center">08:00 </td>
                                <td align="center">22:00</td>
                                <td >ติดตั้ง Royter/KCS เพลินจิต</td>
                                <td align="center">8:00</td>
                                <td align="center">5:00</td>
                                <td align="center"> </td>
                                <td align="center"> </td>
                                <td> <a class="btn btn-success btn-xs"><i class="fa fa-check"></i> อนุมัติ </a> </td>                                                </tr>

                            <tr class="odd pointer">
                                <td class="a-center ">2</td>
                                <td align="center"> </td>
                                <td align="center">2 ก.ค. 58</td>
                                <td align="center">08:00 </td>
                                <td align="center">22:00</td>
                                <td >ติดตั้ง Royter/KCS เพลินจิต</td>
                                <td align="center">8:00</td>
                                <td align="center">5:00</td>
                                <td align="center"> </td>
                                <td align="center"> </td>
                                <td> <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-close"></i> ไม่อนุมัติ </button> </td>
                            </tr>
                            <tr class="odd pointer">
                                <td class="a-center ">3</td>
                                <td align="center"> </td>
                                <td align="center">2 ก.ค. 58</td>
                                <td align="center">08:00</td>
                                <td align="center">22:00</td>
                                <td >ติดตั้ง Royter/KCS เพลินจิต</td>
                                <td align="center">8:00</td>
                                <td align="center">5:00</td>
                                <td align="center"> </td>
                                <td align="center"> </td>
                                <td> <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i> แก้ไข </button> </td>
                            </tr>
                        </tbody>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="column-title" colspan="12"> ข้อมูลโอที [StandBy] </th> 
                                </tr>
                                <tr class="headings">
                                    <th class="column-title" rowspan="2">ลำดับ</th>
                                    <th class="column-title" rowspan="2">สถานะ</th>
                                    <th class="column-title" rowspan="2"> ว/ด/ป </th>
                                    <th class="column-title" rowspan="2"> งานที่ทำ/สถานที่ไป </th>
                                    <th class="column-title" rowspan="2"> StandBy </th>
                                    <th class="column-title" rowspan="2"> เบี้ยเลี้ยง </th>
                                    <th class="column-title" rowspan="2"> จัดการ </th>
                                </tr>
                            </thead>
                            <tr class="odd pointer">
                                <td class="a-center ">1</td>
                                <td align="center"> </td>
                                <td align="center">2 ก.ค. 58</td>
                                <td >ติดตั้ง Royter/KCS เพลินจิต</td>
                                <td></td>
                                <td align="center"> </td>
                                <td> <a href="Edit_OT.php" class="btn btn-dark btn-xs"><i class="fa fa-history"></i> รออนุมัติ </a> </td>                                                        </tr>
                        </table>
                </form>
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                                <p>เหตุผลในการยกเลิก : รายการนี้ไม่สามารถเบิก โอ.ที. ได้</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="edit" role="dialog">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                                <p>เหตุผล : รายการนี้ลงเวลาไม่ถูกต้อง กรุณาแก้ไข</p>
                            </div>
                            <div class="modal-footer">
                                <a href="Edit_OT.php" class="btn btn-info"><i class="fa fa-edit"></i> แก้ไข </a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>