<?php
require_once 'conexaoMysql.php';
class usuarioModel
{
    protected $id;
    protected $nome;
    protected $email;
    protected $senha;
    protected $pontuacao;
    public $total;

    public function getId()
    {
        return $this->id;
    }
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function setSenha($senha): self
    {
        $this->senha = $senha;

        return $this;
    }
    public function getPontuacao()
    {
        return $this->pontuacao;
    }
    public function setPontuacao($pontuacao): self
    {
        $this->pontuacao = $pontuacao;

        return $this;
    }
    public function login($email, $senha)
    {
        $sql = 'SELECT * FROM usuario WHERE email = "' . $email . '" AND senha = "' . $senha . '"';
        $db = new ConexaoMysql();
        $db->Conectar();
        $resultList = $db->Consultar($sql);
        $total = $db->total;
        if ($total == 1) {
            foreach ($resultList as $data) {
                $this->id = $data['id'];
                $this->email = $data['email'];
            }
            @session_start();
            $_SESSION['id'] = $this->id;
            $_SESSION['login'] = $this->email;
            header('location:../home.php');
        }
        return $total;
    }
    public function save()
    {
        $con = new ConexaoMysql();
        $con->Conectar();

        if ($this->id > 0) {
            $sql = 'UPDATE usuario SET 
            `nome` = "' . $this->nome . '",
            `email` = "' . $this->email . '",
            `senha` = "' . $this->senha . '",
            `pontuacao` = 0
            WHERE (`id` = ' . $this->id . ');';
        } else {
            $sql = 'INSERT INTO usuario VALUES 
            (0,"' . $this->nome . '",
            "' . $this->email . '", 
            "' . $this->senha . '", 
            0);';
        }
        echo $sql;
        $con->Executar($sql);

        $con->Desconectar();
        return $con->total;
    }
    public function loadById($id)
    {
        $con = new ConexaoMysql();
        $con->Conectar();
        $this->id = $id;
        $sql = 'SELECT * FROM usuario WHERE id=' . $this->id . ';';
        $resultList = $con->Consultar($sql);
        foreach ($resultList as $key => $value) {
            $this->id = $value['id'];
            $this->nome = $value['nome'];
            $this->email = $value['email'];
            $this->senha = $value['senha'];
            $this->pontuacao = $value['pontuacao'];
        }
        return $this;
    }
}
