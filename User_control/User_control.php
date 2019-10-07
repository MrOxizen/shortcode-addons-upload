<?php

namespace SHORTCODE_ADDONS_UPLOAD\User_control;

if (!defined('ABSPATH')) {
    exit;
}

use SHORTCODE_ADDONS\Core\Elements_Frontend;

class User_control extends Elements_Frontend {

    var $UserNote = "";

    public function hooks() {
        $this->admin_elements_frontend_loader();
    }

    public function USer_Save() {
        if (!empty($_REQUEST['_wpnonce'])) {
            $nonce = $_REQUEST['_wpnonce'];
        }
        if (!empty($_POST['users-submit']) && $_POST['users-submit'] == 'Save') {
            if (!wp_verify_nonce($nonce, 'oxi-addons-nonce')) {
                die('You do not have sufficient permissions to access this page.');
            } else {
                if (current_user_can('manage_options')) {
                    $data = sanitize_text_field($_POST['oxi-addons-user-data']);
                    update_option('oxilab-user-elements-control', $data);
                    $alldata = explode("{|}", sanitize_text_field($_POST['oxi-addons-user-data']));
                    foreach ($alldata as $value) {
                        if ($value != '') {
                            $peruserdata = (!empty($_POST['parmanent-' . $value]) ? sanitize_text_field($_POST['parmanent-' . $value]) : '');
                            update_option($value, $peruserdata);
                        }
                    }
                } else {
                    $this->UserNote = 'ace';
                }
            }
        }
    }

    public function User() {
        $this->USer_Save();
        $jquery = '';
        ?>
        <form method="post" id="oxi-addons-form-submits">
            <div class="oxi-addons-tabs-content-tabs" id="oxi-addons-tabs-id-1">

                <?php
                $userstore = get_option('oxilab-user-elements-control');
                $userstore = explode('{|}', $userstore);
                foreach ($userstore as $value) {
                    if ($value != '') {
                        ?>
                        <div class="oxi-addons-col-6" id="<?php echo $value; ?>">
                            <div class="oxi-addons-content-div">
                                <div class="oxi-head col-sm-12">
                                    <?php echo str_replace('-', ' ', str_replace('oxi-user-data-', '', $value)); ?>
                                    <a href="#" class="oxi-user-control"><?php echo $this->font_awesome_render('fas fa-trash'); ?></a>
                                </div>
                                <div class="col-sm-12">
                                    <div class="list-group col-sm-12 mb-2" id="<?php echo $value; ?>-sortable">
                                        <?php
                                        $eachuser = get_option($value);
                                        if ($eachuser != '') {
                                            $serialize = explode('{|}', $eachuser);
                                            foreach ($serialize as $serial) {
                                                echo '<div class="list-group-item list-group-item-action" id="' . $serial . '">';
                                                echo '' . $this->admin_name_validation($serial) . '';
                                                echo '<a href="#" class="btn btn-outline-danger btn-sm float-right">' . $this->font_awesome_render('fas fa-trash') . '</a>';
                                                echo '</div>';
                                            }
                                        }
                                        ?>
                                    </div>
                                    <div class="form-group row">       
                                        <div class="col-sm-8">
                                            <input type="text "class="form-control" id="<?php echo $value; ?>-elements" value="" placeholder="Add new Category">
                                        </div>
                                        <div class="col-sm-4">
                                            <button type="button" id="<?php echo $value; ?>-btn" class="btn btn-info">Save</button>
                                        </div>
                                    </div>
                                    <input type="hidden"  id="parmanent-<?php echo $value; ?>" name="parmanent-<?php echo $value; ?>" value="<?php echo $eachuser; ?>">
                                </div>                                               
                            </div>
                        </div>
                        <?php
                        $jquery .= '$("#' . $value . '-sortable").sortable({
                                        axis: "y",
                                        opacity: 0.7,
                                        update: function (event, ui) {
                                            var list_sortable = $(this).sortable("toArray").join("{|}");
                                            $("#parmanent-' . $value . '").val(list_sortable);
                                        }
                                    });
                                    $("#' . $value . '-btn").on("click", function () {
                                        var data = $("#' . $value . '-elements").val().split(" ").join("-");
                                        if (data === "") {
                                            var file = "<strong>Empty </strong> Elements not Accepted";
                                            alert(file);
                                            return false;
                                        } else {
                                            $("#' . $value . '-sortable").append(\'<div class="list-group-item list-group-item-action" id="\' + data + \'">\' + data.split(\'-\').join(\' \') + \'<a href="#" class="btn btn-outline-danger btn-sm float-right">' . $this->font_awesome_render('fas fa-trash') . '</a> </div>\');
                                            $("#' . $value . '-elements").val("");
                                            $("#' . $value . '-sortable").sortable();
                                            $("#' . $value . '-sortable").on("sortupdate", function () {
                                                var list_sortable = $(this).sortable("toArray").join("{|}");
                                                $("#parmanent-' . $value . '").val(list_sortable);
                                            });
                                            $("#' . $value . '-sortable").trigger("sortupdate");
                                            var file = "<strong>New </strong> elements will works after saved Data";
                                            alert(file);
                                        }
                                    });
                                    $("#' . $value . '-sortable a").live("click", function () {
                                        r = confirm("Delete this Elements?");
                                        if (r) {
                                            $(this).parent().remove();
                                            $("#' . $value . '-sortable").sortable();
                                            $("#' . $value . '-sortable").on("sortupdate", function () {
                                                var list_sortable = $(this).sortable("toArray").join("{|}");
                                                $("#parmanent-' . $value . '").val(list_sortable);
                                            });
                                            $("#' . $value . '-sortable").trigger(\'sortupdate\');
                                        }
                                    });';
                    }
                }

                $jquery .= '$(".custom-file-input").on("change", function () {
                                var fileName = $(this).val().split("\\\").pop();
                                $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                            });
                            $(\'#oxi-addons-tabs-id-1\').sortable({
                              axis: \'y\',
                              opacity: 0.7,
                                update: function (event, ui) {
                                    var list_sortable = $(this).sortable(\'toArray\').join(\'{|}\');
                                    $("#oxi-addons-user-data").val(list_sortable);
                                }
                            });
                            $(\'#oxi-addons-new-user-btn\').on(\'click\', function () {
                                var data = $(\'#oxi-addons-new-user\').val().split(\' \').join(\'-\');
                                if (data === \'\') {
                                    var file = "<strong>Empty </strong> user name not Accepted";
                                    alert(file);
                                    return false;
                                } else {
                                    $("#oxi-addons-tabs-id-1").append(\'<div class="oxi-addons-col-6" id="oxi-user-data-\' + data + \'"> <div class="oxi-addons-content-div">  <div class="oxi-head">\' + data.split(\'-\').join(\' \') + \' <a href="#" class="oxi-user-control">' . $this->font_awesome_render('fas fa-trash') . '</a></div><div class="oxi-addons-content-div-body"></div>  </div></div>\');
                                    $(\'#oxi-addons-new-user\').val("");
                                    $(\'#oxi-addons-tabs-id-1\').sortable();
                                    $(\'#oxi-addons-tabs-id-1\').on(\'sortupdate\', function () {
                                        var list_sortable = $(this).sortable(\'toArray\').join(\'{|}\');
                                        $("#oxi-addons-user-data").val(list_sortable);
                                    });
                                    $(\'#oxi-addons-tabs-id-1\').trigger(\'sortupdate\');
                                    var file = "<strong>New </strong> users will works after saved Data";
                                    alert(file);
                                }
                            });
                            $(\'.oxi-addons-content-div .oxi-head a\').live(\'click\', function () {
                                r = confirm(\'Delete this Users?\');
                                if (r) {
                                    $(this).parent().parent().parent().remove();
                                    $(\'#oxi-addons-tabs-id-1\').sortable();
                                    $(\'#oxi-addons-tabs-id-1\').on(\'sortupdate\', function () {
                                        var list_sortable = $(this).sortable(\'toArray\').join(\'{|}\');
                                        $("#oxi-addons-user-data").val(list_sortable);

                                    });
                                    $(\'#oxi-addons-tabs-id-1\').trigger(\'sortupdate\');
                                    return false;
                                }
                            });';
                ?>

                <style>
                    .oxi-addons-content-div{
                        display: flex;
                        flex-wrap:  wrap;
                    }
                    .oxi-addons-content-div .oxi-head {
                        justify-content: space-between;
                    }
                    a.oxi-user-control{
                        background: #ff6138;
                        color: white !important;
                        width: 24px;
                        height: 24px;
                        font-size: 12px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        border-radius: 2px;
                        line-height: 24px;
                        position: absolute;
                        transform: translateY(-50%);
                        top: 50%;
                        right: 10px;
                    }
                </style>
            </div>
            <div class="oxi-addons-setting-save">
                <div class="oxi-addons-col-6" style="display: flex; align-items: center;">
                    <div class="oxi-addons-col-6 addons-dtm-laptop-lock" style="padding-right: 0px;">
                        <input type="text " class="form-control" style="padding-right: 4px; padding-left: 4px;" id="oxi-addons-new-user" value="" placeholder="Add new Users">
                    </div>
                    <div class="oxi-addons-col-6 addons-dtm-laptop-lock text-left" style="padding-left:10px">
                        <button type="button" id="oxi-addons-new-user-btn" class="btn btn-info" style="margin-top: 0px;">Save</button>
                    </div>
                </div>
                <button type="button" class="btn btn-danger" id="oxi-addons-setting-reload">Reset</button>
                <input type="hidden"  id="oxi-addons-user-data" name="oxi-addons-user-data" value="<?php echo get_option('oxilab-user-elements-control'); ?>">
                <input type="submit" class="btn btn-primary" name="users-submit" value="Save">
                <?php wp_nonce_field("oxi-addons-nonce") ?>
            </div>
        </form>
        <?php
        wp_add_inline_script('shortcode-addons-vendor', 'jQuery.noConflict();(function ($) {setTimeout(function () {' . $jquery . '}, 1000);})(jQuery);');
    }

    public function CustomUpload() {
        if (!empty($_REQUEST['_wpnonce'])) {
            $nonce = $_REQUEST['_wpnonce'];
        }
        if (!empty($_POST['data-upload']) && $_POST['data-upload'] == 'Save') {
            if (!wp_verify_nonce($nonce, 'oxi-addons-upload-nonce')) {
                die('You do not have sufficient permissions to access this page.');
            } else {
                $valid = sanitize_text_field($_POST['validationServer02']);
                if ($valid == 'OXILAB') {
                    $current_user = wp_get_current_user();
                    if ($_FILES["validuploaddata"]["name"]) {
                        $filename = $_FILES["validuploaddata"]["name"];
                        $source = $_FILES["validuploaddata"]["tmp_name"];
                        $type = $_FILES["validuploaddata"]["type"];
                        $name = explode(".", $filename);
                        date_default_timezone_set('Asia/Dhaka');
                        $backupfilename = $name[0] . '(((1))' . $current_user->display_name . '(((1))' . $current_user->ID . '(((1))' . date('l--jS--F--Y--h-i-s--A') . '.zip';
                        $accepted_types = array('application/zip', 'application/x-zip-compressed', 'multipart/x-zip', 'application/x-compressed');
                        foreach ($accepted_types as $mime_type) {
                            if ($mime_type == $type) {
                                $okay = true;
                                break;
                            }
                        }
                        $continue = strtolower($name[1]) == 'zip' ? true : false;
                        if (!$continue) {
                            $message = "The file you are trying to upload is not a .zip file. Please try again.";
                        }
                        $zip = new \ZipArchive();
                        if ($zip->open($source)) {
                            $zip->extractTo(SA_ADDONS_UPLOAD_PATH);
                            $zip->close();
                        }

                        $destination_path = glob(get_home_path() . 'Shortcode-Addons/Elements/')[0];
                        $fileconpress = glob(get_home_path() . 'Shortcode-Addons/Elements/')[0] . $filename;
                        if (file_exists($fileconpress)) {
                            unlink($fileconpress);
                        }
                        move_uploaded_file($source, $fileconpress);
                        $backupconpress = glob(get_home_path() . 'Shortcode-Addons/Backup/')[0] . $backupfilename;
                        copy($fileconpress, $backupconpress);

                        echo '<div class="oxi-addons-import-requirement oxi-addons-import-requirement-successfully">
                                <div class="oxi-addons-import-requirement-data">
                                    <div class="oxi-addons-import-requirement-icon">
                                        <i class="fas fa-check-circle oxi-icons"></i>
                                    </div>
                                    <div class="oxi-addons-import-requirement-text">
                                        <div class="oxi-addons-import-requirement-heading">
                                           ' . $this->admin_name_validation($name[0]) . ' install successfully 😃 😃
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }
                } else {
                    $this->UserNote = 'ace';
                }
            }
        }
        $upload = get_home_path();
        $upload_dir = $upload . 'Shortcode-Addons';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777);
        }
        $upload_dir = $upload . 'Shortcode-Addons/Elements';
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777);
        }
        $backup_dir = $upload . 'Shortcode-Addons/Backup';
        if (!is_dir($backup_dir)) {
            mkdir($backup_dir, 0777);
        }
    }

    public function Custom_File() {
        $this->CustomUpload();
        ?>
        <div class="oxi-addons-import-layouts">
            <h1>Elements Upload</h1>
        </div>

        <form class="dropdown-menu p-4 mr-auto" method="post" id="oxi-addons-form" enctype="multipart/form-data">
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="validuploaddata">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleDropdownFormPassword2">Password</label>
                <input type="password" class="form-control is-valid" id="validationServer02"  name="validationServer02" placeholder="MD5 HASH" required>
            </div>
            <?php wp_nonce_field("oxi-addons-upload-nonce") ?>
            <input type="submit" class="btn btn-primary" name="data-upload" value="Save">
        </form>

        <style>
            #oxi-addons-form.dropdown-menu {
                position: absolute;
                display: inline-block;
                left: 50%;
                transform: translateX(-50%) translateY(30%);
            }

            .oxi-addons-content-div .oxi-head{
                cursor: move !important;
                float: none !important;
            }
            .form-group .form-control{
                height: calc(2.25rem + 2px);
                padding: .375rem .75rem;
                line-height: 1.5;
            }
            .oxi-addons-setting-save .form-row .btn{
                margin-top: 0px;
            }
            .oxi-addons-setting-save .custom-file{
                text-align: left;
            }
            .oxi-addons-content-div .oxi-head,
            .list-group.col-sm-12 .list-group-item{
                position: relative;
                cursor:  move;
            }
            .oxi-addons-content-div-body  .form-group.row{
                margin-left: 0;
            }

        </style>
        <script type="text/javascript">
            jQuery(".custom-file-input").on("change", function () {
                var fileName = jQuery(this).val().split("\\").pop();
                jQuery(this).siblings(".custom-file-label").addClass("selected").html(fileName);
            });
        </script>
        <?php
    }

    public function Front() {
        $raay = [
            'users' => 'Users',
            'history' => 'History',
            'upload' => 'Upload'
        ];
        echo '<div class="d-flex justify-content-center flex-wrap-reverse col-sm-12">';
        foreach ($raay as $key => $value) {
            $link = admin_url('admin.php?page=shortcode-addons&oxitype=user_control&type=' . $key . '');
            ?>
            <div class="oxi-addons-shortcode-import">
                <a class="addons-pre-check" href="<?php echo $link; ?>">
                    <div class="oxi-addons-shortcode-import-top">
                        <i class="fas fa-cloud-download-alt oxi-icons"></i>
                    </div>
                    <div class="oxi-addons-shortcode-import-bottom">
                        <span><?php echo $value; ?></span>
                    </div>
                </a>

            </div>
            <?php
        }
        echo '</div>';
    }

    public function History() {
        $dirlink = get_home_path() . 'Shortcode-Addons/Backup';
        $dircontent = array_diff(scandir($dirlink), array('..', '.'));
        $historydata = array();
        $max = 0;
        foreach ($dircontent as $filename) {
            $zipcheck = strpos($filename, '.zip');
            if ($zipcheck !== FALSE && $max < 100) {
                if (filemtime($dirlink . '/' . $filename) === false) {
                    return false;
                }
                $dat = date("YmdHis", filemtime($dirlink . '/' . $filename));
                $val = explode('(((1))', $filename);
                $historydata[$dat][0] = $val[0];
                $historydata[$dat][1] = $val[1];
                $historydata[$dat][2] = str_replace(
                        array("--", "-", ".zip"), array(" ", ":", ""), $val[3]
                );
            }
            $max++;
        }
        krsort($historydata);
        echo '<table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">File Name</th>
                            <th scope="col">Modified User</th>
                            <th scope="col">Date & Time</th>
                          </tr>
                        </thead>
                        <tbody>';
        $i = 0;
        foreach ($historydata as $value) {
            echo '<tr>
                            <th scope="row">' . $i++ . '</th>
                            <td>' . $this->admin_name_validation($value[0]) . '</td>
                            <td>' . $this->admin_name_validation($value[1]) . '</td>
                            <td>' . $value[2] . '</td>
                          </tr>';
        }


        echo '     </tbody>
                      </table>';
    }

    public function rander() {
        ?>
        <div class="wrap">  
            <div class="oxi-addons-wrapper">
                <?php
                apply_filters('shortcode-addons/admin_nav_menu', false);
                ?>
                <div class="oxi-addons-row">
                    <div class="oxi-addons-style-20-spacer"></div>
                    <?php
                    if ($this->UserNote != '') {
                        ?>
                        <div class="oxi-addons-import-requirement oxi-addons-import-requirement-successfully">
                            <div class="oxi-addons-import-requirement-data">
                                <div class="oxi-addons-import-requirement-icon">
                                    <i class="fas fa-check-circle oxi-icons"></i>
                                </div>
                                <div class="oxi-addons-import-requirement-text">
                                    <div class="oxi-addons-import-requirement-heading">
                                        দূরে গিয়া মরেন 
                                    </div>
                                    <div class="oxi-addons-import-requirement-content">
                                        খাইয়া দাইয়া কোন কাম ছিল না? আজাইরা কাম বাদ দিয়া কাজের কাম করেন। User Control  এ কাজ করা লাগব না নিজের কাজ করেন 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }


                    if (!empty($_GET['type'])):
                        if ($_GET['type'] == 'history'):
                            $this->History();
                        elseif ($_GET['type'] == 'users'):
                            $this->User();
                        elseif ($_GET['type'] == 'upload'):
                            $this->Custom_File();
                        endif;
                    else:
                        $this->Front();
                    endif;
                    ?>
                </div>
            </div>
        </div>
        <?php
    }

}
