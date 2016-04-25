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
                                <th class="column-title" rowspan="2"> สถานะ </th>
                            </tr>                            
                        </thead>
                        <tbody> 
                            <?php // print_r($list); ?>
                            <?php foreach ($issue as $key => $value) { ?>
                            <tr class="odd pointer">
                                <td align="center"><?php  echo $key +1; ?></td>                                
                                <td align="center"><?php  echo $value['start_date']; ?></td>
                                <td align="center"><?php  echo $value['end_date']; ?> </td>
                                <td ><?php  echo $value['work']." / ". $value['location_work']; ?></td>                                                               
                                <td> <a class="btn btn-success btn-xs"><i class="fa fa-check"></i> อนุมัติ </a>
                                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-close"></i> ยกเลิก </button>
                                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#edit"><i class="fa fa-edit"></i> แก้ไข </button>
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