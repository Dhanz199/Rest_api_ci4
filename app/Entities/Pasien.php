<?php

namespace App\Entities;

use CodeIgniter\Entity;

class Pasien extends Entity
{
	protected $datamap = [];
	// protected $attributes = [
    //     'namapasien' => null,
    // ];
	protected $casts   = [];
	
	// public function setTitle(string $title): self
    // {
    //     $this->attributes['namapasien'] = strtoupper($title);
    //     return $this;
    // }
}
