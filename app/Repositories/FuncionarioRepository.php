<?php

namespace App\Repositories;

use App\Models\Funcionario;

class FuncionarioRepository
{
    public function create(array $data)
    {
        return Funcionario::create($data);
    }

    public function findAll()
    {
        return Funcionario::all();
    }

    public function findById($id)
    {
        return Funcionario::find($id);
    }

    public function update($id, array $data)
    {
        $Funcionario = $this->findById($id);

        if ($Funcionario) {
            $Funcionario->update($data);
            return $Funcionario;
        }

        return null;
    }

    public function delete($id)
    {
        $Funcionario = $this->findById($id);

        if ($Funcionario) {
            $Funcionario->delete();
            return true;
        }

        return false;
    }
}
