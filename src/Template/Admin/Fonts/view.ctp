<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Font $font
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Font'), ['action' => 'edit', $font->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Font'), ['action' => 'delete', $font->id], ['confirm' => __('Are you sure you want to delete # {0}?', $font->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fonts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Font'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Partnerships'), ['controller' => 'Partnerships', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partnership'), ['controller' => 'Partnerships', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fonts view large-9 medium-8 columns content">
    <h3><?= h($font->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($font->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($font->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Partnerships') ?></h4>
        <?php if (!empty($font->partnerships)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Font Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Enabled') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($font->partnerships as $partnerships): ?>
            <tr>
                <td><?= h($partnerships->id) ?></td>
                <td><?= h($partnerships->font_id) ?></td>
                <td><?= h($partnerships->title) ?></td>
                <td><?= h($partnerships->code) ?></td>
                <td><?= h($partnerships->enabled) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Partnerships', 'action' => 'view', $partnerships->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Partnerships', 'action' => 'edit', $partnerships->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Partnerships', 'action' => 'delete', $partnerships->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partnerships->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
