<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
     protected $guarded = array('id');
     public static $rules = array(
      'name' => 'required',
      'gender' => 'required',
      'hobby' => 'required',
      'introduction' => 'required',
      );
      
      public function profilehistories()
      {
        // profilehistoryテーブルを全て取得
        return $this->hasmany('App\Profilehistory');
      }
}
