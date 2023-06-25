<?php
class Latihan1 extends CI_Controller
{
    public function index()
    {
<<<<<<< HEAD
        echo "Selamat Datang.. selamat belajar Web Programming";
        //$this->load->view('view-latihan1');
=======
        echo "Selamat Datang,,, selamat belajar";

>>>>>>> 84d7c1e93e6abc73e2b24fe6d5fcdfeab7838330
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');
<<<<<<< HEAD
        /*$hasil = $this->Model_latihan1->jumlah($n1, $n2);
        echo "Hasil Penjumlahan dari " . $n1 . " + " . $n2 . " = " . $hasil;
        */
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

        $this->load->view('view-latihan1', $data);
    }
}
=======
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1,$n2);

        $this->load->view('view-latihan1', $data);
    }
}
>>>>>>> 84d7c1e93e6abc73e2b24fe6d5fcdfeab7838330
