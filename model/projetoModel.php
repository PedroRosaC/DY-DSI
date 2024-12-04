<?php
require_once 'conexaoMysql.php';
class AnimalModel
{
    protected $id;
    protected $nome;
    protected $metas_id;
    protected $descricao;
    protected $usuario_id;
    
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
    public function getMetasId()
    {
        return $this->metas_id;
    }
    public function setMetasId($metas_id): self
    {
        $this->metas_id = $metas_id;

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
    public function getUsuarioId()
    {
        return $this->usuario_id;
    }
    public function setUsuarioId($usuario_id): self
    {
        $this->usuario_id = $usuario_id;

        return $this;
    }
}