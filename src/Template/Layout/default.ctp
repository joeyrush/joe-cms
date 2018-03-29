<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?php echo $this->Html->meta('icon', 'favicon.ico'); ?>

    <?= $this->fetch('meta') ?>
    
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Indie+Flower') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/css?family=Monda') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css') ?>
    <?= $this->Html->css('site.min.css') ?>


    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <?= $this->element('analytics'); ?>

    <?= $this->Html->script('https://code.jquery.com/jquery-2.2.4.min.js', ['integrity' => 'sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=', 'crossorigin' => 'anonymous']) ?>
</head>
<body>
    <a name="top"></a>
    <?php echo $this->element('site_header'); ?>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <?php echo $this->element('site_footer'); ?>

    <?php
        // tether is needed for bootstrap 4
        echo $this->Html->script(
            'https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js',
            array(
                'integrity' => 'sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB',
                'crossorigin' => 'anonymous'
            )
        );
    ?>
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/galleria/1.4.5/galleria.min.js'); ?>

    <?php echo $this->Html->script('site.min.js') ?>
</body>
</html>
