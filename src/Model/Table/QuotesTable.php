<?php
// src/Model/Table/QuotesTable.php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class QuotesTable extends Table {
    
    public function initialize(array $config) {
        // demande à Cake de gérer les created et modified
        // addBehavior fait le lien avec timestamp existant déjà dans cake
        $this->addBehavior('Timestamp');
    }

    // ennonce les règles de validation pour ce type de data
    // on surchage la methode validationDefault existant déjà dans la class Table dont QuotesTable hérite
    public function validationDefault(Validator $v) {
        $v->notEmpty('content')
            ->maxLength('author', 150)
            ->allowEmpty('author');
        return $v;
    }
}