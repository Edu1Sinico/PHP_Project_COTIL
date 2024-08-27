<?php

namespace Sisfin\Controllers;

use Exception;
use Sisfin\Controller;
use Sisfin\Models\ClienteService;
use Sisfin\Models\Cliente;
use Sisfin\Models\ClienteValidator;
use Mpdf\Mpdf;
use Sisfin\Util\EnviaEmail;

class ClienteController  extends Controller
{
    public $erros=array();
    private ClienteService $clienteRepository;

    public function __construct()
    {
        $this->clienteRepository = new ClienteService();
    }

    public function getAll(): array
    {
        return $this->clienteRepository->getAll();
    }

    public function getById($id):array{
         $result = $this->clienteRepository->getById($id);
        return $result;
    }

    public function index(): void
    {
        $this->render('cliente/index', ['clientes' => $this->getAll()]);
    }

    public function findByClienteId(){
        $id = $_GET["id"];
        $this->render('cliente/index', ['clientes' =>  $this->getById($id)]);
    }

    public function insertCliente()
    {
        $validator = new ClienteValidator();

        $id = isset($_GET['id']) ? filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT): null;
        $nome = isset($_GET['nome']) ? $_GET['nome'] : null;
        $email = isset($_GET['email']) ?  $_GET['email'] : null;
        $tipoPessoa = isset($_GET['tipopessoa']) ? $_GET['tipopessoa'] : null;


        $cliente = new Cliente();
        $cliente->setId($id);
        $cliente->setTipoPessoa($tipoPessoa);
        $cliente->setNome($nome);
        $cliente->setEmail($email);

        if(!$validator->Validate($cliente)) {
             $this->render('cliente/index', ['clientes'=>$this->getAll()], $cliente, ['errors' =>  $validator->getErrors()]);
             die;
        }

        //se chegar aqui é porque os dados foram validados
        $this->clienteRepository->save($cliente);

        $url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]";
        $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
        $corpoEmail = "Olá <b>".$cliente->getNome()."</b>, sua conta no SisFin foi criada com sucesso";
        $corpoEmail .= "<br>Clique <a href=$escaped_url>aqui</a> para começar a explorar o sistema!";
        $email = new EnviaEmail();
        $email->setDestino($cliente->getEmail());
        $email->setAssunto('Conta criada no SisFin');
        $email->setCorpo($corpoEmail);
        try{
            $email->Envia();
        }catch(Exception $e)
        {
            echo "Falha ao enviar email de criação da conta!";
            die;
        }

        header("Location: /cliente");
    }
    public function editCliente()
    {
        $id = isset($_GET['id']) ? filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT): null;
        $dados = $this->clienteRepository->getById($id);

        if(count($dados)>0) {
            $cliente = new Cliente();
            $cliente->setId($id);
            $cliente->setTipoPessoa($dados[0]["tipopessoa"]);
            $cliente->setNome($dados[0]["nome"]);
            $cliente->setEmail($dados[0]["email"]);
            $this->render('cliente/index', ['clientes'=>$this->getAll()], $cliente, ['errors' =>  null]);
        }else{
            header("Location: /cliente");
        }

    }
    public function deleteCliente()
    {
        $id = isset($_GET['id'])?$_GET['id']:null;
        $this->clienteRepository->delete($id);
    }

    // public function relatorioCliente()
    // {
    //     $html="";
    //     $mpdf = new \Mpdf\Mpdf([
    //         'mode' => 'utf-8',
    //         'format' => [190, 236],
    //         'orientation' => 'P'
    //     ]);

    //     $html = "<H1>Relatório de Clientes</H1>";
    //     $html .= "<table border='1'>";
    //     foreach ($this->getAll() as $cliente) {
    //         $html .= "<tr>";
    //         $html .= "<td>".$cliente['nome']."</td><td>".$cliente['email']."</td>";
    //         $html .= "</tr>";
    //     }
    //     $html .= "</table>";
    //     $mpdf->WriteHTML($html);
    //     $mpdf->Output("RelatorioClientes.pdf","D");
    //     return;
    // }
}