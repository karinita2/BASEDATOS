<?php

namespace Escuelas;

use Illuminate\Database\Eloquent\Model;

class NivelEstudio extends Model
{
    //
    protected $table = "nivel_estudios";

    protected $fillable = ['nivel'];
}
