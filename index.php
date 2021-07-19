<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="zh-cmn-Hans">
<!--
Project Link: https://github.com/fly3949/fly.moe
-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta name="HandheldFriendly" content="true">
    <title><?php echo($site_title) ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/minireset.css@0.0.3/minireset.min.css" integrity="sha256-rYUTtzummUpBJLuuLnVN9Hy06M9uLlZ8W8VZOyiX2WQ="
        crossorigin="anonymous">
    <link href="//cdn.jsdelivr.net/gh/liyanqwq/fly.php@0.1.2/assets/css/main.css" rel="stylesheet">
    <link href="<?php echo($site_avatar) ?>" rel="shortcut icon">
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js" integrity="sha256-9uAoNWHdszsUDhSXf/rVcWOqKPfi5/8V5R4UdbZle2A=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js" integrity="sha256-nwhzW/P9gnvWMPOm84MK8BzQRRMdi8iutxMuYsYcOgw=" crossorigin="anonymous"></script>
    <![endif]-->
    <style>
        body {
            background-image: url('<?php echo($site_bg) ?>');
        }
    </style>
</head>

<body>

    <!-- Loading hover -->
    <div class="loading">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>

    <!-- Main box -->
    <main>
        <div class="content">
            <div class="left">
                <div class="avatar">
                    <div class="avatarimg">
                        <img src="<?php echo($site_avatar) ?>">
                    </div>
                </div>
                <ul class="menu">
                    <li>
                        <a goto="#home">HOME</a>
                    </li>
                    <li>
                        <a goto="#projects">PROJECTS</a>
                    </li>
                    <li>
                        <a goto="#contact">CONTACT</a>
                    </li>
                    <li>
                        <a goto="#donate">DONATE</a>
                    </li>
                </ul>
                <div class="copyright">
                    Powered by <a href="https://fly.moe" target="_blank">Fly3949</a><br />
                    Modified by <a href="https://github.com/liyanqwq/fly.moe" target="_blank">LiYan<i class="fa fa-heart-o"></i></a><hr />
                    <?php if($site_icp): ?><a href="//beian.miit.gov.cn" target="_blank"><?php echo($site_icp) ?></a><?php endif ?>
                </div>
            </div>
            <div class="right">
                <section id="home" class="active">
                    <h1><?php echo($home_title) ?></h1>
                    <main>
                        <?php echo($home_main) ?>
                    </main>
                </section>
                <section id="projects">
                    <h1>我的一些个人项目</h1>
                    <ul class="project-list">
                        <?php if(isset($projects)): ?>
                        <?php foreach($projects as $project): ?>
                        <a href="<?php echo($project['link']) ?>" target="_blank"><li><i class="fa fa-circle"></i> <?php echo($project['name']) ?></li></a>
                        <?php endforeach ?>
                        <?php else: ?>
                        <p style="text-align:center;margin:1em 0 1em;">主人目前不想公开展示项目</p>
                        <?php endif ?>
                    </ul>
                </section>
                <section id="contact">
                    <h1>可以在这些地方找到我</h1>
                    <div class="items">
                        <?php foreach($contacts as $contact): ?>
                        <a href="<?php echo($contact['link']) ?>" target="_blank">
                            <i class="<?php echo($contact['icon']) ?>"></i>
                            <span><?php echo($contact['name']) ?></span>
                        </a>
                        <?php endforeach ?>
                    </div>
                </section>
                <section id="donate">
                    <h1>我很可爱，请给我钱！</h1>
                    <div class="donate-img-box">
                        <?php if(isset($donate_images)): ?>
                        <?php foreach($donate_images as $donate_image): ?>
                        <img src="<?php echo($donate_image) ?>">
                        <?php endforeach ?>
                        <?php endif ?>
                    </div>
                </section>
            </div>
        </div>

        <footer>
            <?php if($hitokoto): ?>
                <p id="hitokoto">Loading...</p>
            <?php endif ?>
            <div class="copyright-mobile">
                Powered by <a href="https://fly.moe" target="_blank">Fly3949</a> Modified by <a href="https://github.com/liyanqwq/fly.php" target="_blank">LiYan<i class="fa fa-heart-o"></i></a><br />
                    <?php if($site_icp): ?><a href="//beian.miit.gov.cn" target="_blank"><?php echo($site_icp) ?></a><?php endif ?>
                </div>
            </div>
        </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/gh/liyanqwq/fly.php@0.1.2/assets/js/main.js"></script>
    <script>
        <?php if($hitokoto): ?>
            getHitokoto();
        <?php endif ?>
    </script>
</body>

</html>