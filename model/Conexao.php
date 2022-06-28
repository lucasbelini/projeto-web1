<?php

//namespace Endgroup;

class Conexao {
  /**
  *  Metodo responsavel por conectar com o banco de dados e selecionar a tabela
  */
  
  public static function Conecta ($dba = '') {
    try {
      $db = new PDO ('mysql:host=' . _BD_HOST_ . ';dbname=' . _BD_NAME_, _BD_USER_, _BD_PASS_ );
      $db->exec("set names utf8");
    } catch (PDOException $e) {
      echo 'Erro ao conectar com o MySQL: ';
      echo '<pre>' . $e->getMessage() . '</pre>';
    }
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $db;
  }

}