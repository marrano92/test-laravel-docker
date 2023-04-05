<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputsValidate extends Model {

    protected $fillable = ['user'];

    /**
     * @var string
     */
    protected $table = 'inputs_validates';
}
