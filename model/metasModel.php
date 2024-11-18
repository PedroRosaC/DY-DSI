<?php
require_once 'conexaoMysql.php';
class AnimalModel
{
    protected $id;
    protected $nome;
    protected $status;
    protected $prioridade;
    protected $data; 

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
    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }
    public function getPrioridade()
    {
        return $this->prioridade;
    }
    public function setPrioridade($prioridade): self
    {
        $this->prioridade = $prioridade;

        return $this;
    }
    public function getData()
    {
        return $this->data;
    }
    public function setData($data): self
    {
        $this->data = $data;

        return $this;
    }
}
