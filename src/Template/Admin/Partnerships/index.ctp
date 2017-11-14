<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partnership[]|\Cake\Collection\CollectionInterface $partnerships
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>

        <li><?= $this->Html->link(__('New Grant'), ['controller' => 'Grants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="partnerships index large-9 medium-8 columns content">
    <h3><?= __('Partnerships') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('font_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grants_need') ?></th>
                <th scope="col"><?= $this->Paginator->sort('granted_counts') ?></th>
                <th scope="col"><?= $this->Paginator->sort('finished') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($partnerships as $partnership): ?>
            <tr>
                <td><?= $this->Number->format($partnership->id) ?></td>
                <td><?= $partnership->has('font') ? $this->Html->link($partnership->font->name, ['controller' => 'Fonts', 'action' => 'view', $partnership->font->id]) : '' ?></td>
                <td><?= h($partnership->title) ?></td>
                <td><?= h($partnership->code) ?></td>
                <td><?= $this->Number->format($partnership->grants_need) ?></td>
                <td><?= $this->Number->format($partnership->granted_counts) ?></td>
                <td><?= h($partnership->finished == false? __('Continues'):__('Completed')) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $partnership->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $partnership->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $partnership->id], ['confirm' => __('Are you sure you want to delete # {0}?', $partnership->id)]) ?>
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
