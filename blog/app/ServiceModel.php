<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
      public $table =  'services_table';
      public $primaryKey ='id';
      public $incrementing = true;
      public $keyType ='int';
      public $timestamps ='false';
}
