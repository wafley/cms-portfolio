<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class SocialController extends BaseController
{
    protected array $models = [];

    public function __construct()
    {
        $this->models['socialModel'] = new \App\Models\Social();
    }

    public function index()
    {
        $data = [
            'socials' => $this->models['socialModel']->findAll(),
        ];

        return view('admin/social/index', $data);
    }

    public function create()
    {
        return view('admin/social/create');
    }

    public function store()
    {
        $data = $this->request->getPost([
            'platform',
            'url',
            'icon',
        ]);

        if (! $this->models['socialModel']->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $this->models['socialModel']->errors());
        }

        return redirect()->to('/admin/socials')->with('success', 'Link sosial media berhasil ditambahkan');
    }

    public function edit($id)
    {
        return view('admin/social/edit', [
            'social' => $this->models['socialModel']->find($id)
        ]);
    }

    public function update($id)
    {
        $social = $this->models['socialModel']->find($id);
        if (!$social) {
            return redirect()->to('/admin/socials')->with('errors', ['Link sosial media tidak ditemukan']);
        }

        $data = $this->request->getPost([
            'platform',
            'url',
            'icon',
        ]);

        if (!$this->models['socialModel']->update($id, $data)) {
            return redirect()->back()->withInput()->with('errors', $this->models['socialModel']->errors());
        }

        return redirect()->to('/admin/socials')->with('success', 'Link sosial media berhasil diperbarui');
    }

    public function delete($id)
    {
        $this->models['socialModel']->delete($id);

        session()->setFlashdata('success', 'Link sosial media berhasil dihapus');

        return $this->response->setJSON([
            'status' => 'success'
        ]);
    }
}
