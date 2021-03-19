<?php
class Funcionarios{
    
    public $id;
    public $nome;
    public $salario;
    public $cpf;
    public $conta_bancaria;

    public function __construct($id, $description, $completed){

        $this->id = $id;
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cpf = $cpf;
        $this->conta_bancaria = $conta_bancaria;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return float
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @param float $salario
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;
    }

    /**
     * @return int
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param int $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return int
     */
    public function getContaBancaria()
    {
        return $this->conta_bancaria;
    }

    /**
     * @param int $conta_bancaria
     */
    public function setContaBancaria($conta_bancaria)
    {
        $this->conta_bancaria = $conta_bancaria;
    }


}
?>