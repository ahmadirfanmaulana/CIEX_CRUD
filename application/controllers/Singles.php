<?php
/**
 *
 */
class Singles extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    // load model
    $this->load->model('SinglesModel');
  }

  // route : http://localhost/CIEXAMPLECRUD/index.php/singles
  public function index()
  {
    $data['singles'] = $this->db->get('single');

    // load view
    $this->load->view('template/header');
    $this->load->view('site/singles/home', $data);
    $this->load->view('template/footer');
  }

  // route : http://localhost/CIEXAMPLECRUD/index.php/singles/add
  public function add()
  {
    // load view
    $this->load->view('template/header');
    $this->load->view('site/singles/add');
    $this->load->view('template/footer');
  }

  // route : http://localhost/CIEXAMPLECRUD/index.php/singles/create
  public function create()
  {
    // creating
    $this->SinglesModel->creating();

    // redirect to http://localhost/CIEXAMPLECRUD/index.php/singles
    redirect('singles');
  }

  // route : http://localhost/CIEXAMPLECRUD/index.php/singles/edit/$id
  public function edit($id)
  {
    // data for view
    $data['single'] = $this->db->get_where('single', ['id' => $id])->row();

    // load view
    $this->load->view('template/header');
    $this->load->view('site/singles/edit', $data);
    $this->load->view('template/footer');
  }

  // route : http://localhost/CIEXAMPLECRUD/index.php/singles/update
  public function update()
  {
    // updating
    $this->SinglesModel->updating();

    // redirect to http://localhost/CIEXAMPLECRUD/index.php/singles
    redirect('singles');
  }

  // route : http://localhost/CIEXAMPLECRUD/index.php/singles/delete/$id
  public function delete($id)
  {
    // data for view
    $data['single'] = $this->db->get_where('single', ['id' => $id])->row();

    // load view
    $this->load->view('template/header');
    $this->load->view('site/singles/delete', $data);
    $this->load->view('template/footer');
  }

  // route : http://localhost/CIEXAMPLECRUD/index.php/singles/trashing
  public function trashing()
  {
    // trashing
    $this->SinglesModel->trashing();

    // redirect to http://localhost/CIEXAMPLECRUD/index.php/singles
    redirect('singles');
  }

  // route : http://localhost/CIEXAMPLECRUD/index.php/singles/result
  public function result()
  {
    $keyword = $this->input->post('keyword');

    $this->db->like('name', $keyword);
    $this->db->or_like('reason', $keyword);

    $data['singles'] = $this->db->get('single');

    // load view
    $this->load->view('template/header');
    $this->load->view('site/singles/home', $data);
    $this->load->view('template/footer');
  }
}

 ?>
