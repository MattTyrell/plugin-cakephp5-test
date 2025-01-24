<?php
/**
 * @var \App\View\AppView $this
 */
use Cake\Core\Configure;
?>
<div class="row">
    <div class="column column-80">
        <div class="users form content">
            <?= $this->Form->create(null) ?>
            <fieldset>
                <legend><?= __d('Account', 'Login') ?></legend>
                <?php
                echo $this->Form->control('account', ['label' => __d('Account', 'Account')]);
                echo $this->Form->control('password', ['label' => __d('Account', 'Password')]);
                ?>
            </fieldset>
            <?= $this->Form->button(__d('Account', 'Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
