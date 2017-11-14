<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grant $grant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grant'), ['action' => 'edit', $grant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grant'), ['action' => 'delete', $grant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Partnerships'), ['controller' => 'Partnerships', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Partnership'), ['controller' => 'Partnerships', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Pays'), ['controller' => 'Pays', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pay'), ['controller' => 'Pays', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="grants view large-9 medium-8 columns content">
    <h3><?= h($grant->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $grant->has('client') ? $this->Html->link($grant->client->name, ['controller' => 'Clients', 'action' => 'view', $grant->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Partnership') ?></th>
            <td><?= $grant->has('partnership') ? $this->Html->link($grant->partnership->title, ['controller' => 'Partnerships', 'action' => 'view', $grant->partnership->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pay') ?></th>
            <td><?= $grant->has('pay') ? $this->Html->link($grant->pay->title, ['controller' => 'Pays', 'action' => 'view', $grant->pay->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Receipt') ?></th>
            <td><?= h($grant->receipt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($grant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($grant->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Granted') ?></th>
            <td><?= h($grant->granted) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Note') ?></h4>
        <?= $this->Text->autoParagraph(h($grant->note)); ?>
    </div>
</div>
