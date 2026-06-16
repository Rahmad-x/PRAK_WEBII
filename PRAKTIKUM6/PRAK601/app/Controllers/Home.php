<?php

namespace App\Controllers;
use App\Models\StudentModel;
use App\Models\ExperienceModel;

class Home extends BaseController
{
    protected $studentModel;
    protected $experienceModel;

    public function __construct()
    {
        $this->studentModel = new StudentModel();
        $this->experienceModel = new ExperienceModel();
    }

    public function index()
    {
        $data = [
            'title'   => 'Beranda',
            'student' => $this->studentModel->getStudentData()
        ];
        return view('beranda', $data);
    }

    public function profil()
    {
        $data = [
            'title'       => 'Profil Praktikan',
            'student'     => $this->studentModel->getStudentData(),
            'experiences' => $this->experienceModel->getExperiences()
        ];
        return view('profil', $data);
    }

    public function detail($slug)
    {
        $experience = $this->experienceModel->getExperiences($slug);
        
        // Jika slug tidak ditemukan, tampilkan error 404
        if (empty($experience)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Pengalaman tidak ditemukan');
        }

        $data = [
            'title'      => 'Detail Pengalaman',
            'pengalaman' => $experience
        ];
        return view('detail_pengalaman', $data);
    }
}