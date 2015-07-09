<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $this->fetch('title') ?></title>
        <?= $this->Html->meta('icon') ?>
        <?= $this->Html->css('app.css') ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
        <script src="js/modernizr/modernizr.js"></script>
    </head>
    <body>
        <div class="off-canvas-wrap">
            <div class="inner-wrap">
                <?= $this->Flash->render() ?>
                <?= $this->element('Menu/default') ?>
                <section role="main" id="container">
                    <div class="row">
                        <?= $this->fetch('content') ?>
                    </div>
                </section>
            </div>
        </div>
        <script src="js/jquery/jquery.min.js"></script>
        <script src="js/foundation/foundation.js"></script>
        <script src="js/app.js"></script>
    </body>
</html>
