<?php //file : src/Templates/Quotes/index.ctp 
// echo '<pre>';
// var_dump($q, count($q));
// echo '</pre>';
?>

<ul>
    <?php foreach($q as $uneLigne) {
        // création d'un lien de redirection vers une action du même controller qui prend en paramètre un id
        echo '<li>'.$this->Html->link($uneLigne->content, ['action' => 'view', $uneLigne->id]);
        
        if(!empty($uneLigne->author))
            echo ' ('.$uneLigne->author.')';
        
        echo '</li>';
    } ?>
    
</ul>

<p>Il y a <?= $q->count() ?> citation(s)</p>
<!-- part 1 : on redirige vers un form -->
<p><?= $this->HTML->link('Ajouter une citation', ['action' => 'add']) ?></p>
