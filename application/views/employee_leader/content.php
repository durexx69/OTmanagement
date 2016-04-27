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
                                <th class="column-title" colspan="12"> ข้อมูลผู้ใต้บังคับบัญชา </th> 
                            </tr>
                            <tr class="headings">
                                <th class="column-title" rowspan="2">ลำดับ</th>                                            
                                <th class="column-title" rowspan="2"> ชื่อ - สกุล </th>
                                <th class="column-title" rowspan="2"> เบอร์โทร </th>                                            
                                <th class="column-title" rowspan="2"> แผนก </th>
                            </tr>                            
                        </thead>
                        <tbody> 

                            <?php foreach ($empleader as $key => $value) { ?>
                                <tr class="odd pointer">
                                    <td align="center"><?php echo $key + 1; ?></td>                                
                                    <td align="center"><?php echo $value['emp_fname']. "  " . $value['emp_lname']; ?></td>
                                    <td align="center"><?php echo $value['tel']; ?> </td>
                                    <td ><?php echo $value['dep_name'];  ?></td>                                                                                                                                               
                                </tr>
                            <?php } ?>
                        </tbody>
                        <table class="table table-bordered">
                        </table>
                        <div class="ln_solid"></div>
                </form>
                <!-- Modal -->
            </div>
        </div>
    </div>
</div>