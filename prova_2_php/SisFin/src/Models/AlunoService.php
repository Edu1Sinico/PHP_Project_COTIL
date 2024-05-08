<?php

namespace Sisfin\Models;

class AlunoService
{
    private $_alunoRepository;

    /**
     * @param $_alunoRepository
     */
    // public function __construct()
    // {
    //     $this->_alunoRepository = array();
    //     $arquivo = __DIR__.'/../AppData/alunos.dat';

    //     $file = fopen($arquivo, "r");
    //     while (($line = fgets($file)) !== false) {
    //         $reg = explode(";", $line);
    //         array_push($this->_alunoRepository, new Aluno($reg[0], $reg[2], $reg[1]));
    //     }
    // }

    public function __construct(){
        $this->_alunoRepository = array();
        $this->save(new Aluno(null,'201113','TDSMN4', 'Andrey Enrico Dalosto'));
        $this->save(new Aluno(null,201102,'TDSMN4', 'Bruna Isabelli Mendes de Souza'));
        $this->save(new Aluno(null,201024,'TDSMN4', 'Bruno Oliveira Francischetti'));
        $this->save(new Aluno(null,201117,'TDSMN4', 'Daniel de Sousa Ferreira'));
        $this->save(new Aluno(null,201021,'TDSMN4', 'Eduardo Busolin da Silva'));
        return $this;
    }

    public function save(Aluno $aluno): void
    {
        //se for igual a null significa que é Create
        if ($aluno->getId() == null)
        {
            //busca o ultimo ID
            $alu = (end($this->_alunoRepository));
            if($alu) {
                if ($alu->getId() == null)
                    $id = 0;
                else
                    $id = $alu->getId();
            }else{
                $id=0;
            }
            $this->_alunoRepository[] = $aluno;
        }
        else {
            //senão é Update
            for($i = 0; $i < count($this->_alunoRepository); $i++) {
                if($this->_alunoRepository[$i]->getId()==$aluno->getId()){
                    $this->_alunoRepository[$i] = $aluno;
                }
            }

        }
    }

    public function getAll(): array{
        return $this->_alunoRepository;
    }

}