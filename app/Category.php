<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = ['name', 'slug', 'description', 'parent_id'];

  /**
   * Get the index name for the model.
   *
   * @return string
  */
  public function childs()
  {
    return $this->hasMany('App\Category','parent_id','id') ;
  }
}
