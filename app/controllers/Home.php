<?php
/**
 * Controller Home
 */
class Home extends Controller
{

  public function index()
  {
    $data['judul'] = 'Home';
    $data['bio'] = $this->model('Biodata_model')->getAllBiodata();
    $this->view('templates/header', $data);
    $this->view('home/index', $data);
    $this->view('templates/footer');

  }

  public function detail($id)
  {
    $data['judul'] = "Tentang saya";
    $data['bio'] = $this->model('Biodata_model')->getBiodataById($id);

    $this->view('templates/header', $data);
    $this->view('home/detail', $data);
    $this->view('templates/footer');
  }

}
