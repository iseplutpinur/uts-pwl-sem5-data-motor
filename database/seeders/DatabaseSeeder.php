<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
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
        Kecamatan::insert([
            ['id' => 1, 'nama' => 'Andir'],
            ['id' => 2, 'nama' => 'Astana Anyar'],
            ['id' => 3, 'nama' => 'Antapani'],
            ['id' => 4, 'nama' => 'Arcamanik'],
            ['id' => 5, 'nama' => 'Babakan Ciparay'],
            ['id' => 6, 'nama' => 'Bandung Kidul'],
            ['id' => 7, 'nama' => 'Bandung Kulon'],
            ['id' => 8, 'nama' => 'Bandung Wetan'],
            ['id' => 9, 'nama' => 'Batununggal'],
            ['id' => 10, 'nama' => 'Bojongloa Kaler'],
            ['id' => 11, 'nama' => 'Bojongloa Kidul'],
            ['id' => 12, 'nama' => 'Buahbatu'],
            ['id' => 13, 'nama' => 'Cibeunying Kaler'],
            ['id' => 14, 'nama' => 'Cibeunying Kidul'],
            ['id' => 15, 'nama' => 'Cibiru'],
            ['id' => 16, 'nama' => 'Cicendo'],
            ['id' => 17, 'nama' => 'Cidadap'],
            ['id' => 18, 'nama' => 'Cinambo'],
            ['id' => 19, 'nama' => 'Coblong'],
            ['id' => 20, 'nama' => 'Gedebage'],
            ['id' => 21, 'nama' => 'Kiaracondong'],
            ['id' => 22, 'nama' => 'Lengkong'],
            ['id' => 23, 'nama' => 'Mandalajati'],
            ['id' => 24, 'nama' => 'Panyileukan'],
            ['id' => 25, 'nama' => 'Rancasari'],
            ['id' => 26, 'nama' => 'Regol'],
            ['id' => 27, 'nama' => 'Sukajadi'],
            ['id' => 28, 'nama' => 'Sukasari'],
            ['id' => 29, 'nama' => 'Sumur Bandung'],
            ['id' => 30, 'nama' => 'Ujungberung'],
        ]);

        Kelurahan::insert([
            ['id' => 1, 'kecamatan_id' => 1, 'nama' => 'Campaka', 'jml_pend' => 3471],
            ['id' => 2, 'kecamatan_id' => 1, 'nama' => 'Ciroyom', 'jml_pend' => 3473],
            ['id' => 3, 'kecamatan_id' => 1, 'nama' => 'Dunguscariang', 'jml_pend' => 4723],
            ['id' => 4, 'kecamatan_id' => 1, 'nama' => 'Garuda', 'jml_pend' => 4773],
            ['id' => 5, 'kecamatan_id' => 1, 'nama' => 'Kebonjeruk', 'jml_pend' => 3442],
            ['id' => 6, 'kecamatan_id' => 1, 'nama' => 'Maleber', 'jml_pend' => 4770],

            ['id' => 7, 'kecamatan_id' => 2, 'nama' => 'Cibadak', 'jml_pend' => 4433],
            ['id' => 8, 'kecamatan_id' => 2, 'nama' => 'Karanganyar', 'jml_pend' => 3694],
            ['id' => 9, 'kecamatan_id' => 2, 'nama' => 'Karasak', 'jml_pend' => 4673],
            ['id' => 10, 'kecamatan_id' => 2, 'nama' => 'Nyengseret', 'jml_pend' => 4577],
            ['id' => 11, 'kecamatan_id' => 2, 'nama' => 'Panjunan', 'jml_pend' => 3743],
            ['id' => 12, 'kecamatan_id' => 2, 'nama' => 'Pelindunghewan', 'jml_pend' => 3076],

            ['id' => 13, 'kecamatan_id' => 3, 'nama' => 'Antapani Kidul', 'jml_pend' => 3100],
            ['id' => 14, 'kecamatan_id' => 3, 'nama' => 'Antapani Kulon', 'jml_pend' => 4750],
            ['id' => 15, 'kecamatan_id' => 3, 'nama' => 'Antapani Tengah', 'jml_pend' => 4584],
            ['id' => 16, 'kecamatan_id' => 3, 'nama' => 'Antapani Wetan', 'jml_pend' => 3856],

            ['id' => 17, 'kecamatan_id' => 4, 'nama' => 'Cisaranten Bina Harapan', 'jml_pend' => 4107],
            ['id' => 18, 'kecamatan_id' => 4, 'nama' => 'Cisaranten Endah', 'jml_pend' => 3174],
            ['id' => 19, 'kecamatan_id' => 4, 'nama' => 'Cisaranten Kulon', 'jml_pend' => 4792],
            ['id' => 20, 'kecamatan_id' => 4, 'nama' => 'Sukamiskin', 'jml_pend' => 3560],

            ['id' => 21, 'kecamatan_id' => 5, 'nama' => 'Babakan', 'jml_pend' => 3499],
            ['id' => 22, 'kecamatan_id' => 5, 'nama' => 'Babakanciparay', 'jml_pend' => 4951],
            ['id' => 23, 'kecamatan_id' => 5, 'nama' => 'Cirangrang', 'jml_pend' => 3049],
            ['id' => 24, 'kecamatan_id' => 5, 'nama' => 'Margahayu Utara', 'jml_pend' => 3646],
            ['id' => 25, 'kecamatan_id' => 5, 'nama' => 'Margasuka', 'jml_pend' => 4720],
            ['id' => 26, 'kecamatan_id' => 5, 'nama' => 'Sukahaji', 'jml_pend' => 3578],

            ['id' => 27, 'kecamatan_id' => 6, 'nama' => 'Batununggal', 'jml_pend' => 3088],
            ['id' => 28, 'kecamatan_id' => 6, 'nama' => 'Kujangsari', 'jml_pend' => 3712],
            ['id' => 29, 'kecamatan_id' => 6, 'nama' => 'Mengger', 'jml_pend' => 3381],
            ['id' => 30, 'kecamatan_id' => 6, 'nama' => 'Wates', 'jml_pend' => 3668],

            ['id' => 31, 'kecamatan_id' => 7, 'nama' => 'Caringin', 'jml_pend' => 4383],
            ['id' => 32, 'kecamatan_id' => 7, 'nama' => 'Cibuntu', 'jml_pend' => 3466],
            ['id' => 33, 'kecamatan_id' => 7, 'nama' => 'Cigondewah Kaler', 'jml_pend' => 3409],
            ['id' => 34, 'kecamatan_id' => 7, 'nama' => 'Cigondewah Kidul', 'jml_pend' => 4841],
            ['id' => 35, 'kecamatan_id' => 7, 'nama' => 'Cigondewah Rahayu', 'jml_pend' => 3428],
            ['id' => 36, 'kecamatan_id' => 7, 'nama' => 'Cijerah', 'jml_pend' => 4799],
            ['id' => 37, 'kecamatan_id' => 7, 'nama' => 'Gempolsari', 'jml_pend' => 4312],
            ['id' => 38, 'kecamatan_id' => 7, 'nama' => 'Warungmuncang', 'jml_pend' => 3573],

            ['id' => 39, 'kecamatan_id' => 8, 'nama' => 'Cihapit', 'jml_pend' => 3462],
            ['id' => 40, 'kecamatan_id' => 8, 'nama' => 'Citarum', 'jml_pend' => 3204],
            ['id' => 41, 'kecamatan_id' => 8, 'nama' => 'Tamansari', 'jml_pend' => 4300],

            ['id' => 42, 'kecamatan_id' => 9, 'nama' => 'Binong', 'jml_pend' => 4954],
            ['id' => 43, 'kecamatan_id' => 9, 'nama' => 'Cibangkong', 'jml_pend' => 3278],
            ['id' => 44, 'kecamatan_id' => 9, 'nama' => 'Gumuruh', 'jml_pend' => 3344],
            ['id' => 45, 'kecamatan_id' => 9, 'nama' => 'Kacapiring', 'jml_pend' => 4335],
            ['id' => 46, 'kecamatan_id' => 9, 'nama' => 'Kebongedang', 'jml_pend' => 3676],
            ['id' => 47, 'kecamatan_id' => 9, 'nama' => 'Kebonwaru', 'jml_pend' => 3830],
            ['id' => 48, 'kecamatan_id' => 9, 'nama' => 'Maleer', 'jml_pend' => 3326],
            ['id' => 49, 'kecamatan_id' => 9, 'nama' => 'Samoja', 'jml_pend' => 4244],

            ['id' => 50, 'kecamatan_id' => 10, 'nama' => 'Babakan Asih', 'jml_pend' => 4069],
            ['id' => 51, 'kecamatan_id' => 10, 'nama' => 'Babakan Tarogong', 'jml_pend' => 4625],
            ['id' => 52, 'kecamatan_id' => 10, 'nama' => 'Jamika', 'jml_pend' => 4779],
            ['id' => 53, 'kecamatan_id' => 10, 'nama' => 'Kopo', 'jml_pend' => 4952],
            ['id' => 54, 'kecamatan_id' => 10, 'nama' => 'Suka Asih', 'jml_pend' => 4836],

            ['id' => 55, 'kecamatan_id' => 11, 'nama' => 'Cibaduyut', 'jml_pend' => 3410],
            ['id' => 56, 'kecamatan_id' => 11, 'nama' => 'Cibaduyut Kidul', 'jml_pend' => 3909],
            ['id' => 57, 'kecamatan_id' => 11, 'nama' => 'Cibaduyut Wetan', 'jml_pend' => 4815],
            ['id' => 58, 'kecamatan_id' => 11, 'nama' => 'Kebon Lega', 'jml_pend' => 4118],
            ['id' => 59, 'kecamatan_id' => 11, 'nama' => 'Mekarwangi', 'jml_pend' => 4431],
            ['id' => 60, 'kecamatan_id' => 11, 'nama' => 'Situsaeur', 'jml_pend' => 4248],

            ['id' => 61, 'kecamatan_id' => 12, 'nama' => 'Cijawura', 'jml_pend' => 3118],
            ['id' => 62, 'kecamatan_id' => 12, 'nama' => 'Jatisari', 'jml_pend' => 3797],
            ['id' => 63, 'kecamatan_id' => 12, 'nama' => 'Margasari', 'jml_pend' => 4153],
            ['id' => 64, 'kecamatan_id' => 12, 'nama' => 'Sekejati', 'jml_pend' => 4602],

            ['id' => 65, 'kecamatan_id' => 13, 'nama' => 'Cigadung', 'jml_pend' => 4799],
            ['id' => 66, 'kecamatan_id' => 13, 'nama' => 'Cihaurgeulis', 'jml_pend' => 4781],
            ['id' => 67, 'kecamatan_id' => 13, 'nama' => 'Neglasari', 'jml_pend' => 3802],
            ['id' => 68, 'kecamatan_id' => 13, 'nama' => 'Sukaluyu', 'jml_pend' => 3622],

            ['id' => 69, 'kecamatan_id' => 14, 'nama' => 'Cicadas', 'jml_pend' => 4316],
            ['id' => 70, 'kecamatan_id' => 14, 'nama' => 'Cikutra', 'jml_pend' => 3519],
            ['id' => 71, 'kecamatan_id' => 14, 'nama' => 'Padasuka', 'jml_pend' => 3156],
            ['id' => 72, 'kecamatan_id' => 14, 'nama' => 'Pasirlayung', 'jml_pend' => 4913],
            ['id' => 73, 'kecamatan_id' => 14, 'nama' => 'Sukamaju', 'jml_pend' => 4167],
            ['id' => 74, 'kecamatan_id' => 14, 'nama' => 'Sukapada', 'jml_pend' => 3613],

            ['id' => 75, 'kecamatan_id' => 15, 'nama' => 'Cipadung', 'jml_pend' => 4073],
            ['id' => 76, 'kecamatan_id' => 15, 'nama' => 'Cisurupan', 'jml_pend' => 3063],
            ['id' => 77, 'kecamatan_id' => 15, 'nama' => 'Palasari', 'jml_pend' => 3524],
            ['id' => 78, 'kecamatan_id' => 15, 'nama' => 'Pasirbiru', 'jml_pend' => 4212],

            ['id' => 79, 'kecamatan_id' => 16, 'nama' => 'Arjuna', 'jml_pend' => 3015],
            ['id' => 80, 'kecamatan_id' => 16, 'nama' => 'Husen Sastranegara', 'jml_pend' => 4042],
            ['id' => 81, 'kecamatan_id' => 16, 'nama' => 'Pajajaran', 'jml_pend' => 3837],
            ['id' => 82, 'kecamatan_id' => 16, 'nama' => 'Pamoyanan', 'jml_pend' => 3130],
            ['id' => 83, 'kecamatan_id' => 16, 'nama' => 'Pasirkaliki', 'jml_pend' => 4903],
            ['id' => 84, 'kecamatan_id' => 16, 'nama' => 'Sukaraja', 'jml_pend' => 4192],

            ['id' => 85, 'kecamatan_id' => 17, 'nama' => 'Ciumbuleuit', 'jml_pend' => 3405],
            ['id' => 86, 'kecamatan_id' => 17, 'nama' => 'Hegarmanah', 'jml_pend' => 3599],
            ['id' => 87, 'kecamatan_id' => 17, 'nama' => 'Ledeng', 'jml_pend' => 3820],

            ['id' => 88, 'kecamatan_id' => 18, 'nama' => 'Babakan Penghulu', 'jml_pend' => 3616],
            ['id' => 89, 'kecamatan_id' => 18, 'nama' => 'Cisaranten Wetan', 'jml_pend' => 4727],
            ['id' => 90, 'kecamatan_id' => 18, 'nama' => 'Pakemitan', 'jml_pend' => 3273],
            ['id' => 91, 'kecamatan_id' => 18, 'nama' => 'Sukamulya', 'jml_pend' => 4203],

            ['id' => 92, 'kecamatan_id' => 19, 'nama' => 'Cipaganti', 'jml_pend' => 3221],
            ['id' => 93, 'kecamatan_id' => 19, 'nama' => 'Dago', 'jml_pend' => 3168],
            ['id' => 94, 'kecamatan_id' => 19, 'nama' => 'Lebakgede', 'jml_pend' => 3841],
            ['id' => 95, 'kecamatan_id' => 19, 'nama' => 'Lebaksiliwangi', 'jml_pend' => 3384],
            ['id' => 96, 'kecamatan_id' => 19, 'nama' => 'Sadangserang', 'jml_pend' => 4960],
            ['id' => 97, 'kecamatan_id' => 19, 'nama' => 'Sekeloa', 'jml_pend' => 3447],

            ['id' => 98, 'kecamatan_id' => 20, 'nama' => 'Cimincrang', 'jml_pend' => 4692],
            ['id' => 99, 'kecamatan_id' => 20, 'nama' => 'Cisaranten Kidul', 'jml_pend' => 4491],
            ['id' => 100, 'kecamatan_id' => 20, 'nama' => 'Rancabolang', 'jml_pend' => 4408],
            ['id' => 101, 'kecamatan_id' => 20, 'nama' => 'Rancanumpang', 'jml_pend' => 4878],

            ['id' => 102, 'kecamatan_id' => 21, 'nama' => 'Babakansari', 'jml_pend' => 4895],
            ['id' => 103, 'kecamatan_id' => 21, 'nama' => 'Babakansurabaya', 'jml_pend' => 4645],
            ['id' => 104, 'kecamatan_id' => 21, 'nama' => 'Cicaheum', 'jml_pend' => 4645],
            ['id' => 105, 'kecamatan_id' => 21, 'nama' => 'Kebonkangkung', 'jml_pend' => 4784],
            ['id' => 106, 'kecamatan_id' => 21, 'nama' => 'Kebunjayanti', 'jml_pend' => 3521],
            ['id' => 107, 'kecamatan_id' => 21, 'nama' => 'Sukapura', 'jml_pend' => 3136],

            ['id' => 108, 'kecamatan_id' => 22, 'nama' => 'Burangrang', 'jml_pend' => 3917],
            ['id' => 109, 'kecamatan_id' => 22, 'nama' => 'Cijagra', 'jml_pend' => 3674],
            ['id' => 110, 'kecamatan_id' => 22, 'nama' => 'Cikawao', 'jml_pend' => 3866],
            ['id' => 111, 'kecamatan_id' => 22, 'nama' => 'Lingkar Selatan', 'jml_pend' => 3393],
            ['id' => 112, 'kecamatan_id' => 22, 'nama' => 'Malabar', 'jml_pend' => 4867],
            ['id' => 113, 'kecamatan_id' => 22, 'nama' => 'Paledang', 'jml_pend' => 4711],
            ['id' => 114, 'kecamatan_id' => 22, 'nama' => 'Turangga', 'jml_pend' => 4344],

            ['id' => 115, 'kecamatan_id' => 23, 'nama' => 'Jatihandap', 'jml_pend' => 4620],
            ['id' => 116, 'kecamatan_id' => 23, 'nama' => 'Karangpamulang', 'jml_pend' => 3490],
            ['id' => 117, 'kecamatan_id' => 23, 'nama' => 'Pasir Impun', 'jml_pend' => 3356],
            ['id' => 118, 'kecamatan_id' => 23, 'nama' => 'Sindangjaya', 'jml_pend' => 4259],

            ['id' => 119, 'kecamatan_id' => 24, 'nama' => 'Cipadung Kidul', 'jml_pend' => 4858],
            ['id' => 120, 'kecamatan_id' => 24, 'nama' => 'Cipadung Kulon', 'jml_pend' => 3175],
            ['id' => 121, 'kecamatan_id' => 24, 'nama' => 'Cipadung Wetan', 'jml_pend' => 4600],
            ['id' => 122, 'kecamatan_id' => 24, 'nama' => 'Mekarmulya', 'jml_pend' => 3611],

            ['id' => 123, 'kecamatan_id' => 25, 'nama' => 'Cipamokolan', 'jml_pend' => 3165],
            ['id' => 124, 'kecamatan_id' => 25, 'nama' => 'Darwati', 'jml_pend' => 4520],
            ['id' => 125, 'kecamatan_id' => 25, 'nama' => 'Manjahlega', 'jml_pend' => 3911],
            ['id' => 126, 'kecamatan_id' => 25, 'nama' => 'Mekar Jaya', 'jml_pend' => 3444],

            ['id' => 127, 'kecamatan_id' => 26, 'nama' => 'Ancol', 'jml_pend' => 3889],
            ['id' => 128, 'kecamatan_id' => 26, 'nama' => 'Balonggede', 'jml_pend' => 4793],
            ['id' => 129, 'kecamatan_id' => 26, 'nama' => 'Ciateul', 'jml_pend' => 3042],
            ['id' => 130, 'kecamatan_id' => 26, 'nama' => 'Cigereleng', 'jml_pend' => 3029],
            ['id' => 131, 'kecamatan_id' => 26, 'nama' => 'Ciseureuh', 'jml_pend' => 3078],
            ['id' => 132, 'kecamatan_id' => 26, 'nama' => 'Pasirluyu', 'jml_pend' => 4385],
            ['id' => 133, 'kecamatan_id' => 26, 'nama' => 'Pungkur', 'jml_pend' => 4820],

            ['id' => 134, 'kecamatan_id' => 27, 'nama' => 'Cipedes', 'jml_pend' => 3576],
            ['id' => 135, 'kecamatan_id' => 27, 'nama' => 'Pasteur', 'jml_pend' => 3438],
            ['id' => 136, 'kecamatan_id' => 27, 'nama' => 'Sukabungah', 'jml_pend' => 4648],
            ['id' => 137, 'kecamatan_id' => 27, 'nama' => 'Sukagalih', 'jml_pend' => 4698],
            ['id' => 138, 'kecamatan_id' => 27, 'nama' => 'Sukawarna', 'jml_pend' => 3779],

            ['id' => 139, 'kecamatan_id' => 28, 'nama' => 'Gegerkalong', 'jml_pend' => 4015],
            ['id' => 140, 'kecamatan_id' => 28, 'nama' => 'Isola', 'jml_pend' => 4724],
            ['id' => 141, 'kecamatan_id' => 28, 'nama' => 'Sarijadi', 'jml_pend' => 3482],
            ['id' => 142, 'kecamatan_id' => 28, 'nama' => 'Sukarasa', 'jml_pend' => 3202],

            ['id' => 143, 'kecamatan_id' => 29, 'nama' => 'Babakanciamis', 'jml_pend' => 3742],
            ['id' => 144, 'kecamatan_id' => 29, 'nama' => 'Braga', 'jml_pend' => 3405],
            ['id' => 145, 'kecamatan_id' => 29, 'nama' => 'Kebonpisang', 'jml_pend' => 4025],
            ['id' => 146, 'kecamatan_id' => 29, 'nama' => 'Merdeka', 'jml_pend' => 4571],

            ['id' => 147, 'kecamatan_id' => 30, 'nama' => 'Cigending', 'jml_pend' => 3114],
            ['id' => 148, 'kecamatan_id' => 30, 'nama' => 'Pasanggrahan', 'jml_pend' => 3120],
            ['id' => 149, 'kecamatan_id' => 30, 'nama' => 'Pasirendah', 'jml_pend' => 3901],
            ['id' => 150, 'kecamatan_id' => 30, 'nama' => 'Pasirjati', 'jml_pend' => 4416],
            ['id' => 151, 'kecamatan_id' => 30, 'nama' => 'Pasirwangi', 'jml_pend' => 3916],

        ]);
        DB::commit();
    }
}
