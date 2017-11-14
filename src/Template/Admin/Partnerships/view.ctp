<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partnership $partnership
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Partnership'), ['action' => 'edit', $partnership->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Partnership'), ['action' => 'delete', $partnership->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partnership->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Partnerships'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partnership'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fonts'), ['controller' => 'Fonts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Font'), ['controller' => 'Fonts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grants'), ['controller' => 'Grants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grant'), ['controller' => 'Grants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="partnerships view large-9 medium-8 columns content">
    <h3><?= h($partnership->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Font') ?></th>
            <td><?= $partnership->has('font') ? $this->Html->link($partnership->font->name, ['controller' => 'Fonts', 'action' => 'view', $partnership->font->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($partnership->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($partnership->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($partnership->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grants Need') ?></th>
            <td><?= $this->Number->format($partnership->grants_need) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Granted Counts') ?></th>
            <td><?= $this->Number->format($partnership->granted_counts) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Finished') ?></th>
            <td><?= $partnership->finished ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Grants') ?></h4>
        <?php if (!empty($partnership->grants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Partnership Id') ?></th>
                <th scope="col"><?= __('Pay Id') ?></th>
                <th scope="col"><?= __('Receipt') ?></th>
                <th scope="col"><?= __('Granted') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Note') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($partnership->grants as $grants): ?>
            <tr>
                <td><?= h($grants->id) ?></td>
                <td><?= h($grants->client_id) ?></td>
                <td><?= h($grants->partnership_id) ?></td>
                <td><?= h($grants->pay_id) ?></td>
                <td><?= h($grants->receipt) ?></td>
                <td><?= h($grants->granted) ?></td>
                <td><?= h($grants->amount) ?></td>
                <td><?= h($grants->note) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Grants', 'action' => 'view', $grants->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Grants', 'action' => 'edit', $grants->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Grants', 'action' => 'delete', $grants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grants->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
