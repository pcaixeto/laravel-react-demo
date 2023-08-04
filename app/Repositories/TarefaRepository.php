<?php

namespace App\Repositories;

use App\Models\Tarefa;

class TarefaRepository
{
    public function create(array $data)
    {
        return Tarefa::create($data);
    }

    public function findAll()
    {
        return Tarefa::all();
    }

    public function findById($id)
    {
        return Tarefa::find($id);
    }

    public function update($id, array $data)
    {
        $Tarefa = $this->findById($id);

        if ($Tarefa) {
            $Tarefa->update($data);
            return $Tarefa;
        }

        return null;
    }

    public function delete($id)
    {
        $Tarefa = $this->findById($id);

        if ($Tarefa) {
            $Tarefa->delete();
            return true;
        }

        return false;
    }
}
