<?php

class Home extends Controller {
    public function index() {
        $data['title'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/headerHome', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }


}
