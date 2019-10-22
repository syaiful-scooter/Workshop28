<?php /**
 * membuat tree menu dinamis dari db dijadikan array dengan foreach
 */
class BikinArray extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    //bikin 'm' sebagai alias model
    $this->load->model('M_tree','m');
    $this->load->helper('url');
  }

  public function weblesson()
  {
    // code...
    $ambil_data_dr_model1 = $this->m->getAllCity();
    $ambil_data_dr_model = array("list_data"=> $ambil_data_dr_model1);
    // echo '<pre>';
    // print_r($ambil_data_dr_model);
    // echo '</pre>';
    // $this->load->view('array_tree', $data);//menampilkan array apa adanya
    $this->load->view('array_tree20',$ambil_data_dr_model);// menampilkan array dengan bersarang sesuai parent_id
  }

  public function weblesson2()
  {
    // code...
    $ambil_data_dr_model1 = $this->m->getAllCity();
    $data = array("list_data"=> $ambil_data_dr_model1);
    echo json_encode($data);
    // $this->load->view('array_tree20');
    // die($data);
    // print_r($list_data);
    // print_r($data);

    foreach ($list_data as $key => &$value) {
      // code...
      $output[$value["id"]]=&$value;
    }

    foreach ($list_data as $key => &$value) {
      // code...
      if ($value["parent_id"] && isset ($output[$value["parent_id"]]))
        {
          $output[$value["parent_id"]]["nodes"][]=&$value;
        }
    }

    foreach ($list_data as $key => &$value) {
      // code...
      if ($value["parent_id"] && isset ($output[$value["parent_id"]]))
        {
          unset($list_data[$key]);
        }
    }
    // echo json_encode($list_data);
    // echo json_encode($data);
    //
    // echo '<pre>';
    // print_r($list_data);
    // echo '</pre>';
    // echo json_encode($data);
    // echo json_encode($list_data);
  }

  public function encode_datanya($list_data)
  {
    // code...
    // die("hard");
    // echo json_encode($a);

        foreach ($list_data as $key => &$value) {
          // code...
          $output[$value["id"]]=&$value;
        }

        foreach ($list_data as $key => &$value) {
          // code...
          if ($value["parent_id"] && isset ($output[$value["parent_id"]]))
            {
              $output[$value["parent_id"]]["nodes"][]=&$value;
            }
        }

        foreach ($list_data as $key => &$value) {
          // code...
          if ($value["parent_id"] && isset ($output[$value["parent_id"]]))
            {
              unset($list_data[$key]);
            }
        }
        echo json_encode($list_data);
  }

  public function encode_datanya1(){
    $ambil_data_dr_model1 = $this->m->getAllCity();

    foreach ($ambil_data_dr_model1 as $row){
        $sub_data['id'] = $row['id'];
        $sub_data['name'] = $row['name'];
        $sub_data['text'] = $row['name'];
        $sub_data["parent_id"] = $row["parent_id"] ;
        $data[] = $sub_data;
      }

    foreach ($data as $key => &$value) {
      $output[$value["id"]]=&$value;
    }

    foreach ($data as $key => &$value) {
      if ($value["parent_id"] && isset ($output[$value["parent_id"]]))
        { $output[$value["parent_id"]]["nodes"][]=&$value; }
    }

    foreach ($data as $key => &$value) {
      if ($value["parent_id"] && isset ($output[$value["parent_id"]]))
        { unset($data[$key]); }
    }

    echo json_encode($data);

  }
}
?>
