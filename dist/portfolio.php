<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-enquiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="John Manoil">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/framework/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="wrapper">
    <?
    require_once('blocks/header.php');
    ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="col-sm-3 left_side_bar">
                        <?
                        require_once('blocks/nav.php');
                        ?>
                        <div class="contact_bar container-fluid">
                            <div class="row">
                                <div class="social_bar_head">Контакты</div>
                                <div class="col-sm-12 contact_tel">
                                    <div class="row">
                                        <div class="icon_tel col-xs-2"><i class="icon-phone"></i></div>
                                        <div class="col-xs-10">
                                            <p>+37379868007</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 contact_mail">
                                    <div class="row">
                                        <div class="icon_mail col-xs-2"><i class="icon-mail"></i></div>
                                        <div class="col-xs-10">
                                            <p>ionmnl@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 contact_skype">
                                    <div class="row">
                                        <div class="icon_skype col-xs-2"><i class="icon-skype"></i></div>
                                        <div class="col-xs-10">
                                            <p>ionmnl</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-9 my_works">
                        <div class="row">
                            <div class="section_header col-sm-12"><span>Мои работы</span></div>
                            <div class="col-sm-12">
                                <div class="portfolio_items col-sm-6">
                                    <div class="about_item">
                                        <div class="caption">
                                            <div class="caption_content"><span>Metaform</span></div>
                                        </div><img src="img/avatar.png" class="project_cover">
                                    </div>
                                    <div class="project_name"><a href="http://metaform.me">www.metaform.me</a></div>
                                    <div class="about_project">Personal portfolio</div>
                                </div>
                                <div data-toggle="modal" data-target="#IDmodal_1" class="portfolio_items col-sm-6">
                                    <div class="add_item">
                                        <div class="add_item_box"><img src="img/pl.png">
                                            <div>Добавить проект</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Modal-->
    <div tabindex="-1" role="dialog" aria-labelledby="modalLabel1" aria-hidden="true" id="IDmodal_1" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-labelledby="close" class="btn-close-modal">X</button>
                    <h4 class="modal-title">Добавление проекта</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" action="add_project.php" name="add_project" id="add_project_form"><span>Название проекта</span>
                        <input type="text" name="project_name" class="input_theme"><span>Картинка проекта</span>
                        <div class="row upload_form">
                            <div class="selected-files col-xs-7"></div>
                            <div class="col-xs-5">
                                <button type="button" id="fake_upload" class="btn_default fake-upload">Select image..</button>
                            </div>
                            <input type="file" id="upload_btn" class="input_theme file-upload">
                        </div><span>URL проекта</span>
                        <input type="text" class="input_theme"><span>Описание</span>
                        <textarea></textarea>
                        <div class="modal-footer">
                            <button type="submit" class="btn_default">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--contact me-->
</div>
<?
require_once('blocks/footer.php');
?>
<!--javascript-->
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js">')</script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>