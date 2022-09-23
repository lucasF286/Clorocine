<?php

  class Conexao {
    public static function criar() {
        $objDb = new db();
        return $objDb->conecta_myslq();
    }
 }