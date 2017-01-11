<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Blog Posts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="blogPosts form large-9 medium-8 columns content">
    <?= $this->Form->create($blogPost, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Blog Post') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('body', array('id' => 'tinymce'));
            echo $this->Form->input('is_active');
        ?>
    </fieldset>
    <fieldset>
        <legend><?= __('Tags') ?></legend>
        <?php echo $this->Form->select('tags._ids', $tags, ['multiple' => 'checkbox']); ?>
    </fieldset>
    <fieldset>
        <legend><?= __('Images') ?></legend>
        <?php
            echo $this->Form->input('images.0.filename', ['type' => 'file']);
            echo $this->Form->input('images.0.filepath', ['type' => 'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>