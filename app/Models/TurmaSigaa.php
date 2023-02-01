<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TurmaSigaa
 * 
 * @property int $id_turma_sigaa
 * @property string|null $Codigo
 * @property string|null $Turma
 * @property string|null $Codigo_horario
 * @property string|null $Prioridade
 * @property int|null $Bloco
 * @property int|null $Sala
 *
 * @package App\Models
 */
class TurmaSigaa extends Model
{
	protected $connection="mysql_2";
	protected $table = 'turma_sigaa';
	protected $primaryKey = 'id_turma_sigaa';
	public $timestamps = false;

	protected $casts = [
		'Bloco' => 'int',
		'Sala' => 'int'
	];

	protected $fillable = [
		'Codigo',
		'Turma',
		'Codigo_horario',
		'Prioridade',
		'Bloco',
		'Sala'
	];
}
