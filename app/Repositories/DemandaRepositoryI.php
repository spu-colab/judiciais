<?php

namespace App\Repositories;

use App\User;
use Modules\Auth\Entities\DivisaoOrganograma;

use Illuminate\Database\Eloquent\Model;

interface DemandaRepositoryI {

    public function listarIdsDemandasDistribuidasPara(Model $assignable) : array;

    public function listarDistribuidasParaUsuario(User $user) : array;

    public function listarDistribuidasParaDivisaoOrganograma(DivisaoOrganograma $divisaoOrganograma) : array;


}

?>