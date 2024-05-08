<?php

namespace Sisfin\Controllers;
use Sisfin\Controller;
use Sisfin\Models\AlunoService;

class AlunoController extends Controller
{
    private AlunoService $alunoService;

    public function __construct(){
        $this->alunoService = new AlunoService();
        
    }

    public function getAllAlunos(): array
    {
        return $this->alunoService->getAll();
    }

    // public function getByTurma(){
    //     $_turma = $_GET['turma'];
    //     $alunos = array_filter($this->alunoService->getAll(), function($k) use ($_turma) {
    //          return $k->getTurma()==strtoupper($_turma);
    //     }, ARRAY_FILTER_USE_BOTH);
    //     $this->render('aluno/index', ['alunos' => $alunos]);
    //  }

     public function getAll(){
        $this->render('aluno/index', ['alunos' => $this->getAllAlunos()]);
     }
}