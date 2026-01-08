<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProfileController extends BaseController
{
    protected array $models = [];

    public function __construct()
    {
        $this->models['profileModel'] = new \App\Models\Profile();
    }

    public function index()
    {
        $data = [
            'profile' => $this->models['profileModel']->first(),
        ];

        return view('admin/profile/index', $data);
    }

    public function edit($id)
    {
        return view('admin/profile/edit', [
            'profile' => $this->models['profileModel']->find($id)
        ]);
    }

    public function update($id)
    {
        $profile = $this->models['profileModel']->find($id);
        if (!$profile) {
            return redirect()->to('/admin/biodata')->with('errors', ['Biodata tidak ditemukan']);
        }

        $data = $this->request->getPost([
            'full_name',
            'headline',
            'about',
            'email',
            'phone',
            'address',
        ]);

        $file = $this->request->getFile('photo');

        if ($file && $file->isValid() && ! $file->hasMoved()) {

            if (!empty($profile->picture)) {
                $oldPath = FCPATH . 'uploads/profile/' . $profile->picture;
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/profile', $newName);

            $data['photo'] = $newName;
        }

        if (!$this->models['profileModel']->update($id, $data)) {
            return redirect()->back()->withInput()->with('errors', $this->models['profileModel']->errors());
        }

        return redirect()->to('/admin/biodata')->with('success', 'Biodata berhasil diperbarui');
    }
}
