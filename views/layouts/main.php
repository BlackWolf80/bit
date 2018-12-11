<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 20.11.18
 * Time: 16:35
 */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>

    <!--[if lt IE 9]>
    <script src="/css/libs/html5shiv/html5shiv.min.js"></script>
    <script src="/css/libs/respond/respond.min.js"></script>
    <![endif]-->

    <?php $this->head() ?>
</head>

<body class="<?=$_SESSION['selector']?>">


<?php $this->beginBody() ?>


<header>
    <nav class="navbar navbar-default navbar-static-top no-margin" role="navigation">
        <div class="navbar-brand-group">
            <a class="navbar-sidebar-toggle navbar-link" data-sidebar-toggle>
                <i class="fa fa-lg fa-fw fa-bars"></i>
            </a>
            <a class="navbar-brand hidden-xxs" href="/">
                        <span class="sc-visible">
                            BiT
                        </span>
                <span class="sc-hidden">
                            <span class="bold">BiT</span>
                            ТАУРУС
                        </span>
            </a>
        </div>
        <ul class="nav navbar-nav navbar-nav-expanded pull-right margin-md-right">
            <li class="hidden-xs">
                <form class="navbar-form">
                    <div class="navbar-search">
                        <input type="text" placeholder="Search &hellip;" class="form-control">
                        <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </li>
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
                    <i class="glyphicon glyphicon-envelope"></i>
                    <span class="badge badge-up badge-dark badge-small">3</span>
                </a>
                <ul class="dropdown-menu dropdown-messages pull-right">
                    <li class="dropdown-title bg-inverse">New Messages</li>
                    <li class="unread">
                        <a href="javascript:;" class="message">
                            <img class="message-image img-circle" src="/images/avatars/1.jpg">

                            <div class="message-body">
                                <strong>Ernest Kerry</strong><br>
                                Hello, You there?<br>
                                <small class="text-muted">8 minutes ago</small>
                            </div>
                        </a>
                    </li>
                    <li class="unread">
                        <a href="javascript:;" class="message">
                            <img class="message-image img-circle" src="/images/avatars/3.jpg">

                            <div class="message-body">
                                <strong>Don Mark</strong><br>
                                I really appreciate your &hellip;<br>
                                <small class="text-muted">21 hours</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="message">
                            <img class="message-image img-circle" src="/images/avatars/8.jpg">

                            <div class="message-body">
                                <strong>Jess Ronny</strong><br>
                                Let me know when you free<br>
                                <small class="text-muted">5 days ago</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="message">
                            <img class="message-image img-circle" src="/images/avatars/7.jpg">

                            <div class="message-body">
                                <strong>Wilton Zeph</strong><br>
                                If there is anything else &hellip;<br>
                                <small class="text-muted">06/10/2014 5:31 pm</small>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-footer">
                        <a href="javascript:;"><i class="fa fa-share"></i> See all messages</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">
                    <i class="glyphicon glyphicon-globe"></i>
                    <span class="badge badge-up badge-danger badge-small">3</span>
                </a>
                <ul class="dropdown-menu dropdown-notifications pull-right">
                    <li class="dropdown-title bg-inverse">Notifications (3)</li>
                    <li>
                        <a href="javascript:;" class="notification">
                            <div class="notification-thumb pull-left">
                                <i class="fa fa-clock-o fa-2x text-info"></i>
                            </div>
                            <div class="notification-body">
                                <strong>Call with John</strong><br>
                                <small class="text-muted">8 minutes ago</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="notification">
                            <div class="notification-thumb pull-left">
                                <i class="fa fa-life-ring fa-2x text-warning"></i>
                            </div>
                            <div class="notification-body">
                                <strong>New support ticket</strong><br>
                                <small class="text-muted">21 hours ago</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="notification">
                            <div class="notification-thumb pull-left">
                                <i class="fa fa-exclamation fa-2x text-danger"></i>
                            </div>
                            <div class="notification-body">
                                <strong>Running low on space</strong><br>
                                <small class="text-muted">3 days ago</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="notification">
                            <div class="notification-thumb pull-left">
                                <i class="fa fa-user fa-2x text-muted"></i>
                            </div>
                            <div class="notification-body">
                                New customer registered<br>
                                <small class="text-muted">06/18/2014 12:31 am</small>
                            </div>
                        </a>
                    </li>
                    <li class="dropdown-footer">
                        <a href="javascript:;"><i class="fa fa-share"></i> See all notifications</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle navbar-user" href="javascript:;">
                    <?=Html::img(Yii::$app->user->identity['photo'],['class'=>'img-circle'])?>
                    <span class="hidden-xs">
                    <?=Yii::$app->user->identity['last_name'].' '.Yii::$app->user->identity['name'];?>
                    </span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu pull-right-xs">
                    <li class="arrow"></li>
                    <li><a href="pages-profile.html">Profile</a></li>
                    <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                    <li><a href="javascript:;">Messages</a></li>
                    <li><a href="javascript:;">Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="/logout">Выход</a></li>
                </ul>
            </li>
        </ul>

    </nav>
</header>
<div class="page-wrapper">
    <aside class="sidebar sidebar-default">
        <div class="sidebar-profile">
            <?=Html::img(Yii::$app->user->identity['photo'],['class'=>'img-circle profile-image'])?>

            <div class="profile-body">
                <h4><?=Yii::$app->user->identity['last_name'].' '.Yii::$app->user->identity['name'];?></h4>

                <div class="sidebar-user-links">
                    <a class="btn btn-link btn-xs" href="pages-profile.html" data-placement="bottom" data-toggle="tooltip" data-original-title="Profile"><i class="fa fa-user"></i></a>
                    <a class="btn btn-link btn-xs" href="javascript:;"       data-placement="bottom" data-toggle="tooltip" data-original-title="Messages"><i class="fa fa-envelope"></i></a>
                    <a class="btn btn-link btn-xs" href="javascript:;"       data-placement="bottom" data-toggle="tooltip" data-original-title="Settings"><i class="fa fa-cog"></i></a>
                    <a class="btn btn-link btn-xs" href="/logout" data-placement="bottom" data-toggle="tooltip" data-original-title="Выход"><i class="fa fa-sign-out"></i></a>
                </div>
            </div>
        </div>
        <nav>
            <h5 class="sidebar-header"></h5>
            <ul class="nav nav-pills nav-stacked">

                <?=\app\components\MenuWidget::widget()?>

            </ul>
            <h5 class="sidebar-header">Закладки</h5>
            <ul class="nav nav-pills nav-stacked">
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-fw fa-circle text-danger"></i>
                        Important Tasks
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-fw fa-circle text-success"></i>
                        Support
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-fw fa-circle text-info"></i>
                        Quotes
                    </a>
                </li>
            </ul>
            <h5 class="sidebar-header">Сводка</h5>
            <ul class="sidebar-summary">
                <li>
                    <div class="mini-chart mini-chart-block">
                        <div class="chart-details">
                            <div class="chart-name">Продажи</div>
                            <div class="chart-value">261885.0 <i class="fa fa-rub"></i></div>
                        </div>
                        <div id="mini-chart-sidebar-1" class="chart pull-right"></div>
                    </div>
                </li>
                <li>
                    <div class="mini-chart mini-chart-block">
                        <div class="chart-details">
                            <div class="chart-name">Заказы</div>
                            <div class="chart-value">12491</div>
                        </div>
                        <div id="mini-chart-sidebar-2" class="chart pull-right"></div>
                    </div>
                </li>
            </ul>
        </nav>
    </aside>

    <div class="page-content">
        <div class="page-subheading page-subheading-md">
<!--            <ol class="breadcrumb">-->
<!--                <li class="active"><a href="javascript:;">Dashboard</a></li>-->
<!--            </ol>-->
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>

        </div>

        <?= Alert::widget() ?>
        <div class="container">
        <?= $content ?></div>



    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

