<?php
class Model_latihan1 extends CI_Model
{
<<<<<<< HEAD
    //membuat variable untuk menampung nilai
    public $nilai1, $nilai2, $hasil;

    //method penjumlahan
    public function jumlah($nil1 = null, $nil2 = null)
    {
        $this->nilai1 = $nil1;
        $this->nilai2 = $nil2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}
=======
    //membuat variable untuk menampung nilai 
    public $nilai1, $nilai2, $hasil;
    //method penjumlahan
    public function jumlah($n1 = null, $n2=null )
    {
        $this->nilai1 = $n1;
        $this->nilai2 = $n2;
        $this->hasil = $this->nilai1 + $this->nilai2;
        return $this->hasil;
    }
}
>>>>>>> 84d7c1e93e6abc73e2b24fe6d5fcdfeab7838330
