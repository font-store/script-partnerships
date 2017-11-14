<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grants'), ['controller' => 'Grants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grant'), ['controller' => 'Grants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clients view large-9 medium-8 columns content">
    <h3><?= h($client->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($client->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($client->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($client->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($client->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grant Counts') ?></th>
            <td><?= $this->Number->format($client->grant_counts) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Grants') ?></h4>
        <?php if (!empty($client->grants)): ?>
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
            <?php foreach ($client->grants as $grants): ?>
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
