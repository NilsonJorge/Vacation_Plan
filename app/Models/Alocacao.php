<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alocacao
 * 
 * @property int $id_alocacao
 * @property string|null $Periodo
 * @property int $Turma_id_turma
 * @property int $Salas_id_salas
 * @property int $Horario_id_horario
 * 
 * @property Horario $horario
 * @property Sala $sala
 * @property Turma $turma
 *
 * @package App\Models
 */
class Alocacao extends Model
{
	protected $table = 'alocacao';
	public $timestamps = false;
	protected $primaryKey = 'id_alocacao';
	protected $casts = [
		'Turma_id_turma' => 'int',
		'Salas_id_salas' => 'int',
		'Horario_id_horario' => 'int'
	];

	protected $fillable = [
		'Periodo'
	];

	public function horario()
	{
		return $this->belongsTo(Horario::class, 'Horario_id_horario');
	}

	public function sala()
	{
		return $this->belongsTo(Sala::class, 'Salas_id_salas');
	}

	public function turma()
	{
		return $this->belongsTo(Turma::class, 'Turma_id_turma');
	}
}
