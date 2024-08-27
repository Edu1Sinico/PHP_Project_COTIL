<?php

namespace Sisfin\Controllers;

use Sisfin\Controller;
use Sisfin\Models\Fornecedor;
use Sisfin\Models\FornecedorService;
use Sisfin\Models\FornecedorValidator;
use Mpdf\Mpdf;
use Sisfin\Util\EnviaEmail;

// Os métodos precisam ser iguais a classe ClienteController
class FornecedorController  extends Controller
{
    private FornecedorService $fornecedorRepository;

    public $erros=array();
    public function __construct()
    {
        $this->fornecedorRepository = new FornecedorService();
    }

    public function getAll(): array
    {
        return $this->fornecedorRepository->getAll();
    }

    public function getById(int $id): array
    {
        return $this->fornecedorRepository->getById($id);
    }

    public function index(): void
    {
        $this->render('fornecedor/index', ['fornecedores' => $this->getAll()]);
    }

    // ---------------- Métodos de Controlador com o Banco de dados ---------------- //

    // Método de listagem
    public function findByFornecedorId()
    {
        $id = $_GET["id"];
        $this->render('fornecedor/index', ['fornecedores' =>  $this->getById($id)]);
    }

    // Método de inserção
    public function insertFornecedor()
    {
        $validator = new FornecedorValidator();

        $id = isset($_GET['id']) ? filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) : null;
        $tipoFornecedor = isset($_GET['tipoFornecedor']) ? $_GET['tipoFornecedor'] : null;
        $nome = isset($_GET['nome']) ? $_GET['nome'] : null;
        $cpfCnpj = isset($_GET['cpfCnpj']) ? $_GET['cpfCnpj'] : null;
        $email = isset($_GET['email']) ? $_GET['email'] : null;
        $razaoSocial = isset($_GET['razaoSocial']) ? $_GET['razaoSocial'] : null;
        $rua = isset($_GET['rua']) ? $_GET['rua'] : null;
        $numero = isset($_GET['numero']) ? $_GET['numero'] : null;
        $bairro = isset($_GET['bairro']) ? $_GET['bairro'] : null;
        $cidade = isset($_GET['cidade']) ? $_GET['cidade'] : null;
        $complemento = isset($_GET['complemento']) ? $_GET['complemento'] : null;
        $cep = isset($_GET['cep']) ? $_GET['cep'] : null;
        $telefone = isset($_GET['telefone']) ? $_GET['telefone'] : null;
        $celular = isset($_GET['celular']) ? $_GET['celular'] : null;

        $fornecedor = new Fornecedor();
        $fornecedor->setId($id);
        $fornecedor->setTipoFornecedor($tipoFornecedor);
        $fornecedor->setNome($nome);
        $fornecedor->setCpfCnpj($cpfCnpj);
        $fornecedor->setEmail($email);
        $fornecedor->setRazaoSocial($razaoSocial);
        $fornecedor->setRua($rua);
        $fornecedor->setNumero($numero);
        $fornecedor->setBairro($bairro);
        $fornecedor->setCidade($cidade);
        $fornecedor->setComplemento($complemento);
        $fornecedor->setCep($cep);
        $fornecedor->setTelefone($telefone);
        $fornecedor->setCelular($celular);

        if (!$validator->Validate($fornecedor)) {
            $this->render('fornecedor/index', ['fornecedores' => $this->getAll()], $fornecedor, ['errors' => $validator->getErrors()]);
            die;
        }

        // Se os dados foram validados, salvar o fornecedor
        $this->fornecedorRepository->save($fornecedor);

        // Enviar email de confirmação
        $url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]";
        $escaped_url = htmlspecialchars($url, ENT_QUOTES, 'UTF-8');
        $corpoEmail = "Olá <b>" . $fornecedor->getNome() . "</b>, seu cadastro de fornecedor no SisFin foi criado com sucesso.";
        $corpoEmail .= "<br>Clique <a href=$escaped_url>aqui</a> para começar a explorar o sistema!";
        $email = new EnviaEmail();
        $email->setDestino($fornecedor->getEmail());
        $email->setAssunto('Cadastro de fornecedor no SisFin');
        $email->setCorpo($corpoEmail);
        try {
            $email->Envia();
        } catch (\Exception $e) {
            echo "Falha ao enviar email de criação do cadastro!";
            die;
        }

        header("Location: /fornecedor");
    }

    // Método de atualização
    public function editFornecedor()
    {
        $id = isset($_GET['id']) ? filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT) : null;
        $dados = $this->fornecedorRepository->getById($id);

        if (count($dados) > 0) {
            $fornecedor = new Fornecedor();
            $fornecedor->setId($id);
            $fornecedor->setTipoFornecedor($dados[0]["tipoFornecedor"]);
            $fornecedor->setNome($dados[0]["nome"]);
            $fornecedor->setCpfCnpj($dados[0]["cpfCnpj"]);
            $fornecedor->setEmail($dados[0]["email"]);
            $fornecedor->setRazaoSocial($dados[0]["razaoSocial"]);
            $fornecedor->setRua($dados[0]["rua"]);
            $fornecedor->setNumero($dados[0]["numero"]);
            $fornecedor->setBairro($dados[0]["bairro"]);
            $fornecedor->setCidade($dados[0]["cidade"]);
            $fornecedor->setComplemento($dados[0]["complemento"]);
            $fornecedor->setCep($dados[0]["cep"]);
            $fornecedor->setTelefone($dados[0]["telefone"]);
            $fornecedor->setCelular($dados[0]["celular"]);

            $this->render('fornecedor/index', ['fornecedores' => $this->getAll()], $fornecedor, ['errors' => null]);
        } else {
            header("Location: /fornecedor");
        }
    }


    // Método de exclusão
    public function deleteFornecedor()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : null;
        $this->fornecedorRepository->delete($id);
    }
}
