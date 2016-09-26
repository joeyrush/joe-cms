<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->fetch('meta') ?>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('minified/site.min.css') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css') ?>
    
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <?php echo $this->element('site_header'); ?>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <?php echo $this->element('site_footer'); ?>
    <?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js') ?>
    <?php 
        echo $this->Html->script(
            'https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js', 
            array(
                'integrity' => 'sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB',
                'crossorigin' => 'anonymous'
            )
        ); 
    ?>
    <?= $this->Html->script('minified/bootstrap.min.js') ?>
    <?= $this->Html->script('minified/site.min.js') ?>
</body>
</html>
