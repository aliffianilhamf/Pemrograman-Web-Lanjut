<?php 
namespace App\Controllers;


class Employees extends BaseController
{
    public $data_emp = array();
    function __construct()
    {
        $config = new \Config\Employees();
        $this->data_emps = $config->data;
    }

    function index($limit = 10, $dept = null)
    {
        $data_emps = $this->data_emps;

        if($dept != null){
            $data_emps = array_filter($data_emps, function($emp) use ($dept){
                return (strtoupper($emp['department']) == strtoupper($dept));
            });
        }

        $data['data'] = array_slice($data_emps, 0, $limit);
        return view('data_employees', $data);
    }

    function tambah_pegawai()
    {
        $data['postdata'] = $this->request->getVar();
        return view('add_employee', $data);
    }
}