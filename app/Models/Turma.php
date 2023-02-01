<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Turma
 * 
 * @property int $id_turma
 * @property string $Codigo
 * @property string $Turma
 * @property string $Codigo_horario
 * @property int $Prioridade
 * 
 * @property Collection|Alocacao[] $alocacaos
 *
 * @package App\Models
 */
class Turma extends Model
{
	protected $table = 'turma';
	protected $primaryKey = 'id_turma';
	public $timestamps = false;

	protected $casts = [
		'Prioridade' => 'int'
	];

	protected $fillable = [
		'Codigo',
		'Turma',
		'Codigo_horario',
		'Prioridade'
	];

	public function alocacaos()
	{
		return $this->hasMany(Alocacao::class, 'Turma_id_turma');
	}
}
