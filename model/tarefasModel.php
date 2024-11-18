<?php
require_once 'conexaoMysql.php';
class AnimalModel
{
    protected $id;
    protected $nome;
    protected $descricao;
    protected $status;
    
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
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }
}