<?php

namespace App\Models;

use CodeIgniter\Model;

class DataperiodikModel extends Model
{
    protected $allowedFields = ['nis', 'asal_sekolah', 'nomor_peserta_un', 'nomor_seri_ijazah', 'nomor_seri_skhun', 'tinggi_badan', 'berat_badan', 'hobi', 'cita_cita', 'jarak_tempuh', 'waktu_tempuh', ''];
    protected $table = 'data_periodik';

    public function add($data)
    {
        $this->db->table('data_periodik')->insert($data);
    }

    public function getPeriodikSiswa()
    {
        return $this->db->table($this->table)->select('biodata_siswa.nama as nama,data_periodik.nis as nis,biodata_siswa.kelas as kelas,data_periodik.asal_sekolah as asalsekolah,data_periodik.nomor_peserta_un as nopesun,data_periodik.nomor_seri_ijazah as noijazah, data_periodik.nomor_seri_skhun as noskhun,data_periodik.hobi as hobi, data_periodik.cita_cita as cita')->join('biodata_siswa', 'biodata_siswa.nis=data_periodik.nis')->get()->getResultArray();
    }

    public function getSiswaByNis($nis)
    {
        return $this->db->table('biodata_siswa')->where(['nis' => $nis])->get()->getRowArray();
    }

    public function getPeriodikByNis($nis)
    {
        return $this->db->table('data_periodik')->where(['nis' => $nis])->get()->getRowArray();
    }

    public function updateDataPeriodik($nis, $data)
    {
        $this->db->table('data_periodik')->where(['nis' => $nis])->update($data);
    }

    public function hapusPeriodikByNis($nis)
    {
        $this->db->table('data_periodik')->where(['nis' => $nis])->delete();
    }

    public function getKelas()
    {
        return $this->db->table('kelas')->get()->getResultArray();
    }
}
