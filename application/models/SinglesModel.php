<?php
/**
 *
 */
class SinglesModel extends CI_Model
{

  public function creating()
  {
    // define post
    $name = $this->input->post('name');
    $reason = $this->input->post('reason');

    // config uploading photo
    $config['upload_path'] = './upload/img/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $this->load->library('upload', $config);

    // if foto success uploaded
    if ($this->upload->do_upload('foto')) {

      // data for insert
      $data = array(
        'name' => $name,
        'reason' => $reason,
        'foto' => $this->upload->data('file_name')
      );

      // inserting
      $this->db->insert('single', $data);

      return true;
    }
  }

  public function updating()
  {
    // define post
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    $reason = $this->input->post('reason');
    $last_foto = $this->input->post('last_foto');

    // config uploading photo
    $config['upload_path'] = './upload/img/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $this->load->library('upload', $config);

    // if foto success uploaded
    if ($this->upload->do_upload('foto')) {

      // data for update
      $data = array(
        'name' => $name,
        'reason' => $reason,
        'foto' => $this->upload->data('file_name')
      );

      // delete then img
      unlink('./upload/img/' . $last_foto);
    }
    // if not upload
    else {

      // data for update
      $data = array(
        'name' => $name,
        'reason' => $reason
      );

    }

    // updating
    $this->db->where('id', $id);
    $this->db->update('single', $data);

    return true;
  }

  public function trashing()
  {
    // define post
    $id = $this->input->post('id');
    $foto = $this->input->post('foto');

    // trashing
    $this->db->delete('single', ['id' => $id]);

    // delete foto
    unlink('./upload/img/' . $foto);
  }

}

 ?>
