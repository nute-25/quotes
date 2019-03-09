<?php
// src/Model/Entity/Quotes.php

namespace App\Model\Entity;

// équivaut à un import
use Cake\ORM\Entity;

class Quote extends Entity {
    
    // tous est accessible et modifiable sauf l'id que l'on protège
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];

}