<?php
require_once 'conexaoMysql.php';
class metaModel
{
    protected $id;
    protected $nome;
    protected $status;
    protected $prioridade;
    protected $data;
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
    public function getusuario_id()
    {
        return $this->usuario_id;
    }
    public function setusuario_id($usuario_id): self
    {
        $this->usuario_id = $usuario_id;
        return $this;
    }
    public function save()
    {
        $con = new ConexaoMysql();
        $con->Conectar();
        if ($this->id > 0) {
            $sql = 'UPDATE metas SET 
            nome = "' . $this->nome . '",
            status = ' . $this->status . ', 
            prioridade = ' . $this->prioridade . ',
            data = "' . $this->data . '"
            WHERE (id = ' . $this->id . ') and (usuario_id = ' . $this->usuario_id . ')';
        } else {
            $sql = 'INSERT INTO metas
            VALUES (0, 
            "' . $this->nome . '", 
            0,
            ' . $this->prioridade . ', 
            "' . $this->data . '", 
            ' . $this->usuario_id . ')';
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
        $sql = 'SELECT * FROM metas where status= 0 and usuario_id='.$_SESSION['id'].'';
        $resultList = $con->Consultar($sql);
        $con->Desconectar();
        return $resultList;
    }
    public function end()
    {
        $con = new ConexaoMysql();
        $con->Conectar();
            $sql = 'UPDATE metas 
            SET status = 1
            WHERE (id = ' . $this->id . ') and (usuario_id = ' . $this->usuario_id . ');';
        echo $sql;
        $con->Executar($sql);
        $con->Desconectar();
        return $con->total;
    }
    public function loadAllStatus1()
    {
        $con = new ConexaoMysql();
        $con->Conectar();
        $sql = 'SELECT * FROM metas where status= 1 and usuario_id='.$_SESSION['id'].'';
        $resultList = $con->Consultar($sql);
        $con->Desconectar();
        return $resultList;
    }
    public function delete()
    {
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'DELETE FROM metas WHERE id=' . $this->id.' and usuario_id= '.$this->usuario_id.'';
        echo $sql;
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }
}
