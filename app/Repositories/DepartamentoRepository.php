<?php

namespace App\Repositories;

use App\Models\Departamento;

class DepartamentoRepository
{
    public function create(array $data)
    {
        return Departamento::create($data);
    }

    public function findAll()
    {
        return Departamento::all();
    }

    public function findById($id)
    {
        return Departamento::find($id);
    }

    public function update($id, array $data)
    {
        $Departamento = $this->findById($id);

        if ($Departamento) {
            $Departamento->update($data);
            return $Departamento;
        }

        return null;
    }

    public function delete($id)
    {
        $Departamento = $this->findById($id);

        if ($Departamento) {
            $Departamento->delete();
            return true;
        }

        return false;
    }
}
