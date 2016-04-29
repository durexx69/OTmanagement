

<div class="row">
    <div class="col-lg-12">                           
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard fa-fw"></i><a href="<?php echo site_url('dashboard/index') ?>">Dashboard</a></li>
            <li><i class="fa fa-file-text"></i> รายละเอียด </li>
        </ol>
    </div>
</div>
<div class="ln_solid"></div>

<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>รายละเอียด</h2>

                <div class="clearfix"></div>
            </div>
            <div class="x_content">

                <div class="x_content">

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <table class="table table-striped responsive-utilities jambo_table bulk_action">
                                    <thead>
                                        <tr class="headings">
                                            <th class="column-title">ลำดับที่</th>
                                            <th class="column-title"> ชื่อ - สกุล </th>
                                            <th class="column-title"> ประจำเดือน </th>
                                            <th class="column-title no-link last" align="center"><span class="nobr"> จัดการ </span></th>
                                        </tr>
                                    </thead>

                                    <tbody>  
                                        <?php foreach ($detail as $key => $value) { ?>
                                        <tr class="odd pointer">                                
                                            <td align="">
                                                <?php echo $key + 1; ?>
                                            </td>
                                            <td>
                                                <?php echo $value['emp_fname']." ". $value['emp_lname']; ?>
                                            </td>
                                            <td>
                                                <?php echo change_date($value['monthly']); ?>
                                            </td> 
                                            <td><a href="<?php echo site_url('report/issue_ot/' . $value['overtime_id'])  ?>" class="btn btn-success btn-xs">รายงานสรุปประจำเดือน</a>                                                              </td>
                                            </td>
                                        </tr>                                        
                                        <?php } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                </form>               

            </div>
        </div>
    </div>
</div>

</div>
