<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevantamentoIri extends Model
{
    protected $table = 'levantamento_iri';
    protected $fillable = ['rodovia', 'latitude','longitude'];
    use HasFactory;
}
