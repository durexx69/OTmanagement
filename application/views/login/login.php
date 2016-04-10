<!DOCTYPE html>
<html lang="en">
    <head>
        <?php //include '../segment/meta.php'; ?>
        <?php $this->load->view('segment/meta'); ?>
        <title> Overtime Record Management System </title>
        <?php $this->load->view('segment/css_import'); ?>
    </head>
    <body style="background:#F7F7F7;">
        <div class="">
            <a class="hiddenanchor" id="toregister"></a>
            <a class="hiddenanchor" id="tologin"></a>

            <?php $this->load->view("login/content"); ?>

        </div>
        <?php $this->load->view('segment/js_import'); ?>
    </body>
</html>
