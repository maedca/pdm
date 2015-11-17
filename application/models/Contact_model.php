<?php
/**
 * Created by PhpStorm.
 * User: Henry
 * Date: 25-07-2015
 * Time: 08:10 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model{
    public function __construct(){
        parent::__construct();
    }





    public function add_contact($name, $email, $tel, $message){
        $this->db->insert('contacto', array(
            'name' => $name,
            'email' => $email,
            'tel' => $tel,
            'message' => $message
        ) );
    }









}