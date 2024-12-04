<?php
require_once 'conexaoMysql.php';
class tarefaModel
{
    protected $id;
    protected $nome;
    protected $descricao;
    protected $status;
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
    public function getUsuarioId()
    {
        return $this->usuario_id;
    }
    public function setUsuarioId($usuario_id): self
    {
        $this->usuario_id = $usuario_id;

        return $this;
    }
    public function save()
    {
        $con = new ConexaoMysql();
        $con->Conectar();
        if ($this->id > 0) {
            $sql = 'UPDATE tarefas SET 
            nome = "' . $this->nome . '",
            descricao = ' . $this->descricao . ', 
            status = ' . $this->status . ',
            WHERE (id = ' . $this->id . ') and (usuario_id = ' . $this->usuario_id . ')';
        } else {
            $sql = 'INSERT INTO tarefas VALUES
            (0, 
            "' . $this->nome . '", 
            "' . $this->descricao . '", 
            0, 
            ' . $this->usuario_id . ');';
        }
        echo $sql;
        $con->Executar($sql);
        $con->Desconectar();
        return $con->total;
    }
    public function loadAllStatus0()
    {
        $con = new ConexaoMysql();
        $con->Conectar();
        $sql = 'SELECT * FROM tarefas where status= 0;';
        $resultList = $con->Consultar($sql);
        $con->Desconectar();
        return $resultList;
    }
    public function loadAllStatus1()
    {
        $con = new ConexaoMysql();
        $con->Conectar();
        $sql = 'SELECT * FROM tarefas where status= 1;';
        $resultList = $con->Consultar($sql);
        $con->Desconectar();
        return $resultList;
    }
    public function end()
    {
        $con = new ConexaoMysql();
        $con->Conectar();
        $sql = 'UPDATE tarefas 
            SET status = 1
            WHERE (id = ' . $this->id . ') and (usuario_id = ' . $this->usuario_id . ');';
        echo $sql;
        $con->Executar($sql);
        $con->Desconectar();
        return $con->total;
    }
    public function delete()
    {
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'DELETE FROM tarefas WHERE id=' . $this->id.' and usuario_id= '.$this->usuario_id.'';
        echo $sql;
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }
}
