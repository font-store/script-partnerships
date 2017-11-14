<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pay $pay
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pay'), ['action' => 'edit', $pay->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pay'), ['action' => 'delete', $pay->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pay->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Pays'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pay'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grants'), ['controller' => 'Grants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grant'), ['controller' => 'Grants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pays view large-9 medium-8 columns content">
    <h3><?= h($pay->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($pay->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pay->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Grants') ?></h4>
        <?php if (!empty($pay->grants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Client Id') ?></th>
                <th scope="col"><?= __('Partnership Id') ?></th>
                <th scope="col"><?= __('Pay Id') ?></th>
                <th scope="col"><?= __('Receipt') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Note') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pay->grants as $grants): ?>
            <tr>
                <td><?= h($grants->id) ?></td>
                <td><?= h($grants->client_id) ?></td>
                <td><?= h($grants->partnership_id) ?></td>
                <td><?= h($grants->pay_id) ?></td>
                <td><?= h($grants->receipt) ?></td>
                <td><?= h($grants->created) ?></td>
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
