<?php
      require_once 'conexao.php';

      
      class inserir{
        //----------nome----------
           function getName($n1){
            $this->name = $n1;
          }

          function setName(){
            return $this->name;
          }
        //--------------------------
        //----------endereco--------  

          function getEndereco($n2){
            $this->endereco = $n2;
          }

          function setEndereco(){
            return $this->endereco;
          }
        //------------contato--------

          function getContato($n3){
            $this->contato = $n3;
          }

          function setContato(){
            return $this->contato;
          }
        //----------cadastro----------

          function getCadastro($n4){
            $this->cadastro = $n4;
          }

          function setCadastro(){
            return $this->cadastro;
          }
        //----------Divida----------------

          function getDivida($n5){
            $this->divida = $n5;
          }

          function setDivida(){
            return $this->divida;
          }
        //--------------------------

          function inserirFiado(){

            $obj = new Banco();
            $sql = "INSERT INTO fiado(nome, endereco, contato, cadastro, divida) VALUES ('$this->name;', '$this->endereco', '$this->contato', '$this->cadastro', '$this->divida');";
            $result = $obj->exeQuery($sql);
            header("Location: http://localhost:8080/atividade/paginas/fiado.php");
          }
      }


    if ($_POST['verificar'] == 'Cadastrar') {
          $obj = new inserir();
          $obj->getName($_POST['nome']);
          $obj->getEndereco($_POST['endereco']);
          $obj->getContato($_POST['contato']);
          $obj->getCadastro($_POST['cadastro']);
          $obj->getDivida($_POST['divida']);
          $obj->inserirFiado();
    }else{
      header("Location: http://localhost:8080/atividade/paginas/fiado.php");
    }

