<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="projects form large-9 medium-8 columns content">
    <?= $this->Form->create($project) ?>
    <fieldset>
        <legend><?= __('Add Project') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('full_description', ['id' => 'tinymce']);
            echo $this->Form->input('url');
            echo $this->Form->input('is_active');
        ?>
    </fieldset>
    <fieldset>
        <legend><?= __('Categories') ?></legend>
        <?php
            echo $this->Form->select('categories._ids', $categories, array('multiple' => 'checkbox'));
        ?>
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
