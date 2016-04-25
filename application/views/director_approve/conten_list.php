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
                                <th class="column-title" rowspan="2"> ว/ด/ป และ เวลา ที่เริ่ม </th>
                                <th class="column-title" rowspan="2"> ว/ด/ป และ เวลา ที่สิ้นสุด </th>                                            
                                <th class="column-title" rowspan="2"> งานที่ทำ/สถานที่ไป </th>
                            </tr>                            
                        </thead>
                        <tbody> 
                            <?php // print_r($list); ?>
                            <?php foreach ($issue as $key => $value) { ?>
                                <tr class="odd pointer">
                                    <td align="center"><?php echo $key + 1; ?></td>                                
                                    <td align="center"><?php echo $value['start_date']; ?></td>
                                    <td align="center"><?php echo $value['end_date']; ?> </td>
                                    <td ><?php echo $value['work'] . " / " . $value['location_work']; ?></td>                                                                                                                                               
                                </tr>
                            <?php } ?>
                        </tbody>
                        <table class="table table-bordered">
                        </table>

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <a class=" btn btn-success" href="<?php echo site_url('director_approve/approve_ot/' . $issue_id); ?> " onclick = "JavaScript:return(confirm('คุณต้องการอนุมัติรายการนี้ใช่หรือไม่'));"><i  id="font-field"></i> อนุมัติ </a> 
                            <a class=" btn btn-danger " href="<?php echo site_url('director_approve/cancel_ot/' . $issue_id); ?> " onclick = "JavaScript:return(confirm('คุณต้องการลบรายการนี้จริงหรือไม่'));"><i  id="font-field"></i> ยกเลิก </a>                            

                        </div>

                </form>

                <!-- Modal -->
                <!--                <div class="modal fade" id="myModal" role="dialog">
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
                                </div>-->
                <!--                <div class="modal fade" id="edit" role="dialog">
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
                                </div>-->

            </div>
        </div>
    </div>
</div>