<?php
namespace App\Controllers;

use App\Models\KaryawanModel;
use CodeIgniter\Controller;

class KaryawanController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new KaryawanModel();
        // Memuat layanan session
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data['karyawan'] = $this->model->findAll();
        return view('karyawan/index', $data);
    }

    public function create()
    {
        return view('karyawan/create');
    }

    public function store()
    {
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'jekel' => $this->request->getPost('jekel'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'telp' => $this->request->getPost('telp'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $this->model->insert($data);
        return redirect()->to(base_url('karyawan'))->with('success', 'Data karyawan berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data['karyawan'] = $this->model->find($id);
        if (!$data['karyawan']) {
            return redirect()->to(base_url('karyawan'))->with('error', 'Data karyawan tidak ditemukan');
        }
        return view('karyawan/edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'jekel' => $this->request->getPost('jekel'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'telp' => $this->request->getPost('telp'),
            'alamat' => $this->request->getPost('alamat'),
        ];
        $this->model->update($id, $data);
        return redirect()->to(base_url('karyawan'))->with('success', 'Data karyawan berhasil diperbarui');
    }

    public function delete($id)
    {
        $this->model->delete($id);
        return redirect()->to(base_url('karyawan'))->with('success', 'Data karyawan berhasil dihapus');
    }
}