<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fish extends Model
{
    /**
     * FISHES ATTRIBUTES
     * $this->attributes['id'] - int - contains the fishes primary key(id)
     * this->attributes['name'] - string - contains the fishes name
     * this->attributes['weight'] - float - contains the fishes weight
     * this->attributes['species'] - string - contains the fishes specie
     */
    protected $fillable = ['name', 'weight', 'species'];

    protected $table = 'fishes';

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function setName($name): void
    {
        $this->attributes['name'] = $name;
    }

    public function getWeight(): float
    {
        return $this->attributes['weight'];
    }

    public function setWeight($weight): void
    {
        $this->attributes['weight'] = $weight;
    }

    public function getSpecies(): string
    {
        return $this->attributes['species'];
    }

    public function setSpecies($species): void
    {
        $this->attributes['species'] = $species;
    }
}
