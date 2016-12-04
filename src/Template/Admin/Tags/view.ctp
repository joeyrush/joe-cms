<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blog Posts'), ['controller' => 'BlogPosts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog Post'), ['controller' => 'BlogPosts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tags view large-9 medium-8 columns content">
    <h3><?= h($tag->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($tag->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tag->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tag->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tag->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Active') ?></th>
            <td><?= $tag->is_active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Blog Posts') ?></h4>
        <?php if (!empty($tag->blog_posts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Body') ?></th>
                <th scope="col"><?= __('Is Active') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tag->blog_posts as $blogPosts): ?>
            <tr>
                <td><?= h($blogPosts->id) ?></td>
                <td><?= h($blogPosts->name) ?></td>
                <td><?= h($blogPosts->body) ?></td>
                <td><?= h($blogPosts->is_active) ?></td>
                <td><?= h($blogPosts->created) ?></td>
                <td><?= h($blogPosts->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'BlogPosts', 'action' => 'view', $blogPosts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'BlogPosts', 'action' => 'edit', $blogPosts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'BlogPosts', 'action' => 'delete', $blogPosts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blogPosts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
