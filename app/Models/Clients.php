<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Clients extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'table_person';

    protected $fillable = [
        'name',
        'birthdate',
        'genre',
        'postal_cold',
        'addres',
        'number',
        'neighborhood', 
        'complement',
        'city',
        'state',
        'id'

    ];

    public function getClients(){
        return DB::table($this->table)->get();
    }

    public function getClient(int $id){
        return DB::table($this->table)->where('id', $id)->first();
    }

    public function deleteClient(int $id){
        return DB::table($this->table)
        ->where('id', $id)
        ->delete();
    }

    public function updateClient(int $idClient, array $options = []){
        return DB::table($this->table)
        ->where('id', $idClient)
        ->update($options);
    }
}