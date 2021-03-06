<?php

namespace App\Policies;

use App\User;
use App\Demanda;
use Illuminate\Auth\Access\HandlesAuthorization;

class DemandaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the demanda.
     *
     * @param  \App\User  $user
     * @param  \App\Demanda  $demanda
     * @return mixed
     */
    public function view(User $user, Demanda $demanda)
    {
        //
    }

    /**
     * Determine whether the user can create demandas.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        $usuario = User::with(['permissoes'])->find($user->id);
        return $usuario->permissoes()
            ->where('permissao', 'DEMANDA_DEMANDA_CADASTRAR')->first();
    }

    /**
     * Determine whether the user can update the demanda.
     *
     * @param  \App\User  $user
     * @param  \App\Demanda  $demanda
     * @return mixed
     */
    public function update(User $user, Demanda $demanda)
    {
        $usuario = User::with(['permissoes'])->find($user->id);
        return $usuario->permissoes()
            ->where('permissao', 'DEMANDA_DEMANDA_CADASTRAR')
            ->orWhere('permissao', 'DEMANDA_DEMANDA_ALTERAR_RESUMO_GERENCIAL')
            ->first();
    }

    public function cancelar(User $user, Demanda $demanda) {
        $usuario = User::with(['permissoes'])->find($user->id);
        return $usuario->permissoes()
            ->where('permissao', 'DEMANDA_DEMANDA_CADASTRAR')
            ->first();
    }

    public function aguardarAssinatura(User $user, Demanda $demanda) {
        $usuario = User::with(['permissoes'])->find($user->id);
        return $usuario->permissoes()
            ->where('permissao', 'DEMANDA_DEMANDA_CADASTRAR')
            ->first();
    }

    public function aguardarAR(User $user, Demanda $demanda) {
        $usuario = User::with(['permissoes'])->find($user->id);
        return $usuario->permissoes()
            ->where('permissao', 'DEMANDA_DEMANDA_CADASTRAR')
            ->first();
    }
    
    public function resolver(User $user, Demanda $demanda) {
        $usuario = User::with(['permissoes'])->find($user->id);
        return $usuario->permissoes()
            ->where('permissao', 'DEMANDA_DEMANDA_CADASTRAR')
            ->first();
    }

    /**
     * Determine whether the user can delete the demanda.
     *
     * @param  \App\User  $user
     * @param  \App\Demanda  $demanda
     * @return mixed
     */
    public function delete(User $user, Demanda $demanda)
    {
        return false;
    }

    /**
     * Determine whether the user can restore the demanda.
     *
     * @param  \App\User  $user
     * @param  \App\Demanda  $demanda
     * @return mixed
     */
    public function restore(User $user, Demanda $demanda)
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the demanda.
     *
     * @param  \App\User  $user
     * @param  \App\Demanda  $demanda
     * @return mixed
     */
    public function forceDelete(User $user, Demanda $demanda)
    {
        return false;
    }
}
