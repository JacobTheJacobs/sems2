<?php


class Sem
{
    protected $id;
    protected $sn_number;
    protected $po_number;
    protected $gprs_description;
    protected $gprs_date;
    protected $marlog_date;
    protected $scat_date;
    protected $testing_date;
    protected $testing_description;
    protected $marlog2_pass_date;
    protected $marlog2_fail_date;
    protected $marlog2_description;
    protected $usr_date;
    protected $usr_repair_date;
    protected $usr_repair_description;

    //class constructor
    public function __construct($id, $sn_number, $po_number, $gprs_description, $gprs_date, $marlog_date, $scat_date, $testing_date, $testing_description, $marlog2_pass_date, $marlog2_fail_date, $marlog2_description, $usr_date, $usr_repair_date, $usr_repair_description)
    {
        $this->id = $id;
        $this->sn_number = $sn_number;
        $this->po_number = $po_number;
        $this->gprs_description = $gprs_description;
        $this->gprs_date = $gprs_date;
        $this->marlog_date = $marlog_date;
        $this->scat_date = $scat_date;
        $this->testing_date = $testing_date;
        $this->testing_description = $testing_description;
        $this->marlog2_pass_date = $marlog2_pass_date;
        $this->marlog2_fail_date = $marlog2_fail_date;
        $this->marlog2_description = $marlog2_description;
        $this->usr_date = $usr_date;
        $this->usr_repair_date = $usr_repair_date;
        $this->usr_repair_description = $usr_repair_description;
    }


    //get methods
    public function getId()
    {
        return $this->id;
    }
    public function getSn_number()
    {
        return $this->sn_number;
    }

    public function getPo_number()
    {
        return $this->po_number;
    }

    public function getGprs_description()
    {
        return $this->gprs_description;
    }

    public function getGprs_date()
    {
        return $this->gprs_date;
    }

    public function getMarlog_date()
    {
        return $this->marlog_date;
    }

    public function getScat_date()
    {
        return $this->scat_date;
    }

    public function getTesting_date()
    {
        return $this->testing_date;
    }

    public function getTesting_description()
    {
        return $this->testing_description;
    }

    public function getMarlog2_pass_date()
    {
        return $this->marlog2_pass_date;
    }

    public function getMarlog2_fail_date()
    {
        return $this->marlog2_fail_date;
    }

    public function getMarlog2_description()
    {
        return $this->marlog2_description;
    }

    public function getUsr_date()
    {
        return $this->usr_date;
    }

    public function getUsr_repair_date()
    {
        return $this->usr_repair_date;
    }

    public function getUsr_repair_description()
    {
        return $this->usr_repair_description;
    }

    //set methods

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setSn_number($sn_number)
    {
        $this->sn_number = $sn_number;
    }

    public function setPo_number($po_number)
    {
        $this->po_number = $po_number;
    }

    public function setGprs_description($gprs_description)
    {
        $this->gprs_description = $gprs_description;
    }

    public function setGprs_date($gprs_date)
    {
        $this->gprs_date = $gprs_date;
    }

    public function setMarlog_date($marlog_date)
    {
        $this->marlog_date = $marlog_date;
    }

    public function setScat_date($scat_date)
    {
        $this->scat_date = $scat_date;
    }

    public function setTesting_date($testing_date)
    {
        $this->testing_date = $testing_date;
    }

    public function setTesting_description($testing_description)
    {
        $this->testing_description = $testing_description;
    }

    public function setMarlog2_pass_date($marlog2_pass_date)
    {
        $this->marlog2_pass_date = $marlog2_pass_date;
    }

    public function setMarlog2_fail_date($marlog2_fail_date)
    {
        $this->marlog2_fail_date = $marlog2_fail_date;
    }

    public function setMarlog2_description($marlog2_description)
    {
        $this->marlog2_description = $marlog2_description;
    }

    public function setUsr_date($usr_date)
    {
        $this->usr_date = $usr_date;
    }

    public function setUsr_repair_date($usr_repair_date)
    {
        $this->usr_repair_date = $usr_repair_date;
    }

    public function setUsr_repair_description($usr_repair_description)
    {
        $this->usr_repair_description = $usr_repair_description;
    }




    // CRUD OPERATIONS
    public function create(array $data)
    {
    }

    public function read(int $id)
    {
    }

    public function update(int $id, array $data)
    {
    }

    public function delete(int $id)
    {
    }
}
