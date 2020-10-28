<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseTableModel extends Model
{
        public $table =  'course_table';
           public $primaryKey ='id';
           public $incrementing = true;
           public $keyType ='int';
           public $timestamps ='false';
}
