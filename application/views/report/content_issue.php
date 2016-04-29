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
                                <th class="column-title" rowspan="2"> งานที่ทำ/สถานปฎิบัติงาน </th>
                                <th class="column-title" rowspan="2"> สถานะ </th>
                            </tr>                            
                        </thead>
                        <tbody> 
                            <?php // print_r($list); ?>
                            <?php foreach ($ot as $key => $value) { ?>
                             <?php
                                $status = "";
                                if ($value['status'] == 1) {
                                    $status = " อนุมัติ ";
                                }
                                ?>
                                <tr class="odd pointer">
                                    <td align="center"><?php echo $key + 1; ?></td>                                
                                    <td align="center"><?php echo $value['start_date']; ?></td>
                                    <td align="center"><?php echo $value['end_date']; ?> </td>
                                    <td ><?php echo $value['work'] . " / " . $value['location_work']; ?></td> 
                                    <td>
                                        <?php echo $status; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <table class="table table-bordered">
                        </table>
                </form>                

                <!-- Modal -->

            </div>
        </div>
    </div>
</div>