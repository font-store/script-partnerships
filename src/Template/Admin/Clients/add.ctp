<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Client $client
*/
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">
            <?= __('Actions') ?>
        </li>
        <li>
            <?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?>
        </li>
      
    </ul>
</nav>
<div class="clients form content-wrapper">
    <?= $this->Form->create($client) ?>
    <fieldset>
        <legend>
            <?= __('Add Client') ?>
        </legend>
        <div class="form-row" style="flex-wrap: wrap">
            <div class="form-col fullRow" >
                <?= $this->Form->control('name'); ?>
            </div>
            <div class="form-col fullRow " >
                <?= $this->Form->control('email'); ?>
            </div>
            <div class="form-col fullRow" >
                <?= $this->Form->control('url'); ?>
            </div>

        </div>

    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
