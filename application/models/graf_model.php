<?php

class Graf_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    //get fruts data
    public function get_data1()
    {
        $query = $this->db->query('SELECT Priezvisko, count(Priezvisko) AS pocet_jazd FROM zamestnanec JOIN pracovna_zmena ON zamestnanec.ID = pracovna_zmena.Zamestnanec_ID JOIN jazda ON pracovna_zmena.ID = jazda.Pracovna_zmena_ID GROUP BY Priezvisko');

        return $query->result();
    }

    public function get_data2()
    {
        $query = $this->db->query('SELECT Priezvisko, SUM(Pocet_KM) AS pocet_KM FROM zamestnanec JOIN pracovna_zmena ON zamestnanec.ID = pracovna_zmena.Zamestnanec_ID JOIN jazda ON pracovna_zmena.ID = jazda.Pracovna_zmena_ID GROUP BY Priezvisko');

        return $query->result();
    }

    public function get_data3()
    {
        $query = $this->db->query('SELECT ECV, SUM(jazda.Pocet_KM) AS pocet_KM FROM Auto JOIN pracovna_zmena ON Auto.ID = pracovna_zmena.Auto_ID JOIN jazda ON pracovna_zmena.ID = jazda.Pracovna_zmena_ID GROUP BY ECV');

        return $query->result();
    }

    public function get_data4()
    {
        $query = $this->db->query('SELECT Typ_zmeny, COUNT(Priezvisko) AS pocet_zamestnancov FROM detaily_zmeny JOIN pracovna_zmena ON detaily_zmeny.ID = pracovna_zmena.Detaily_zmeny_ID JOIN zamestnanec ON pracovna_zmena.Zamestnanec_ID = zamestnanec.ID GROUP BY Typ_zmeny');

        return $query->result();
    }

}

?>