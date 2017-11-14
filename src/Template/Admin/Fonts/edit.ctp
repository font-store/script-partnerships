<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Font $font
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
      
        <li><?= $this->Html->link(__('List Fonts'), ['action' => 'index']) ?></li>
          </ul>
</nav>
<div class="fonts form large-9 medium-8 columns content">
    <?= $this->Form->create($font) ?>
    <fieldset>
        <legend><?= __('Edit Font') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
