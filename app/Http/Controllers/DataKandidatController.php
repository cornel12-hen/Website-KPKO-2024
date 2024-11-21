<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Blade;

class DataKandidatController extends Controller
{
    public function index(Request $request)
    {
        Log::info('Controller started'); // Log sebelum query

        $key = $request->get('load', '0');
        Log::info('Load Key:', [$key]);

        $raw = Kandidat::where('nomor_urut', $key)->first();
        Log::info('Data:', $raw ? $raw->toArray() : []);
        $data = null;

        if($raw != null){
            $kodeHTML = Blade::render('<x-btnvote />');

            $data = [
                'id' => $raw -> id,
                'nomor_urut' => 'Paslon ' . $raw -> nomor_urut,
                'nama' => $raw -> nama,
                'visi' => $raw -> visi,
                'isivisi' => $raw -> isivisi,
                'misi' => $raw -> misi,
                'isimisi' => $raw -> isimisi,
                'foto1' => $raw -> foto1,
                'foto2' => $raw -> foto2,
                'foto3' => $raw -> foto1,
                'kode' => $kodeHTML,
            ];
        }
        else{
            Log::info('No candidate found, using default data.');

            $data = [
                'id' => '0',
                'nomor_urut' => 'E-KPKO 2024',
                'nama' => 'OSISTEL',
                'visi' => 'Peraturan',
                'isivisi' => '
1. Pemilih wajib menjaga ketertiban di area pemilihan.
2. Pemilih hanya diperbolehkan memasuki bilik suara satu per satu.
3. Setelah mencoblos, pemilih segera meninggalkan area pemilihan.
4. Dilarang melakukan kampanye atau memengaruhi pilihan orang
   lain di area pemilihan.
5. Dilarang merusak fasilitas.
6. Proses pencoblosan diawasi oleh panitia dan saksi dari setiap
   kandidat untuk menjamin kelancaran dan kejujuran.',
                'misi' => 'Ketentuan',
                'isimisi' => '
1. Setiap siswa memiliki hak untuk memilih sesuai hati nurani tanpa
   tekanan atau paksaan.
2. Setiap siswa hanya memiliki satu suara yang sah dan tidak dapat
   diwakilkan.
3. Pemilih wajib membawa kartu pemilihan sebagai bukti hak suara.
4. Pemilih mencoblos satu kandidat di bilik suara.
5. Pemilih wajib menjaga kerahasiaan pilihannya dan tidak menyebutkan
   pilihannya di area pemilihan.',
                'foto1' => '/img/kpko.png',
                'foto2' => '/img/kpko.png',
                'foto3' => '/img/kpko1.png',
                'kode' => '',
            ];
        }
        Log::info('Data:', $data);
        // return redirect()->route('vote')->with('success', 'Terima kasih sudah menggunakan hak suaramu!');
        // return view('vote', compact('data'));
        session()->put('vote_data', $data);
        return redirect()->route('vote');
        // return redirect()->route('vote')->with('data', $data);
        // return view('vote', ['data' => $data]);

        // return view('vote');
    }
}
