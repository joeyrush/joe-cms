<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $blogPost->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $blogPost->id)]
            )
        ?></li>
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
            echo $this->Form->input('body');
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

        <?php echo $this->element('admin_image_thumbs', ['data' => $blogPost]); ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
