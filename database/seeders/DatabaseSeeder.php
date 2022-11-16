<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Divisi;
use App\Models\Pegawai;
use App\Models\Jabatan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::beginTransaction();
        Divisi::insert([
            ['id' => 1, 'nama' => 'Teknik', 'jml_pgw' => 0],
            ['id' => 2, 'nama' => 'Ekonomi', 'jml_pgw' => 0],
            ['id' => 3, 'nama' => 'FISIP', 'jml_pgw' => 0],
        ]);
        $jabatan = [
            ['id' => 1, 'divisi_id' => '1', 'nama' => 'Teknik Informatika', 'jml_pgw' => 0],
            ['id' => 2, 'divisi_id' => '1', 'nama' => 'Sistem Informasi', 'jml_pgw' => 0],
            ['id' => 3, 'divisi_id' => '2', 'nama' => 'Manajemen', 'jml_pgw' => 0],
            ['id' => 4, 'divisi_id' => '3', 'nama' => 'Komunikasi', 'jml_pgw' => 0],
        ];
        Jabatan::insert($jabatan);

        $nip = 2113191001;
        $pgw = $this->pgw();
        for ($i = 0; $i < count($pgw); $i += count($jabatan)) {
            for ($j = 0; $j < count($jabatan); $j++) {
                $pgw_i = $pgw[$i + $j];

                $pegawai = new Pegawai();
                $pegawai->jabatan_id = $jabatan[$j]['id'];
                $pegawai->nip = $nip;
                $pegawai->nama = $pgw_i['nama'];
                $pegawai->jenis_kelamin = $pgw_i['jk'];
                $pegawai->thn_masuk = 2019;
                $pegawai->tanggal_lahir = $this->randomDate();
                $pegawai->alamat = 'Bandung';
                $pegawai->save();

                // set jml_pgw Jabatan
                $jbt = Jabatan::find($jabatan[$j]['id']);
                $jbt->jml_pgw += 1;
                $jbt->save();

                // set jml_pgw divisi
                $div = $jbt->divisi;
                $div->jml_pgw += 1;
                $div->save();

                $nip++;
            }
        }

        DB::commit();
    }

    private function randomDate()
    {
        // Convert to timetamps
        $min = strtotime('2000-01-01');
        $max = strtotime('2002-01-01');

        // Generate random number using above bounds
        $val = rand($min, $max);

        // Convert back to desired date format
        return date('Y-m-d', $val);
    }

    private function pgw(): array
    {
        $l = 'Laki-laki';
        $p = 'Perempuan';
        return [
            ['jk' => $p, 'nama' => 'Adistia Ramadhani'],
            ['jk' => $l, 'nama' => 'Ahmad Rizal Imaduddin'],
            ['jk' => $l, 'nama' => 'Akbar Maulana M. Tarumadoya'],
            ['jk' => $l, 'nama' => 'Alam Nurzaman'],
            ['jk' => $l, 'nama' => 'Cece Supriatna'],
            ['jk' => $p, 'nama' => 'Chika Stefanny Siswandi'],
            ['jk' => $l, 'nama' => 'Dara Atria Ferliandini'],
            ['jk' => $l, 'nama' => 'Deri Kurniawan'],
            ['jk' => $p, 'nama' => 'Dewi Febrima Raifu'],
            ['jk' => $l, 'nama' => 'Domingos Doutel Sarmento'],
            ['jk' => $l, 'nama' => 'Dominikus Ami Toron'],
            ['jk' => $l, 'nama' => 'Fachruly Al Huzairy'],
            ['jk' => $l, 'nama' => 'Fachruly Al Huzairy1'],
            ['jk' => $l, 'nama' => 'Fajar Nur Alamsyah'],
            ['jk' => $l, 'nama' => 'Farhan Aziz'],
            ['jk' => $l, 'nama' => 'Fernanda Dewa Ndaru Santoso'],
            ['jk' => $l, 'nama' => 'Irfan Ramdani'],
            ['jk' => $l, 'nama' => 'Irham Permana'],
            ['jk' => $l, 'nama' => 'Joshua Dehary Butar-butar'],
            ['jk' => $l, 'nama' => 'Joshua Dehary1 Butar-butar'],
            ['jk' => $l, 'nama' => 'M. Fahrel Ardiansyah'],
            ['jk' => $l, 'nama' => 'M. Fajar Ramadhani'],
            ['jk' => $l, 'nama' => 'M. Rafi Algippari'],
            ['jk' => $l, 'nama' => 'M. Sabit Kala'],
            ['jk' => $l, 'nama' => 'M. Taufik Ali Syech Ahmad'],
            ['jk' => $l, 'nama' => 'Iman Faturahman'],
            ['jk' => $l, 'nama' => 'Muhamad Ath-Thariq'],
            ['jk' => $l, 'nama' => 'Putri Hainuri Ar-Rahman'],
            ['jk' => $l, 'nama' => 'Raden Mochamad Lutphi Arbilly Ismail Poetra'],
            ['jk' => $l, 'nama' => 'Razan Aiman Nadir'],
            ['jk' => $l, 'nama' => 'Razfin Turfa Sandy'],
            ['jk' => $l, 'nama' => 'Razfin Turfa1 Sandy'],
            ['jk' => $l, 'nama' => 'Rivan Kurnia'],
            ['jk' => $p, 'nama' => 'Tini Patmawati'],
            ['jk' => $l, 'nama' => 'Yunita Fransiska Simatupang'],
            ['jk' => $l, 'nama' => 'Zidan Herdiansyah'],
        ];
    }
}
