<?php

namespace App\Model;

use App\Db\Db;

class Model {
   protected $db;

   public function __construct(Db $db) {
      $this->db = $db;
   }
}