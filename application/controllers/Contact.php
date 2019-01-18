<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('contact_model');
        $this->load->helper('url'); // cần load thư viện này để sử dụng hàm base_url

    }	

    public function index()
    {
        $data['contacts'] = $this->contact_model->getContacts();
        $this->load->view('contact_list', $data);
    }

    public function add()
    {
        $this->load->view('contact_add');
    }
    /**
    * Hàm thực hiện việc lưu thông tin vào db
    * $id = 0 : trong trường hợp thêm mới
    * $id != 0: trong trường hợp cập nhật dữ liệu
    */
    public function save($id=0)
    { 
        $postData = array(
            'name' => $this->input->post('name'),
            'phone1' => $this->input->post('phone1'),
            'phone2' => $this->input->post('phone2'),
            'email' => $this->input->post('email'),
            'fb' => $this->input->post('fb'),
            'company' => $this->input->post('company')
        );

        if ($id == 0) // thêm mới
            $this->contact_model->addContact($postData);
        else // cập nhật
            $this->contact_model->updateContact($postData, $id);

        redirect(base_url('/'));
    }

    public function edit($id)
    {
        $data['contact_item'] = $this->contact_model->getContact($id);
        $this->load->view('contact_edit', $data);
    }
    public function del($id)
    {
        $this->contact_model->deleteContact($id);
        echo 'success';
    }

   
}