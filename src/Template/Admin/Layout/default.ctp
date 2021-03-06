<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Administration | Joe Rushton</title>
    <?php echo $this->Html->meta('icon', 'favicon2.ico'); ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('minified/bootstrap.min.css') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Orbitron') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=PT+Sans') ?>
    <?= $this->Html->css('admin.css') ?>

    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
    <script>
      tinymce.init({
        selector: '#tinymce',
        theme: 'modern',
        width: 600,
        height: 300,
        plugins: [
          'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
          'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
          'save table contextmenu directionality emoticons template paste textcolor codesample'
        ],
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons | codesample'
      });
    </script>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><?=$this->Html->link('<i class="fa fa-star-half-o" aria-hidden="true"></i> Joemla Beta v0.4', ['controller' => 'pages', 'action' => 'display', 'admin_dashboard'], ['escape' => false]); ?></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><?= $this->Html->link('Visit Site', ['prefix' => false, 'controller' => 'pages', 'action' => 'display', 'homepage'], ['target' => '_blank']); ?></li>
                <?php if ($user) : ?> 
                    <li><?= $this->Html->link('Logout (' . $user['username'] . ')', ['controller' => 'users', 'action' => 'logout']); ?></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
