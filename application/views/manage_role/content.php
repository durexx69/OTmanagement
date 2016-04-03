<div class="row">
    <div class="col-lg-12">                           
        <ol class="breadcrumb">
            <li><i class="fa fa-dashboard fa-fw"></i><a href="<?php echo site_url('dashboard/index') ?>">Dashboard</a></li>
            <li><i class="fa fa-cogs"></i> จัดการบทบาท </li>
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
                            <h2>จัดการบทบาท</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                                <table class="table table-bordered table-hover" id="dataTables-example">    
                                    <tbody>
                                        <tr class="odd gradeA">
                                            <td align="center">
                                                รหัสพนักงาน
                                            </td>
                                            <td>
                                                <input class="form-control" type="text">
                                            </td>                                                            
                                            <td align="center">
                                                ชื่อ - สกุล
                                            </td>
                                            <td>
                                                <input class="form-control" type="text">
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td align="center">
                                                Pillar
                                            </td>
                                            <td>
                                                <select class="form-control" id="pillar1" name="pillar_id1" required="" autofocus="">
                                                    <option value=""> Pillar </option>
                                                    <option value="1">Business Development Group</option>
                                                    <option value="2">Banking Solution Pillar</option>
                                                    <option value="3">CA Division</option>
                                                    <option value="4">Enterprise Solution Pillar</option>
                                                    <option value="5">Executives</option>
                                                    <option value="6">FMIS Division</option>
                                                    <option value="7">Infrastructure Solution Pillar</option>
                                                    <option value="8">Software Solution Pillar</option></select>
                                            </td>
                                            <td align="center">
                                                กำหนดสิทธิ์
                                            </td>
                                            <td>
                                                <select class="form-control" id="pillar1" name="pillar_id1" required="" autofocus="">
                                                    <option value=""> กำหนดสิทธิ์ </option>
                                                    <option value="1"> ผู้ตรวจทาน </option>
                                                    <option value="2"> ผู้อนุมัติ </option>
                                                </select>
                                            </td>
                                        </tr>
                                    </tbody></table>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">ยืนยัน</button>
                                        <button type="submit" class="btn btn-primary">ยกเลิก</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered table-hover" id="dataTables-example">    
                <tbody><tr>
                        <td colspan="8" align="center" bgcolor="#f5f5f5" colspan="5">
                            <b> <i class="fa fa-sitemap fa-fw" id="font-field-wait"></i> สิทธิ์ผู้ตรวจทาน </b>
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
                            Pillar                                                               
                        </td>
                        <td align="center">
                            สิทธิ์                                                               
                        </td>
                    </tr>
                    <tr class="odd gradeA">
                        <td align="center">
                            <div id="count"> 1 </div>
                        </td>
                        <td>
                            1234                                   
                        </td>
                        <td>
                            นาย เอ เอ                                    
                        </td>
                        <td align='center'>
                            A                                    
                        </td>
                        <td align='center'>
                            ผู้อนุมัติ                                    
                        </td>
                    </tr>

                    <tr class="odd gradeA">
                        <td align="center">
                            <div id="count"> 2 </div>
                        </td>
                        <td>
                            5678                                    
                        </td>
                        <td>
                            นาย บี บี                                    
                        </td>
                        <td align='center'>
                            B                                    
                        </td>
                        <td align='center'>
                            ผู้ตรวจทาน                                    
                        </td>
                    </tr>

                    <tr class="odd gradeA">
                        <td align="center">
                            <div id="count"> 3 </div>
                        </td>
                        <td>
                            9123                                    
                        </td> 
                        <td>
                            นาย ซี ซี                                    
                        </td>
                        <td align='center'>
                            C                                   
                        </td>
                        <td align='center'>
                            ผู้ตรวจทาน                                    
                        </td>
                    </tr>



                </tbody></table>


        </div>
    </div>
</div>