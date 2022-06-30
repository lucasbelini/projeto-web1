<?php 
/*

function lerUsuario(Atleta $objAtleta) {
    $objConexao = new Conexao();
    $db = $objConexao->conecta();
    try {
        $sql = "SELECT *
                FROM Atleta
                WHERE id_usuario = " .$objAtleta->getId_Usuario(). ";";
        $res = $db->prepare($sql);
        $res->execute();
    }
    catch (PDOException $e) {
        Geral::Print_pre($e);
        Geral::Print_pre($sql);
        return false;
    }
    $obj = $res->fetch(PDO::FETCH_OBJ);
    $objAtleta = $this->preencherObjeto($obj);
    return $objAtleta;
}

function preencherObjeto($obj) {
    $objAtleta = new Atleta();

    $objAtleta->setId_Atleta($obj->id_atleta);
    $objAtleta->setDt_Nascimento($obj->dt_nascimento);
    $objAtleta->setNm_Genero($obj->nm_genero);
    $objAtleta->setNm_Tipo_Sanguineo($obj->nm_tipo_sanguineo);
    $objAtleta->setNm_Emergencia($obj->nm_emergencia);
    $objAtleta->setNr_Emergencia($obj->nr_emergencia);
    $objAtleta->setNm_Status($obj->nm_status);
    $objAtleta->setFl_Deficiencia($obj->fl_deficiencia);
    $objAtleta->setNm_Deficiencia($obj->nm_deficiencia);
    $objAtleta->setNr_Telefone($obj->nr_telefone);
    $objAtleta->setFl_dependente($obj->fl_dependente);
    $objAtleta->setId_responsavel($obj->id_responsavel);
    $objAtleta->setId_Usuario($obj->id_usuario);
    $objAtleta->setId_Assessor($obj->id_assessor);
    $objAtleta->setId_Documento($obj->id_documento);
    $objAtleta->setId_Endereco($obj->id_endereco);

    return $objAtleta;
}

*/