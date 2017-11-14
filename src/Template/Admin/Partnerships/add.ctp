<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Partnership $partnership
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Grants'), ['controller' => 'Grants', 'action' => 'index']) ?></li>
      
    </ul>
</nav>
<div class="partnerships form content-wrapper">
    <?= $this->Form->create($partnership) ?>
    <fieldset>
        <legend><?= __('Add Partnership') ?></legend>
		<div class="form-row" style="flex-wrap: wrap">
			<div class="form-col fullRow">
				<?= $this->Form->control('font_id', ['options' => $fonts, 'empty' => true]); ?>
			</div>
			<div class="form-col fullRow">
				<?= $this->Form->control('title'); ?>
			</div>
			<div class="form-col fullRow">
				<?= $this->Form->control('code'); ?>
			</div>
			<div class="form-col fullRow">
				<?= $this->Form->control('grants_need'); ?>
			</div>
			<div class="form-col fullRow">
				<?= $this->Form->control('granted_counts'); ?>
			</div>
			<div class="form-col fullRow">
				<?= $this->Form->control('finished'); ?>
			</div>
			

		</div>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
