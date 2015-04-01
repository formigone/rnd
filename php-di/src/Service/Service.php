<?php

namespace App\Service;

use App\Model\Model;

class Service {
   protected $model;

   public function __construct(Model $model) {
      $this->model = $model;
   }
}