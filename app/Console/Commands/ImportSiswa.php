<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Siswa;

class ImportSiswa extends Command
{
    // Nama dan deskripsi command
    protected $signature = 'import:data {file}';
    protected $description = 'Import data siswa, guru, dan karyawan dari file CSV';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Ambil argumen file
        $filePath = $this->argument('file');

        if (!file_exists($filePath) || !is_readable($filePath)) {
            $this->error('File tidak ditemukan atau tidak bisa dibaca.');
            return;
        }

        if (($handle = fopen($filePath, 'r')) !== false) {
            // Lewati header jika ada
            $isFirstRow = true;

            while (($data = fgetcsv($handle, 1000, ';')) !== false) {
                if ($isFirstRow) {
                    $isFirstRow = false;
                    continue; // Lewati header
                }

                // Simpan data ke database
                Siswa::create([
                    'username' => $data[0], // Username / NIS / NIP
                    'token' => bcrypt($data[2]), // Token, di-hash
                    'kelas' => $data[3], // Kelas
                    'name' => $data[1], // Nama Lengkap

                ]);
            }

            fclose($handle);
            $this->info('Data siswa berhasil diimpor.');
        }
    }
}
