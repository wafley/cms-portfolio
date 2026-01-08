<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ActivityController extends BaseController
{
    protected array $models = [];

    public function __construct()
    {
        $this->models['activityModel'] = new \App\Models\Activity();
    }

    public function index()
    {
        $data = [
            'activities' => $this->models['activityModel']->findAll(),
        ];

        return view('admin/activity/index', $data);
    }

    public function create()
    {
        return view('admin/activity/create');
    }

    public function store()
    {
        $data = $this->request->getPost([
            'activity_date',
            'title',
            'description',
        ]);

        $file = $this->request->getFile('picture');

        if ($file && $file->isValid()) {
            if (! $file->isValid() || $file->hasMoved()) {
                return redirect()->back()->withInput()->with('errors', 'Gagal upload gambar');
            }

            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/activities', $newName);

            $data['picture'] = $newName;
        }

        if (!$this->models['activityModel']->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $this->models['activityModel']->errors());
        }

        return redirect()->to('/admin/activities')->with('success', 'Kegiatan berhasil ditambahkan');
    }

    public function edit($id)
    {
        return view('admin/activity/edit', [
            'activity' => $this->models['activityModel']->find($id)
        ]);
    }

    public function update($id)
    {
        $activity = $this->models['activityModel']->find($id);
        if (!$activity) {
            return redirect()->to('/admin/activities')->with('errors', ['Data kegiatan tidak ditemukan']);
        }

        $data = $this->request->getPost([
            'activity_date',
            'title',
            'description',
        ]);

        $file = $this->request->getFile('picture');

        if ($file && $file->isValid() && ! $file->hasMoved()) {

            if (!empty($activity->picture)) {
                $oldPath = FCPATH . 'uploads/activities/' . $activity->picture;
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/activities', $newName);

            $data['picture'] = $newName;
        }

        if (!$this->models['activityModel']->update($id, $data)) {
            return redirect()->back()->withInput()->with('errors', $this->models['activityModel']->errors());
        }

        return redirect()->to('/admin/activities')->with('success', 'Kegiatan berhasil diperbarui');
    }

    public function delete($id)
    {
        $this->models['activityModel']->delete($id);

        session()->setFlashdata('success', 'Data kegiatan berhasil dihapus');

        return $this->response->setJSON([
            'status' => 'success'
        ]);
    }
}
