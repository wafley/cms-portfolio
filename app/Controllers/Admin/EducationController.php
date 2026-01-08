<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class EducationController extends BaseController
{
    protected array $models = [];

    public function __construct()
    {
        $this->models['educationModel'] = new \App\Models\Education();
    }

    public function index()
    {
        $data = [
            'educations' => $this->models['educationModel']->findAll(),
        ];

        return view('admin/education/index', $data);
    }

    public function create()
    {
        return view('admin/education/create');
    }

    public function store()
    {
        $data = $this->request->getPost([
            'institution',
            'degree',
            'start_year',
            'end_year',
            'description',
        ]);

        $data['start_year'] = (int) $data['start_year'];
        $data['end_year']   = (int) $data['end_year'];

        if (! empty($data['end_year']) && $data['end_year'] < $data['start_year']) {
            return redirect()->back()->withInput()->with('errors', [
                'end_year' => 'Tahun selesai tidak boleh lebih kecil dari tahun mulai'
            ]);
        }

        if (! $this->models['educationModel']->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $this->models['educationModel']->errors());
        }

        return redirect()->to('/admin/educations')->with('success', 'Data pendidikan berhasil ditambahkan');
    }

    public function edit($id)
    {
        return view('admin/education/edit', [
            'education' => $this->models['educationModel']->find($id)
        ]);
    }

    public function update($id)
    {
        $education = $this->models['educationModel']->find($id);
        if (!$education) {
            return redirect()->to('/admin/educations')->with('errors', ['Data pendidikan tidak ditemukan']);
        }

        $data = $this->request->getPost([
            'institution',
            'degree',
            'start_year',
            'end_year',
            'description',
        ]);

        $data['start_year'] = (int) $data['start_year'];
        $data['end_year']   = (int) $data['end_year'];

        if (!empty($data['end_year']) && $data['end_year'] < $data['start_year']) {
            return redirect()->back()->withInput()->with('errors', [
                'end_year' => 'Tahun selesai harus lebih besar dari tahun mulai'
            ]);
        }

        if (!$this->models['educationModel']->update($id, $data)) {
            return redirect()->back()->withInput()->with('errors', $this->models['educationModel']->errors());
        }

        return redirect()->to('/admin/educations')->with('success', 'Data pendidikan berhasil diperbarui');
    }

    public function delete($id)
    {
        $this->models['educationModel']->delete($id);

        session()->setFlashdata('success', 'Data pendidikan berhasil dihapus');

        return $this->response->setJSON([
            'status' => 'success'
        ]);
    }
}
