<?php
require_once 'conexaoMysql.php';
class AnimalModel
{
    protected $id;
    protected $nome;
    protected $metas_id;

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
}