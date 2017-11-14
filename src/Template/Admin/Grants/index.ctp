<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grant[]|\Cake\Collection\CollectionInterface $grants
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grant'), ['action' => 'add']) ?></li>

    </ul>
</nav>
<div class="grants index large-9 medium-8 columns content">
    <h3><?= __('Grants') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('partnership_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pay_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('receipt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('granted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($grants as $grant): ?>
            <tr>
                <td><?= $this->Number->format($grant->id) ?></td>
                <td><?= $grant->has('client') ? $this->Html->link($grant->client->name, ['controller' => 'Clients', 'action' => 'view', $grant->client->id]) : '' ?></td>
                <td><?= $grant->has('partnership') ? $this->Html->link($grant->partnership->title, ['controller' => 'Partnerships', 'action' => 'view', $grant->partnership->id]) : '' ?></td>
                <td><?= $grant->has('pay') ? $this->Html->link($grant->pay->title, ['controller' => 'Pays', 'action' => 'view', $grant->pay->id]) : '' ?></td>
                <td><?= h($grant->receipt) ?></td>
                <td><?= h($grant->granted->i18nformat('dd MMMM yyyy', null, 'fa-IR@calendar=persian')) ?></td>
                <td><?= $this->Number->format($grant->amount) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $grant->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $grant->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $grant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grant->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
