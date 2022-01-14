<?php 

namespace App\models\Traits\Relations;
use App\Models\user;

trait ProdukRelationship {
  function seller(){
    return $this->belongsTo(User::class , 'id_user');
  }
}