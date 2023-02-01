<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sala
 * 
 * @property int $id_salas
 * @property int $Numero
 * @property int $Piso
 * @property int $Bloco
 * @property int $Vagas
 * 
 * @property Collection|Alocacao[] $alocacaos
 *
 * @package App\Models
 */
class Sala extends Model
{
	protected $table = 'salas';
	protected $primaryKey = 'id_salas';
	public $timestamps = false;

	protected $casts = [
		'Numero' => 'int',
		'Piso' => 'int',
		'Bloco' => 'int',
		'Vagas' => 'int'
	];

	protected $fillable = [
		'Numero',
		'Piso',
		'Bloco',
		'Vagas'
	];

	public function alocacaos()
	{
		return $this->belongsToMany(Alocacao::class, 'alocacao_has_salas', 'Salas_id_salas', 'Alocacao_id_alocacao');
	}
}
