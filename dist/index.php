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
                    <div class="container-fluid contact_bar">
                        <div class="row">
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
                    </div>
                </div>
                <div class="box col-sm-9">
                    <div class="row">
                        <div class="section_header col-sm-12">
                            <h2 class="h2">Основная информация</h2>
                        </div>
                        <div class="col-sm-12">
                            <div class="profile_img_box col-sm-4"><img src="img/me2.jpg" alt="profile" class="profile_img"></div>
                            <div class="about_me col-sm-8">
                                <ul class="about_me_ul">
                                    <li class="li"><strong> Меня зовут :</strong> Ivan Manoil.</li>
                                    <li class="li"><strong>Мой возраст :</strong> 23 лет.</li>
                                    <li class="li"><strong>Мой город :<strong> Chisinau, MD.</li>
                                    <li class="li"><strong>Моя специализация :</strong> FRONTEND разработчик.</li>
                                </ul>
                                <ul class="skill_list"><strong>Ключевые навыки:</strong>
                                    <li class="skill">html</li>
                                    <li class="skill">css</li>
                                    <li class="skill">javascrip</li>
                                    <li class="skill">gulp</li>
                                    <li class="skill">git</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box col-sm-9">
                    <div class="row">
                        <div class="section_header col-sm-12">
                            <h2 class="h2">Опыт работы</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 inside_box">
                            <div class="col-sm-2 icon_work"><i class="icon-briefcase"></i></div>
                            <div class="col-sm-10">
                                <p class="p"><b>"ИП Боровицкий" - Продавец дисков</b></p>
                                <p class="p">Сентябрь 2005 - Август 2008</p>
                            </div>
                        </div>
                        <div class="col-sm-12 inside_box">
                            <div class="col-sm-2 icon_work"><i class="icon-briefcase"></i></div>
                            <div class="col-sm-10">
                                <p class="p"><b>"ООО Системы безопастности" - Системный администратор</b></p>
                                <p class="p">Июнь 2008 - Июль 2010</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box col-sm-9">
                    <div class="row">
                        <div class="section_header col-sm-12">
                            <h2 class="h2">Образование</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 inside_box">
                            <div class="col-sm-2 icon_studies"><i class="icon-graduation-cap"></i></div>
                            <div class="col-sm-10">
                                <p class="p">Незаконченное высшее. СПБГУ ИТМО</p>
                                <p class="p thin">Октябрь 2012 - по настоящее время</p>
                            </div>
                        </div>
                        <div class="col-sm-12 inside_box">
                            <div class="col-sm-2 icon_studies"><i class="icon-doc-text"></i></div>
                            <div class="col-sm-10">
                                <p class="p">Курсы Loftschool.ru</p>
                                <p class="p thin">Ноябрь 2014 - по настоящее время</p>
                            </div>
                        </div>
                    </div>
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