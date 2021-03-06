<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-enquiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="John Manoil">
    <title>Ivan Manoil</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="wrapper">
    <?
    require_once ('blocks/header.php')
    ?>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 left_side_bar">
                    <?
                    require_once ('blocks/nav.php')
                    ?>
                    <div class="contact_bar container-fluid">
                        <ul class="row">
                            <div class="social_bar_head">Контакты</div>
                            <li class="col-sm-12 contact_tel">
                                <div class="icon_tel col-xs-2"><i class="icon-phone"></i></div>
                                <div class="col-xs-10"><a href="tel:+37379868007" class="contact_bar_li">+37379868007</a></div>
                            </li>
                            <li class="col-sm-12 contact_mail">
                                <div class="icon_mail col-xs-2"><i class="icon-mail"></i></div>
                                <div class="col-xs-10"><a href="mailto:ionmnl@gmail.com" class="contact_bar_li">ionmnl@gmail.com</a></div>
                            </li>
                            <li class="col-sm-12 contact_skype">
                                <div class="icon_skype col-xs-2"><i class="icon-skype"></i></div>
                                <div class="col-xs-10"><a href="skype:ionmnl" class="contact_bar_li">ionmnl</a></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-9 my_works">
                    <div class="row">
                        <div class="section_header col-sm-12">
                            <h2 class="h2">Мои работы</h2>
                        </div>
                        <ul class="col-sm-12">
                            <li class="portfolio_items col-sm-6">
                                <div class="about_item">
                                    <div class="caption">
                                        <div class="caption_content"><span>Metaform</span></div>
                                    </div><img src="../img/avatar.png" class="project_cover">
                                </div>
                                <div class="project_name"><a href="http://metaform.me">www.metaform.me</a></div>
                                <p class="about_project">Short info</p>
                            </li>
                            <li class="portfolio_items col-sm-6">
                                <div class="about_item">
                                    <div class="caption">
                                        <div class="caption_content"><span>Metaform</span></div>
                                    </div><img src="../img/avatar.png" class="project_cover">
                                </div>
                                <div class="project_name"><a href="http://metaform.me">www.metaform.me</a></div>
                                <p class="about_project">About project</p>
                            </li>
                            <li data-toggle="modal" data-target="#IDmodal_1" class="portfolio_items col-sm-6">
                                <div class="add_item">
                                    <div class="add_item_box"><img src="../img/pl.png">
                                        <div>Добавить проект</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
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
                    <form method="POST" action="" name="add_project" id="add_project_form"><span>Название проекта</span>
                        <input type="text" name="project_name" class="input_theme"><span>Картинка проекта</span>
                        <div class="row upload_form">
                            <input type="text" class="selected-files col-xs-7">
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
require_once('blocks/footer.php')
?>
<!--javascript-->
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script>window.jQuery || document.write('<script src="../back/js/vendor/jquery-1.11.2.min.js">')</script>
<script src="js/core.js"></script>
</body>
</html>