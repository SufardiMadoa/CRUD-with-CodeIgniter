<?php


namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class ControllerWebsaya extends BaseController
{
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $model = new \App\Models\BukuModel();
        $model->protect(false);
    }

    public function methodBeranda() //: string
    {
        $data = [
            'untukViewTitle' => 'Title Beranda'
        ];
        echo view('/layout/viewKepala', $data);
        echo view('viewBeranda');
        echo view('/layout/viewKaki');
    }

    public function methodProfil() //: string
    {
        $data = [
            'untukViewTitle' => 'Title Profil'
        ];
        echo view('/layout/viewKepala', $data);
        echo view('viewProfil');
        echo view('/layout/viewKaki');
    }

    public function methodKontakKami() //: string
    {
        $data = [
            'untukViewTitle' => 'Title KontakKami'
        ];
        echo view('/layout/viewKepala', $data);
        echo view('viewKontakKami');
        echo view('/layout/viewKaki');
    }

    public function methodKatalogDatabase() //: string
    {
        $xx = new \App\Models\BukuModel();
        $hasil = $xx->findAll();

        $data = [
            'untukViewTitle' => 'Title Katalog Database',
            'hasilbuku' => $hasil
        ];

        echo view('/layout/viewKepala', $data);
        echo view('viewKatalogDatabase', $data);
        echo view('/layout/viewKaki');
    }

    public function methodDetail($yy) // : Returntype 
    {
        $xx = new \App\Models\BukuModel();
        $hasil = $xx->where(['id' => $yy])->first();

        $data = [
            'untukViewTitle' => 'Title Detail',
            'spec' => $hasil
        ];
        echo view('/layout/viewKepala', $data);
        echo view('viewDetail', $data);
        echo view('/layout/viewKaki');
    }

    public function methodHapus($yy) //: Returntype 
    {
        $xx = new \App\Models\BukuModel();
        $hasil = $xx->delete($yy);
        return redirect()->to('/controllerWebsaya/methodKatalogDatabase');
    }

    public function methodFormEditPasif($yy)
    {
        $xx = new \App\Models\BukuModel();
        $hasil = $xx->where(['id' => $yy])->first();

        $data = [
            'untukViewTitle' => 'Title Detail',
            'spec' => $hasil
        ];
        echo view('/layout/viewKepala', $data);
        echo view('viewFormEditPasif', $data);
        echo view('/layout/viewKaki');
    }
    public function methodFormEditAktif($yy)
    {
        $xx = new \App\Models\BukuModel();
        $hasil = $xx->where(['id' => $yy])->first();

        $data = [
            'untukViewTitle' => 'Title Detail',
            'spec' => $hasil
        ];
        echo view('/layout/viewKepala', $data);
        echo view('viewFormEditAktif', $data);
        echo view('/layout/viewKaki');
    }

    public function methodRekamEdit()
    {
        $aa = $_POST['fId'];
        $bb = $_POST['fSampul'];
        $cc = $_POST['fJudul'];
        $dd = $_POST['fPengarang'];

        // echo "$aa <br> $bb <br> $cc <br>  $dd";
        $xx = new \App\Models\BukuModel();
        $hasil = $xx->save([
            'id' => $aa,
            'sampul' => $bb,
            'judul' => $cc,
            'pengarang' => $dd
        ]);
        return redirect()->to('/controllerWebsaya/methodKatalogDatabase');
    }
    public function methodFormTambahAktif()
    {
        $data = [
            'untukViewTitle' => 'Title Detail'
        ];
        echo view('/layout/viewKepala', $data);
        echo view('viewFormTambahAktif');
        echo view('/layout/viewKaki');
    }
    public function methodRekamTambah()
    {
        $aa = $_POST['fId'];
        $bb = $_POST['fSampul'];
        $cc = $_POST['fJudul'];
        $dd = $_POST['fPengarang'];

        // echo "$aa <br> $bb <br> $cc <br>  $dd";
        $xx = new \App\Models\BukuModel();
        $hasil = $xx->insert([
            'id' => $aa,
            'sampul' => $bb,
            'judul' => $cc,
            'pengarang' => $dd
        ]);
        return redirect()->to('/controllerWebsaya/methodKatalogDatabase');
    }
}

?>
