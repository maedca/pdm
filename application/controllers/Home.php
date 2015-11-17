<?php
/**
 * Created by PhpStorm.
 * User: terce
 * Date: 14/09/2015
 * Time: 15:07
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Contact_model');

    }

    public function index(){
        $datos['token'] = $this->token();
        $datos['title'] = 'PDM';
        $datos['contenido'] = 'contenido_prueba';
        $this->load->view('templates/template', $datos);


    }


    public function email_contact(){
        if ($this->input->post('token') && $this->input->post('token') == $this->session->userdata('token')) {
            $this->form_validation->set_rules('name', 'Nombre', 'required|trim|min_length[2]|max_length[50]');
            $this->form_validation->set_rules('email', 'Correo Electronico', 'required|trim|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('tel', 'Telefono', 'required|trim|min_length[5]|max_length[20]');
            $this->form_validation->set_rules('message', 'Mensaje', 'required|trim|min_length[50]|max_length[400]');




            if ($this->form_validation->run() === FALSE) {
                redirect(base_url('#contact'));
            } else {
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $tel = $this->input->post('tel');
                $message = $this->input->post('message');
                $this->Contact_model->add_contact($name, $email, $tel, $message);


            }
        } else {
            redirect(base_url());
        }
    }







    public function token()
    {
        $token = md5(uniqid(rand(), true));
        $this->session->set_userdata('token', $token);
        return $token;
    }



}