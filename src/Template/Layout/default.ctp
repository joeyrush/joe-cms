<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?php echo $this->element('favicon'); ?>

    <?= $this->fetch('meta') ?>

    <?= $this->Html->css('site.min.css') ?>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <?= $this->element('analytics'); ?>

    <?= $this->Html->script('https://code.jquery.com/jquery-2.2.4.min.js', ['integrity' => 'sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=', 'crossorigin' => 'anonymous']) ?>
</head>
<body class="font-sans bg-white">
    <a name="top"></a>
    <?php echo $this->element('loader'); ?>
    <?= $this->Flash->render() ?>

    <?= $this->fetch('content') ?>

    <?php echo $this->element('site_footer'); ?>

    <?php echo $this->Html->script('site.min.js') ?>
</body>
</html>
