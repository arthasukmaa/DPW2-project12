<?php  

namespace App\Models;

use App\models\Traits\Attributes\ProdukAttributes;
use App\models\Traits\Relations\ProdukRelationship;



class Produk extends  Model {

  use ProdukAttributes, ProdukRelationship;

  protected $table = "produk";

  protected $casts = [
    'created_at' => 'datetime',
    'berat' => 'decimal:2',
  ];

}