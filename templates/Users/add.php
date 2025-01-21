<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('account');
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('is_default_password');
                    echo $this->Form->control('is_admin');
                    echo $this->Form->control('role');
                    echo $this->Form->control('organisation_id');
                    echo $this->Form->control('company_id');
                    echo $this->Form->control('password_reset_token');
                    echo $this->Form->control('token_expired_at', ['empty' => true]);
                    echo $this->Form->control('created_by');
                    echo $this->Form->control('modified_by');
                    echo $this->Form->control('deleted', ['empty' => true]);
                    echo $this->Form->control('deleted_by');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
