<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class user extends DataLayer{
    public function __Construct(){
        parent::__construct("users", ["first_name", "last_name"]);      #1º PARÂMETRO = TABELA DO BANCO
                                                                        #2º PARÂMETRO = CAMPOS QUE NÃO SÃO NULOS
                                                                        #3º PARÂMETRO = CHAVE PRIMÁRIA QUE NÃO SEJA AUTO INCREMENT
                                                                        #4º PARÂMETRO = UTILIZADO SE TIVER TIME_STAMP = TRUE
    }
    public function addresses(){
        return (new Address())->find("user_id = :uid", ":uid = {$this->id}")->fetch(true);
    }
}