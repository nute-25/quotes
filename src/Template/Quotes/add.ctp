<?php //file : src/Templates/Quotes/add.ctp ?>

<!-- Form est un helper comme Htlm-->
<?= $this->Form->create($new) ?>
    <h1>Ajouter une citation</h1>
    <?= $this->Form->control('content') ?>
    <?= $this->Form->control('author') ?>
    <?= $this->Form->button('Ajouter') ?>
<?= $this->Form->end() ?>