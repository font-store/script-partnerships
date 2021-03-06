<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Grant $grant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Grants'), ['action' => 'index']) ?></li>
     
    </ul>
</nav>
<div class="grants form content-wrapper">
    <?= $this->Form->create($grant) ?>

    <fieldset>
        <legend>
            <?= __('Add Grant') ?>
        </legend>
        <div class="form-row" style="flex-wrap: wrap">
            <div class="form-col " >
                <?= $this->Form->control('client_id', ['options' => $clients, 'empty' => true]); ?>
            </div>
            <div class="form-col " >
              
                <?= $this->Form->control('granted', [
                        'type' => 'text',
                        'value' => Cake\I18n\Time::now()->format('Y-m-d'),
                        'placeholder' => "Select a date and time",
                        'data-ha-dp-resultformat' => "{year}-{month}-{day}",
                        'data-ha-dp-issolar' => "true" ,
                        'data-ha-datetimepicker' => '#granted',
                        'data-ha-dp-minalloweddate'=>"1/1/1390",
                        'data-ha-dp-maxalloweddate'=> "1/1/1400",
                        'data-ha-dp-disabletime' => "true",


                    ]); ?>                    
			
            </div>
            <div class="form-col full" >
                <?= $this->Form->control('partnership_id', ['options' => $partnerships, 'empty' => true]);
                ;?>
            </div>
            <div class="form-col full" >
                <?= $this->Form->control('pay_id', ['options' => $pays, 'empty' => true, 'default' => 3]);?>
            </div>
        </div>
        <div class="form-row" style="flex-wrap: wrap">
            <div class="form-col full" >
                <?= $this->Form->control('receipt');
                ;?>
            </div>

            <div class="form-col full" >
                <?= $this->Form->control('amount');
                ;?>
            </div>
        </div>
        <div class="form-row" style="flex-wrap: wrap">
            <div class="form-col full" >
                <?= $this->Form->control('note');?>
            </div>

        </div>

    </fieldset>

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>