<!DOCTYPE html>
<html lang="en">
    <head>
        <?php //include '../segment/meta.php'; ?>
        <?php $this->load->view('segment/meta'); ?>
        <title> Overtime Record Management System </title>
        <?php $this->load->view('segment/css_import'); ?>
    </head>
    <body class="nav-md">
        <div class="container body">

            <div class="main_container">

                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">

                        <?php $this->load->view('segment/menu'); ?>
                        <!-- /menu footer buttons -->
                        <?php $this->load->view('segment/menu_footer'); ?>
                        <!-- /menu footer buttons -->
                    </div>
                </div>
                <?php $this->load->view('segment/top_navigation'); ?>
                <div class="right_col" role="main">
                    <div class="">

                        <?php $this->load->view('managedata_overtime/content'); ?>

                        <?php $this->load->view('segment/footer_content'); ?>
                        <!-- /footer content -->
                        <!-- /page content -->
                    </div>
                </div>
            </div>
        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <?php $this->load->view('segment/js_import'); ?>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script>
                    $(window).load(function () {


            });
        </script>
    </body>
</html>
