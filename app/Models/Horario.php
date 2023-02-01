<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Horario
 * 
 * @property int $id_horario
 * @property int $Dia
 * @property string $Turno
 * @property int $Horario
 * 
 * @property Collection|Alocacao[] $alocacaos
 *
 * @package App\Models
 */
class Horario extends Model
{
	protected $table = 'horario';
	protected $primaryKey = 'id_horario';
	public $timestamps = false;

	protected $casts = [
		'Dia' => 'int',
		'Horario' => 'int'
	];

	protected $fillable = [
		'Dia',
		'Turno',
		'Horario'
	];

	public function alocacaos()
	{
		return $this->belongsToMany(Alocacao::class, 'alocacao_has_horario', 'Horario_id_horario', 'Alocacao_id_alocacao')
					->withPivot('Alocacao_Salas_id_salas');
	}
}
