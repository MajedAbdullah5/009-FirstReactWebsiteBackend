<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FooterTableModel extends Model
{
           public $table =  'footer_table';
           public $primaryKey ='id';
           public $incrementing = true;
           public $keyType ='int';
           public $timestamps ='false';
}
