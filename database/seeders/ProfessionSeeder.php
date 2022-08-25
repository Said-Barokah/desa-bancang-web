<?php

namespace Database\Seeders;

use App\Models\Profession;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $professions = array(
            array('id' => '1','name' => 'Belum/ Tidak Bekerja'),
            array('id' => '2','name' => 'Mengurus Rumah Tangga'),
            array('id' => '3','name' => 'Pelajar/ Mahasiswa'),
            array('id' => '4','name' => 'Pensiunan'),
            array('id' => '5','name' => 'Pewagai Negeri Sipil'),
            array('id' => '6','name' => 'Tentara Nasional Indonesia'),
            array('id' => '7','name' => 'Kepolisisan RI'),
            array('id' => '8','name' => 'Perdagangan'),
            array('id' => '9','name' => 'Petani/ Pekebun'),
            array('id' => '10','name' => 'Peternak'),
            array('id' => '11','name' => 'Nelayan/ Perikanan'),
            array('id' => '12','name' => 'Industri'),
            array('id' => '13','name' => 'Konstruksi'),
            array('id' => '14','name' => 'Transportasi'),
            array('id' => '15','name' => 'Karyawan Swasta'),
            array('id' => '16','name' => 'Karyawan BUMN'),
            array('id' => '17','name' => 'Karyawan BUMD'),
            array('id' => '18','name' => 'Karyawan Honorer'),
            array('id' => '19','name' => 'Buruh Harian Lepas'),
            array('id' => '20','name' => 'Buruh Tani/ Perkebunan'),
            array('id' => '21','name' => 'Buruh Nelayan/ Perikanan'),
            array('id' => '22','name' => 'Buruh Peternakan'),
            array('id' => '23','name' => 'Pembantu Rumah Tangga'),
            array('id' => '24','name' => 'Tukang Cukur'),
            array('id' => '25','name' => 'Tukang Listrik'),
            array('id' => '26','name' => 'Tukang Batu'),
            array('id' => '27','name' => 'Tukang Kayu'),
            array('id' => '28','name' => 'Tukang Sol Sepatu'),
            array('id' => '29','name' => 'Tukang Las/ Pandai Besi'),
            array('id' => '30','name' => 'Tukang Jahit'),
            array('id' => '31','name' => 'Tukang Gigi'),
            array('id' => '32','name' => 'Penata Rias'),
            array('id' => '33','name' => 'Penata Busana'),
            array('id' => '34','name' => 'Penata Rambut'),
            array('id' => '35','name' => 'Mekanik'),
            array('id' => '36','name' => 'Seniman'),
            array('id' => '37','name' => 'Tabib'),
            array('id' => '38','name' => 'Paraji'),
            array('id' => '39','name' => 'Perancang Busana'),
            array('id' => '40','name' => 'Penterjemah'),
            array('id' => '41','name' => 'Imam Masjid'),
            array('id' => '42','name' => 'Pendeta'),
            array('id' => '43','name' => 'Pastor'),
            array('id' => '44','name' => 'Wartawan'),
            array('id' => '45','name' => 'Ustadz/ Mubaligh'),
            array('id' => '46','name' => ' Juru Masak'),
            array('id' => '47','name' => 'Promotor Acara'),
            array('id' => '48','name' => 'Anggota DPR-RI'),
            array('id' => '49','name' => 'Anggota DPD'),
            array('id' => '50','name' => 'Anggota BPK'),
            array('id' => '51','name' => 'Presiden'),
            array('id' => '52','name' => 'Wakil Presiden'),
            array('id' => '53','name' => 'Anggota Mahkamah Konstitusi'),
            array('id' => '54','name' => 'Anggota Kabinet/ Kementerian'),
            array('id' => '55','name' => 'Duta Besar'),
            array('id' => '56','name' => 'Gubernur'),
            array('id' => '57','name' => 'Wakil Gubernur'),
            array('id' => '58','name' => 'Bupati'),
            array('id' => '59','name' => 'Wakil Bupati'),
            array('id' => '60','name' => 'Walikota'),
            array('id' => '61','name' => 'Wakil Walikota'),
            array('id' => '62','name' => 'Anggota DPRD Provinsi'),
            array('id' => '63','name' => 'Anggota DPRD Kabupaten/ Kota'),
            array('id' => '64','name' => 'Dosen'),
            array('id' => '65','name' => 'Guru'),
            array('id' => '66','name' => 'Pilot'),
            array('id' => '67','name' => 'Pengacara'),
            array('id' => '68','name' => 'Notaris'),
            array('id' => '69','name' => 'Arsitek'),
            array('id' => '70','name' => 'Akuntan'),
            array('id' => '71','name' => 'Konsultan'),
            array('id' => '72','name' => 'Dokter'),
            array('id' => '73','name' => 'Bidan'),
            array('id' => '74','name' => 'Perawat'),
            array('id' => '75','name' => 'Apoteker'),
            array('id' => '76','name' => 'Psikiater/ Psikolog'),
            array('id' => '77','name' => 'Penyiar Televisi'),
            array('id' => '78','name' => 'Penyiar Radio'),
            array('id' => '79','name' => 'Pelaut'),
            array('id' => '80','name' => 'Peneliti'),
            array('id' => '81','name' => 'Sopir'),
            array('id' => '82','name' => 'Pialang'),
            array('id' => '83','name' => 'Paranormal'),
            array('id' => '84','name' => 'Pedagang'),
            array('id' => '85','name' => 'Perangkat Desa'),
            array('id' => '86','name' => 'Kepala Desa'),
            array('id' => '87','name' => 'Biarawati'),
            array('id' => '88','name' => 'Wiraswasta')
          );
        Profession::insert($professions);
    }
}
