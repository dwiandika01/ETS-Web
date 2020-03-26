<?php

class M_siswa extends CI_Model
{
    private $_table = "tbl_siswa";

    public function getAll()
    {
        $siswa = $this->db->get($this->_table)->result();
        foreach ($siswa as $value) {
            $value->siswa = $this->db->where('NIS', $value->NIS)->from('tbl_siswa')->get()->num_rows();
        }
        return $siswa;
    }

    // public function getById($id)
    // {
    //     return $this->db->get_where($this->_table, ["id_jurusan" => $id])->row();
    // }

    public function simpan($nama_siswa, $kelas, $jk, $nilai)
    {

        $data = array(
            'nama_siswa' => $nama_siswa,
            'kelas' => $kelas,
            'jk' => $jk,
            'nilai' => $nilai

        );

        $this->db->insert('tb_jurusan', $data);
        return true;
        //$hasil = $this->db->query("INSERT INTO tb_jurusan (id_jurusan,nama_jurusan,singkatan) VALUES ('$id_jurusan','$nama_jurusan','$singkatan')");
        //return $hasil;
    }

    function edit($id_jurusan, $nama_jurusan, $singkatan)
    {
        $this->db->set('singkatan', $singkatan);
        $this->db->set('nama_jurusan', $nama_jurusan);
        $this->db->where('id_jurusan', $id_jurusan);
        $this->db->update('tb_jurusan');

        //$hasil = $this->db->query("UPDATE tb_jurusan SET nama_jurusan='$nama_jurusan',singkatan='$singkatan' WHERE id_jurusan='$id_jurusan'");
        //return $hasil;
    }

    public function delete($id_jurusan)
    {

        $this->db->delete('tb_jurusan', array('id_jurusan' => $id_jurusan));
        //$hasil = $this->db->query("DELETE FROM tb_jurusan WHERE id_jurusan='$id_jurusan'");
        // return $hasil;
    }
}
