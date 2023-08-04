<?php

namespace App\Http\Controllers;

use App\Repositories\FuncionarioRepository;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    protected $repository;

    public function __construct(FuncionarioRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {
        return $this->repository->findAll();
    }

    public function store(Request $request)
    {
        return $this->repository->create($request->all());
    }

    public function show($id)
    {
        return $this->repository->findById($id);
    }

    public function update(Request $request, $id)
    {
        return $this->repository->update($id, $request->all());
    }

    public function destroy($id)
    {
        return $this->repository->delete($id);
    }
}
