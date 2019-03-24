<?php
/**
 * Created by Raquel Baldavira on PhpStorm.
 * DS Aplicativos for vhck
 * Date: 24/03/2019
 * Time: 15:42
 */

class HomeController extends CI_Controller {


    public function index() {
        $files = glob('./uploads/*.docx');
        $message = 'Only .doc and .docx allowed!';
        if ($this->session->flashdata('upload_error')) {
            $message = $this->session->flashdata('upload_error');
        }
        else if ($this->session->flashdata('upload_success')) {
            $message = $this->session->flashdata('upload_success');
        }
        $data = array(
            'files' => $files,
            'message' => $message,
        );

        $this->load->view('index', $data);
    }

    public function file_upload() {
        $config = array(
            'upload_path' => './uploads/',
            'allowed_types' => 'docx|doc',
            'max_size' => '200000',
        );
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('upload_error', $error);
        }
        else {
            $this->session->set_flashdata('upload_success', "Congrats! New templated imported!");
        }
        redirect('');
    }

}