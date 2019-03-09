<?php //file : src/Templates/Quotes/vue.ctp ?>

<h1>Citation</h1>
<p><?= $citation->content ?></p>
<p>Auteur : <?=  (!empty($citation->author)) ? $citation->author : '<span style="font-style:italic;">Anonyme</span>' ?></p>
<p>Créée le : <?= $citation->created ?></p>
<p>Modifiée : <?= $citation->modified ?></p>
<p>id #<?= $citation->id ?></p>

<p><?= $this->HTML->link('Editer', ['action' => 'edit', $citation->id]) ?></p>
<?= $this->Form->postlink('Supprimer', ['action' => 'delete', $citation->id], ['confirm' => 'Etes-vous sûr de vouloir supprimer cette citation ?']); ?>