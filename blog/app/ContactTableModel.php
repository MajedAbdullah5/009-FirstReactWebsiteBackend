<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactTableModel extends Model
{
           public $table =  'contact_table';
           public $primaryKey ='id';
           public $incrementing = true;
           public $keyType ='int';
           public $timestamps ='false';
}
