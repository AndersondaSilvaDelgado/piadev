<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */
require_once('../dbutil/Conn.class.php');
/**
 * Description of OSDAO
 *
 * @author anderson
 */
class OSDAO extends Conn {
    //put your code here
    
    /** @var PDOStatement */
    private $Read;

    /** @var PDO */
    private $Conn;

    public function dados() {

        $select = "SELECT DISTINCT "
                        . " OS_ID AS \"idOS\" "
                        . " , NRO_OS AS \"nroOS\" "
                        . " , ID_LIB_OS AS \"idLibOS\" "
                        . " , ID_PROPR_AGR AS \"idProprAgr\" "
                    . " FROM "
                        . " USINAS.V_ECM_OS "
                    . " WHERE OS_ID <> 1664382 ";
        
        $this->Conn = parent::getConn();
        $this->Read = $this->Conn->prepare($select);
        $this->Read->setFetchMode(PDO::FETCH_ASSOC);
        $this->Read->execute();
        $result = $this->Read->fetchAll();

        return $result;
        
    }
    
}
