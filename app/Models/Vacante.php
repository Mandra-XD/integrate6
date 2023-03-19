<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Vacante extends Model
{
    use HasFactory;


        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'vacante';
     protected $primaryKey = 'vacanteId';
      /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'puesto',
        'lugar',
        'salario',
        'tipo_empleo',
        'turno',
        'descripcion',
        'experiencia',
        'empresa',
        'user_id',
    ];

      public function user()
    {

        return $this->belongsTo(User::class,'user_id','vacanteId');
    }

}