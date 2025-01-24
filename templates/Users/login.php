<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="row">
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create(null) ?>
            <fieldset>
                <legend><?= __d('TsUserBToB', 'Login') ?></legend>
                <?= $this->Form->control('account', ['label' => __('Account')]); ?>
                <?= $this->Form->control('password', ['label' => __('Password')]); ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
