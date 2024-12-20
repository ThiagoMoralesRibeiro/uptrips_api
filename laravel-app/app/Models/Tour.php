<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    // Define o nome da tabela, caso a tabela não siga a convenção do plural
    protected $table = 'tour';

    // Define os campos que podem ser preenchidos em massa
    protected $fillable = [
        'name',
        'description',
        'company',
        'document',
        'maintainer_phone',
        'maintainer_email',
        'image1_path',
        'image2_path',
        'image3_path',
        'image4_path',
        'image5_path',
        'image6_path',
        'image7_path',
        'child_value',
        'adult_value',
        'destination_id',
    ];

    // Relacionamento com a tabela 'destination' (um tour pertence a um destino)
    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}

