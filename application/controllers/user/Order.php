<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends My_User
{

    public $index = 'user/order/index';
    public $redirect = 'user/order';

    public function __construct(){
        parent::__construct();

        $this->load->model('user/M_Order');       
    }   
    
    public function index()
    {

        $site = $this->site;
        $order = $this->M_Order->read($site);

        $data = array(
            'site' => $site,
            'order' =>  $order,
            'midtrans' => true,
        );
        
        $this->load->view($this->index, $data);
    }

}
