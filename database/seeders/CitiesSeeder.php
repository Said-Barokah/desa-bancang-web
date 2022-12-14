<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = array(
            array('id' => '1','name' => 'PIDIE JAYA','prov_id' => '1'),
            array('id' => '2','name' => 'SIMEULUE','prov_id' => '1'),
            array('id' => '3','name' => 'BIREUEN','prov_id' => '1'),
            array('id' => '4','name' => 'ACEH TIMUR','prov_id' => '1'),
            array('id' => '5','name' => 'ACEH UTARA','prov_id' => '1'),
            array('id' => '6','name' => 'PIDIE','prov_id' => '1'),
            array('id' => '7','name' => 'ACEH BARAT DAYA','prov_id' => '1'),
            array('id' => '8','name' => 'GAYO LUES','prov_id' => '1'),
            array('id' => '9','name' => 'ACEH SELATAN','prov_id' => '1'),
            array('id' => '10','name' => 'ACEH TAMIANG','prov_id' => '1'),
            array('id' => '11','name' => 'ACEH BESAR','prov_id' => '1'),
            array('id' => '12','name' => 'ACEH TENGGARA','prov_id' => '1'),
            array('id' => '13','name' => 'BENER MERIAH','prov_id' => '1'),
            array('id' => '14','name' => 'ACEH JAYA','prov_id' => '1'),
            array('id' => '15','name' => 'LHOKSEUMAWE','prov_id' => '1'),
            array('id' => '16','name' => 'ACEH BARAT','prov_id' => '1'),
            array('id' => '17','name' => 'NAGAN RAYA','prov_id' => '1'),
            array('id' => '18','name' => 'LANGSA','prov_id' => '1'),
            array('id' => '19','name' => 'BANDA ACEH','prov_id' => '1'),
            array('id' => '20','name' => 'ACEH SINGKIL','prov_id' => '1'),
            array('id' => '21','name' => 'SABANG','prov_id' => '1'),
            array('id' => '22','name' => 'ACEH TENGAH','prov_id' => '1'),
            array('id' => '23','name' => 'SUBULUSSALAM','prov_id' => '1'),
            array('id' => '24','name' => 'NIAS SELATAN','prov_id' => '2'),
            array('id' => '25','name' => 'MANDAILING NATAL','prov_id' => '2'),
            array('id' => '26','name' => 'DAIRI','prov_id' => '2'),
            array('id' => '27','name' => 'LABUHAN BATU UTARA','prov_id' => '2'),
            array('id' => '28','name' => 'TAPANULI UTARA','prov_id' => '2'),
            array('id' => '29','name' => 'SIMALUNGUN','prov_id' => '2'),
            array('id' => '30','name' => 'LANGKAT','prov_id' => '2'),
            array('id' => '31','name' => 'SERDANG BEDAGAI','prov_id' => '2'),
            array('id' => '32','name' => 'TAPANULI SELATAN','prov_id' => '2'),
            array('id' => '33','name' => 'ASAHAN','prov_id' => '2'),
            array('id' => '34','name' => 'PADANG LAWAS UTARA','prov_id' => '2'),
            array('id' => '35','name' => 'PADANG LAWAS','prov_id' => '2'),
            array('id' => '36','name' => 'LABUHAN BATU SELATAN','prov_id' => '2'),
            array('id' => '37','name' => 'PADANG SIDEMPUAN','prov_id' => '2'),
            array('id' => '38','name' => 'TOBA SAMOSIR','prov_id' => '2'),
            array('id' => '39','name' => 'TAPANULI TENGAH','prov_id' => '2'),
            array('id' => '40','name' => 'HUMBANG HASUNDUTAN','prov_id' => '2'),
            array('id' => '41','name' => 'SIBOLGA','prov_id' => '2'),
            array('id' => '42','name' => 'BATU BARA','prov_id' => '2'),
            array('id' => '43','name' => 'SAMOSIR','prov_id' => '2'),
            array('id' => '44','name' => 'PEMATANG SIANTAR','prov_id' => '2'),
            array('id' => '45','name' => 'LABUHAN BATU','prov_id' => '2'),
            array('id' => '46','name' => 'DELI SERDANG','prov_id' => '2'),
            array('id' => '47','name' => 'GUNUNGSITOLI','prov_id' => '2'),
            array('id' => '48','name' => 'NIAS UTARA','prov_id' => '2'),
            array('id' => '49','name' => 'NIAS','prov_id' => '2'),
            array('id' => '50','name' => 'KARO','prov_id' => '2'),
            array('id' => '51','name' => 'NIAS BARAT','prov_id' => '2'),
            array('id' => '52','name' => 'MEDAN','prov_id' => '2'),
            array('id' => '53','name' => 'PAKPAK BHARAT','prov_id' => '2'),
            array('id' => '54','name' => 'TEBING TINGGI','prov_id' => '2'),
            array('id' => '55','name' => 'BINJAI','prov_id' => '2'),
            array('id' => '56','name' => 'TANJUNG BALAI','prov_id' => '2'),
            array('id' => '57','name' => 'DHARMASRAYA','prov_id' => '3'),
            array('id' => '58','name' => 'SOLOK SELATAN','prov_id' => '3'),
            array('id' => '59','name' => 'SIJUNJUNG (SAWAH LUNTO SIJUNJUNG)','prov_id' => '3'),
            array('id' => '60','name' => 'PASAMAN BARAT','prov_id' => '3'),
            array('id' => '61','name' => 'SOLOK','prov_id' => '3'),
            array('id' => '62','name' => 'PASAMAN','prov_id' => '3'),
            array('id' => '63','name' => 'PARIAMAN','prov_id' => '3'),
            array('id' => '64','name' => 'TANAH DATAR','prov_id' => '3'),
            array('id' => '65','name' => 'PADANG PARIAMAN','prov_id' => '3'),
            array('id' => '66','name' => 'PESISIR SELATAN','prov_id' => '3'),
            array('id' => '67','name' => 'PADANG','prov_id' => '3'),
            array('id' => '68','name' => 'SAWAH LUNTO','prov_id' => '3'),
            array('id' => '69','name' => 'LIMA PULUH KOTO / KOTA','prov_id' => '3'),
            array('id' => '70','name' => 'AGAM','prov_id' => '3'),
            array('id' => '71','name' => 'PAYAKUMBUH','prov_id' => '3'),
            array('id' => '72','name' => 'BUKITTINGGI','prov_id' => '3'),
            array('id' => '73','name' => 'PADANG PANJANG','prov_id' => '3'),
            array('id' => '74','name' => 'KEPULAUAN MENTAWAI','prov_id' => '3'),
            array('id' => '75','name' => 'INDRAGIRI HILIR','prov_id' => '4'),
            array('id' => '76','name' => 'KUANTAN SINGINGI','prov_id' => '4'),
            array('id' => '77','name' => 'PELALAWAN','prov_id' => '4'),
            array('id' => '78','name' => 'PEKANBARU','prov_id' => '4'),
            array('id' => '79','name' => 'ROKAN HILIR','prov_id' => '4'),
            array('id' => '80','name' => 'BENGKALIS','prov_id' => '4'),
            array('id' => '81','name' => 'INDRAGIRI HULU','prov_id' => '4'),
            array('id' => '82','name' => 'ROKAN HULU','prov_id' => '4'),
            array('id' => '83','name' => 'KAMPAR','prov_id' => '4'),
            array('id' => '84','name' => 'KEPULAUAN MERANTI','prov_id' => '4'),
            array('id' => '85','name' => 'DUMAI','prov_id' => '4'),
            array('id' => '86','name' => 'SIAK','prov_id' => '4'),
            array('id' => '87','name' => 'TEBO','prov_id' => '5'),
            array('id' => '88','name' => 'TANJUNG JABUNG BARAT','prov_id' => '5'),
            array('id' => '89','name' => 'MUARO JAMBI','prov_id' => '5'),
            array('id' => '90','name' => 'KERINCI','prov_id' => '5'),
            array('id' => '91','name' => 'MERANGIN','prov_id' => '5'),
            array('id' => '92','name' => 'BUNGO','prov_id' => '5'),
            array('id' => '93','name' => 'TANJUNG JABUNG TIMUR','prov_id' => '5'),
            array('id' => '94','name' => 'SUNGAIPENUH','prov_id' => '5'),
            array('id' => '95','name' => 'BATANG HARI','prov_id' => '5'),
            array('id' => '96','name' => 'JAMBI','prov_id' => '5'),
            array('id' => '97','name' => 'SAROLANGUN','prov_id' => '5'),
            array('id' => '98','name' => 'PALEMBANG','prov_id' => '6'),
            array('id' => '99','name' => 'LAHAT','prov_id' => '6'),
            array('id' => '100','name' => 'OGAN KOMERING ULU TIMUR','prov_id' => '6'),
            array('id' => '101','name' => 'MUSI BANYUASIN','prov_id' => '6'),
            array('id' => '102','name' => 'PAGAR ALAM','prov_id' => '6'),
            array('id' => '103','name' => 'OGAN KOMERING ULU SELATAN','prov_id' => '6'),
            array('id' => '104','name' => 'BANYUASIN','prov_id' => '6'),
            array('id' => '105','name' => 'MUSI RAWAS','prov_id' => '6'),
            array('id' => '106','name' => 'MUARA ENIM','prov_id' => '6'),
            array('id' => '107','name' => 'OGAN KOMERING ULU','prov_id' => '6'),
            array('id' => '108','name' => 'OGAN KOMERING ILIR','prov_id' => '6'),
            array('id' => '109','name' => 'EMPAT LAWANG','prov_id' => '6'),
            array('id' => '110','name' => 'LUBUK LINGGAU','prov_id' => '6'),
            array('id' => '111','name' => 'PRABUMULIH','prov_id' => '6'),
            array('id' => '112','name' => 'OGAN ILIR','prov_id' => '6'),
            array('id' => '113','name' => 'BENGKULU TENGAH','prov_id' => '7'),
            array('id' => '114','name' => 'REJANG LEBONG','prov_id' => '7'),
            array('id' => '115','name' => 'MUKO MUKO','prov_id' => '7'),
            array('id' => '116','name' => 'KAUR','prov_id' => '7'),
            array('id' => '117','name' => 'BENGKULU UTARA','prov_id' => '7'),
            array('id' => '118','name' => 'LEBONG','prov_id' => '7'),
            array('id' => '119','name' => 'KEPAHIANG','prov_id' => '7'),
            array('id' => '120','name' => 'BENGKULU SELATAN','prov_id' => '7'),
            array('id' => '121','name' => 'SELUMA','prov_id' => '7'),
            array('id' => '122','name' => 'BENGKULU','prov_id' => '7'),
            array('id' => '123','name' => 'LAMPUNG UTARA','prov_id' => '8'),
            array('id' => '124','name' => 'WAY KANAN','prov_id' => '8'),
            array('id' => '125','name' => 'LAMPUNG TENGAH','prov_id' => '8'),
            array('id' => '126','name' => 'MESUJI','prov_id' => '8'),
            array('id' => '127','name' => 'PRINGSEWU','prov_id' => '8'),
            array('id' => '128','name' => 'LAMPUNG TIMUR','prov_id' => '8'),
            array('id' => '129','name' => 'LAMPUNG SELATAN','prov_id' => '8'),
            array('id' => '130','name' => 'TULANG BAWANG','prov_id' => '8'),
            array('id' => '131','name' => 'TULANG BAWANG BARAT','prov_id' => '8'),
            array('id' => '132','name' => 'TANGGAMUS','prov_id' => '8'),
            array('id' => '133','name' => 'LAMPUNG BARAT','prov_id' => '8'),
            array('id' => '134','name' => 'PESISIR BARAT','prov_id' => '8'),
            array('id' => '135','name' => 'PESAWARAN','prov_id' => '8'),
            array('id' => '136','name' => 'BANDAR LAMPUNG','prov_id' => '8'),
            array('id' => '137','name' => 'METRO','prov_id' => '8'),
            array('id' => '138','name' => 'BELITUNG','prov_id' => '9'),
            array('id' => '139','name' => 'BELITUNG TIMUR','prov_id' => '9'),
            array('id' => '140','name' => 'BANGKA','prov_id' => '9'),
            array('id' => '141','name' => 'BANGKA SELATAN','prov_id' => '9'),
            array('id' => '142','name' => 'BANGKA BARAT','prov_id' => '9'),
            array('id' => '143','name' => 'PANGKAL PINANG','prov_id' => '9'),
            array('id' => '144','name' => 'BANGKA TENGAH','prov_id' => '9'),
            array('id' => '145','name' => 'KEPULAUAN ANAMBAS','prov_id' => '10'),
            array('id' => '146','name' => 'BINTAN','prov_id' => '10'),
            array('id' => '147','name' => 'NATUNA','prov_id' => '10'),
            array('id' => '148','name' => 'BATAM','prov_id' => '10'),
            array('id' => '149','name' => 'TANJUNG PINANG','prov_id' => '10'),
            array('id' => '150','name' => 'KARIMUN','prov_id' => '10'),
            array('id' => '151','name' => 'LINGGA','prov_id' => '10'),
            array('id' => '152','name' => 'JAKARTA UTARA','prov_id' => '11'),
            array('id' => '153','name' => 'JAKARTA BARAT','prov_id' => '11'),
            array('id' => '154','name' => 'JAKARTA TIMUR','prov_id' => '11'),
            array('id' => '155','name' => 'JAKARTA SELATAN','prov_id' => '11'),
            array('id' => '156','name' => 'JAKARTA PUSAT','prov_id' => '11'),
            array('id' => '157','name' => 'KEPULAUAN SERIBU','prov_id' => '11'),
            array('id' => '158','name' => 'DEPOK','prov_id' => '12'),
            array('id' => '159','name' => 'KARAWANG','prov_id' => '12'),
            array('id' => '160','name' => 'CIREBON','prov_id' => '12'),
            array('id' => '161','name' => 'BANDUNG','prov_id' => '12'),
            array('id' => '162','name' => 'SUKABUMI','prov_id' => '12'),
            array('id' => '163','name' => 'SUMEDANG','prov_id' => '12'),
            array('id' => '164','name' => 'INDRAMAYU','prov_id' => '12'),
            array('id' => '165','name' => 'MAJALENGKA','prov_id' => '12'),
            array('id' => '166','name' => 'KUNINGAN','prov_id' => '12'),
            array('id' => '167','name' => 'TASIKMALAYA','prov_id' => '12'),
            array('id' => '168','name' => 'CIAMIS','prov_id' => '12'),
            array('id' => '169','name' => 'SUBANG','prov_id' => '12'),
            array('id' => '170','name' => 'PURWAKARTA','prov_id' => '12'),
            array('id' => '171','name' => 'BOGOR','prov_id' => '12'),
            array('id' => '172','name' => 'BEKASI','prov_id' => '12'),
            array('id' => '173','name' => 'GARUT','prov_id' => '12'),
            array('id' => '174','name' => 'PANGANDARAN','prov_id' => '12'),
            array('id' => '175','name' => 'CIANJUR','prov_id' => '12'),
            array('id' => '176','name' => 'BANJAR','prov_id' => '12'),
            array('id' => '177','name' => 'BANDUNG BARAT','prov_id' => '12'),
            array('id' => '178','name' => 'CIMAHI','prov_id' => '12'),
            array('id' => '179','name' => 'PURBALINGGA','prov_id' => '13'),
            array('id' => '180','name' => 'KEBUMEN','prov_id' => '13'),
            array('id' => '181','name' => 'MAGELANG','prov_id' => '13'),
            array('id' => '182','name' => 'CILACAP','prov_id' => '13'),
            array('id' => '183','name' => 'BATANG','prov_id' => '13'),
            array('id' => '184','name' => 'BANJARNEGARA','prov_id' => '13'),
            array('id' => '185','name' => 'BLORA','prov_id' => '13'),
            array('id' => '186','name' => 'BREBES','prov_id' => '13'),
            array('id' => '187','name' => 'BANYUMAS','prov_id' => '13'),
            array('id' => '188','name' => 'WONOSOBO','prov_id' => '13'),
            array('id' => '189','name' => 'TEGAL','prov_id' => '13'),
            array('id' => '190','name' => 'PURWOREJO','prov_id' => '13'),
            array('id' => '191','name' => 'PATI','prov_id' => '13'),
            array('id' => '192','name' => 'SUKOHARJO','prov_id' => '13'),
            array('id' => '193','name' => 'KARANGANYAR','prov_id' => '13'),
            array('id' => '194','name' => 'PEKALONGAN','prov_id' => '13'),
            array('id' => '195','name' => 'PEMALANG','prov_id' => '13'),
            array('id' => '196','name' => 'BOYOLALI','prov_id' => '13'),
            array('id' => '197','name' => 'GROBOGAN','prov_id' => '13'),
            array('id' => '198','name' => 'SEMARANG','prov_id' => '13'),
            array('id' => '199','name' => 'DEMAK','prov_id' => '13'),
            array('id' => '200','name' => 'REMBANG','prov_id' => '13'),
            array('id' => '201','name' => 'KLATEN','prov_id' => '13'),
            array('id' => '202','name' => 'KUDUS','prov_id' => '13'),
            array('id' => '203','name' => 'TEMANGGUNG','prov_id' => '13'),
            array('id' => '204','name' => 'SRAGEN','prov_id' => '13'),
            array('id' => '205','name' => 'JEPARA','prov_id' => '13'),
            array('id' => '206','name' => 'WONOGIRI','prov_id' => '13'),
            array('id' => '207','name' => 'KENDAL','prov_id' => '13'),
            array('id' => '208','name' => 'SURAKARTA (SOLO)','prov_id' => '13'),
            array('id' => '209','name' => 'SALATIGA','prov_id' => '13'),
            array('id' => '210','name' => 'SLEMAN','prov_id' => '14'),
            array('id' => '211','name' => 'BANTUL','prov_id' => '14'),
            array('id' => '212','name' => 'YOGYAKARTA','prov_id' => '14'),
            array('id' => '213','name' => 'GUNUNG KIDUL','prov_id' => '14'),
            array('id' => '214','name' => 'KULON PROGO','prov_id' => '14'),
            array('id' => '215','name' => 'GRESIK','prov_id' => '15'),
            array('id' => '216','name' => 'KEDIRI','prov_id' => '15'),
            array('id' => '217','name' => 'SAMPANG','prov_id' => '15'),
            array('id' => '218','name' => 'BANGKALAN','prov_id' => '15'),
            array('id' => '219','name' => 'SUMENEP','prov_id' => '15'),
            array('id' => '220','name' => 'SITUBONDO','prov_id' => '15'),
            array('id' => '221','name' => 'SURABAYA','prov_id' => '15'),
            array('id' => '222','name' => 'JEMBER','prov_id' => '15'),
            array('id' => '223','name' => 'PAMEKASAN','prov_id' => '15'),
            array('id' => '224','name' => 'JOMBANG','prov_id' => '15'),
            array('id' => '225','name' => 'PROBOLINGGO','prov_id' => '15'),
            array('id' => '226','name' => 'BANYUWANGI','prov_id' => '15'),
            array('id' => '227','name' => 'PASURUAN','prov_id' => '15'),
            array('id' => '228','name' => 'BOJONEGORO','prov_id' => '15'),
            array('id' => '229','name' => 'BONDOWOSO','prov_id' => '15'),
            array('id' => '230','name' => 'MAGETAN','prov_id' => '15'),
            array('id' => '231','name' => 'LUMAJANG','prov_id' => '15'),
            array('id' => '232','name' => 'MALANG','prov_id' => '15'),
            array('id' => '233','name' => 'BLITAR','prov_id' => '15'),
            array('id' => '234','name' => 'SIDOARJO','prov_id' => '15'),
            array('id' => '235','name' => 'LAMONGAN','prov_id' => '15'),
            array('id' => '236','name' => 'PACITAN','prov_id' => '15'),
            array('id' => '237','name' => 'TULUNGAGUNG','prov_id' => '15'),
            array('id' => '238','name' => 'MOJOKERTO','prov_id' => '15'),
            array('id' => '239','name' => 'MADIUN','prov_id' => '15'),
            array('id' => '240','name' => 'PONOROGO','prov_id' => '15'),
            array('id' => '241','name' => 'NGAWI','prov_id' => '15'),
            array('id' => '242','name' => 'NGANJUK','prov_id' => '15'),
            array('id' => '243','name' => 'TUBAN','prov_id' => '15'),
            array('id' => '244','name' => 'TRENGGALEK','prov_id' => '15'),
            array('id' => '245','name' => 'BATU','prov_id' => '15'),
            array('id' => '246','name' => 'TANGERANG','prov_id' => '16'),
            array('id' => '247','name' => 'SERANG','prov_id' => '16'),
            array('id' => '248','name' => 'PANDEGLANG','prov_id' => '16'),
            array('id' => '249','name' => 'LEBAK','prov_id' => '16'),
            array('id' => '250','name' => 'TANGERANG SELATAN','prov_id' => '16'),
            array('id' => '251','name' => 'CILEGON','prov_id' => '16'),
            array('id' => '252','name' => 'KLUNGKUNG','prov_id' => '17'),
            array('id' => '253','name' => 'KARANGASEM','prov_id' => '17'),
            array('id' => '254','name' => 'BANGLI','prov_id' => '17'),
            array('id' => '255','name' => 'TABANAN','prov_id' => '17'),
            array('id' => '256','name' => 'GIANYAR','prov_id' => '17'),
            array('id' => '257','name' => 'BADUNG','prov_id' => '17'),
            array('id' => '258','name' => 'JEMBRANA','prov_id' => '17'),
            array('id' => '259','name' => 'BULELENG','prov_id' => '17'),
            array('id' => '260','name' => 'DENPASAR','prov_id' => '17'),
            array('id' => '261','name' => 'MATARAM','prov_id' => '18'),
            array('id' => '262','name' => 'DOMPU','prov_id' => '18'),
            array('id' => '263','name' => 'SUMBAWA BARAT','prov_id' => '18'),
            array('id' => '264','name' => 'SUMBAWA','prov_id' => '18'),
            array('id' => '265','name' => 'LOMBOK TENGAH','prov_id' => '18'),
            array('id' => '266','name' => 'LOMBOK TIMUR','prov_id' => '18'),
            array('id' => '267','name' => 'LOMBOK UTARA','prov_id' => '18'),
            array('id' => '268','name' => 'LOMBOK BARAT','prov_id' => '18'),
            array('id' => '269','name' => 'BIMA','prov_id' => '18'),
            array('id' => '270','name' => 'TIMOR TENGAH SELATAN','prov_id' => '19'),
            array('id' => '271','name' => 'FLORES TIMUR','prov_id' => '19'),
            array('id' => '272','name' => 'ALOR','prov_id' => '19'),
            array('id' => '273','name' => 'ENDE','prov_id' => '19'),
            array('id' => '274','name' => 'NAGEKEO','prov_id' => '19'),
            array('id' => '275','name' => 'KUPANG','prov_id' => '19'),
            array('id' => '276','name' => 'SIKKA','prov_id' => '19'),
            array('id' => '277','name' => 'NGADA','prov_id' => '19'),
            array('id' => '278','name' => 'TIMOR TENGAH UTARA','prov_id' => '19'),
            array('id' => '279','name' => 'BELU','prov_id' => '19'),
            array('id' => '280','name' => 'LEMBATA','prov_id' => '19'),
            array('id' => '281','name' => 'SUMBA BARAT DAYA','prov_id' => '19'),
            array('id' => '282','name' => 'SUMBA BARAT','prov_id' => '19'),
            array('id' => '283','name' => 'SUMBA TENGAH','prov_id' => '19'),
            array('id' => '284','name' => 'SUMBA TIMUR','prov_id' => '19'),
            array('id' => '285','name' => 'ROTE NDAO','prov_id' => '19'),
            array('id' => '286','name' => 'MANGGARAI TIMUR','prov_id' => '19'),
            array('id' => '287','name' => 'MANGGARAI','prov_id' => '19'),
            array('id' => '288','name' => 'SABU RAIJUA','prov_id' => '19'),
            array('id' => '289','name' => 'MANGGARAI BARAT','prov_id' => '19'),
            array('id' => '290','name' => 'LANDAK','prov_id' => '20'),
            array('id' => '291','name' => 'KETAPANG','prov_id' => '20'),
            array('id' => '292','name' => 'SINTANG','prov_id' => '20'),
            array('id' => '293','name' => 'KUBU RAYA','prov_id' => '20'),
            array('id' => '294','name' => 'PONTIANAK','prov_id' => '20'),
            array('id' => '295','name' => 'KAYONG UTARA','prov_id' => '20'),
            array('id' => '296','name' => 'BENGKAYANG','prov_id' => '20'),
            array('id' => '297','name' => 'KAPUAS HULU','prov_id' => '20'),
            array('id' => '298','name' => 'SAMBAS','prov_id' => '20'),
            array('id' => '299','name' => 'SINGKAWANG','prov_id' => '20'),
            array('id' => '300','name' => 'SANGGAU','prov_id' => '20'),
            array('id' => '301','name' => 'MELAWI','prov_id' => '20'),
            array('id' => '302','name' => 'SEKADAU','prov_id' => '20'),
            array('id' => '303','name' => 'KOTAWARINGIN TIMUR','prov_id' => '21'),
            array('id' => '304','name' => 'SUKAMARA','prov_id' => '21'),
            array('id' => '305','name' => 'KOTAWARINGIN BARAT','prov_id' => '21'),
            array('id' => '306','name' => 'BARITO TIMUR','prov_id' => '21'),
            array('id' => '307','name' => 'KAPUAS','prov_id' => '21'),
            array('id' => '308','name' => 'PULANG PISAU','prov_id' => '21'),
            array('id' => '309','name' => 'LAMANDAU','prov_id' => '21'),
            array('id' => '310','name' => 'SERUYAN','prov_id' => '21'),
            array('id' => '311','name' => 'KATINGAN','prov_id' => '21'),
            array('id' => '312','name' => 'BARITO SELATAN','prov_id' => '21'),
            array('id' => '313','name' => 'MURUNG RAYA','prov_id' => '21'),
            array('id' => '314','name' => 'BARITO UTARA','prov_id' => '21'),
            array('id' => '315','name' => 'GUNUNG MAS','prov_id' => '21'),
            array('id' => '316','name' => 'PALANGKA RAYA','prov_id' => '21'),
            array('id' => '317','name' => 'TAPIN','prov_id' => '22'),
            array('id' => '318','name' => 'BANJAR','prov_id' => '22'),
            array('id' => '319','name' => 'HULU SUNGAI TENGAH','prov_id' => '22'),
            array('id' => '320','name' => 'TABALONG','prov_id' => '22'),
            array('id' => '321','name' => 'HULU SUNGAI UTARA','prov_id' => '22'),
            array('id' => '322','name' => 'BALANGAN','prov_id' => '22'),
            array('id' => '323','name' => 'TANAH BUMBU','prov_id' => '22'),
            array('id' => '324','name' => 'BANJARMASIN','prov_id' => '22'),
            array('id' => '325','name' => 'KOTABARU','prov_id' => '22'),
            array('id' => '326','name' => 'TANAH LAUT','prov_id' => '22'),
            array('id' => '327','name' => 'HULU SUNGAI SELATAN','prov_id' => '22'),
            array('id' => '328','name' => 'BARITO KUALA','prov_id' => '22'),
            array('id' => '329','name' => 'BANJARBARU','prov_id' => '22'),
            array('id' => '330','name' => 'KUTAI BARAT','prov_id' => '23'),
            array('id' => '331','name' => 'SAMARINDA','prov_id' => '23'),
            array('id' => '332','name' => 'PASER','prov_id' => '23'),
            array('id' => '333','name' => 'KUTAI KARTANEGARA','prov_id' => '23'),
            array('id' => '334','name' => 'BERAU','prov_id' => '23'),
            array('id' => '335','name' => 'PENAJAM PASER UTARA','prov_id' => '23'),
            array('id' => '336','name' => 'BONTANG','prov_id' => '23'),
            array('id' => '337','name' => 'KUTAI TIMUR','prov_id' => '23'),
            array('id' => '338','name' => 'BALIKPAPAN','prov_id' => '23'),
            array('id' => '339','name' => 'MALINAU','prov_id' => '24'),
            array('id' => '340','name' => 'NUNUKAN','prov_id' => '24'),
            array('id' => '341','name' => 'BULUNGAN (BULONGAN)','prov_id' => '24'),
            array('id' => '342','name' => 'TANA TIDUNG','prov_id' => '24'),
            array('id' => '343','name' => 'TARAKAN','prov_id' => '24'),
            array('id' => '344','name' => 'BOLAANG MONGONDOW (BOLMONG)','prov_id' => '25'),
            array('id' => '345','name' => 'BOLAANG MONGONDOW SELATAN','prov_id' => '25'),
            array('id' => '346','name' => 'MINAHASA SELATAN','prov_id' => '25'),
            array('id' => '347','name' => 'BITUNG','prov_id' => '25'),
            array('id' => '348','name' => 'MINAHASA','prov_id' => '25'),
            array('id' => '349','name' => 'KEPULAUAN SANGIHE','prov_id' => '25'),
            array('id' => '350','name' => 'MINAHASA UTARA','prov_id' => '25'),
            array('id' => '351','name' => 'KEPULAUAN TALAUD','prov_id' => '25'),
            array('id' => '352','name' => 'KEPULAUAN SIAU TAGULANDANG BIARO (SITARO)','prov_id' => '25'),
            array('id' => '353','name' => 'MANADO','prov_id' => '25'),
            array('id' => '354','name' => 'BOLAANG MONGONDOW UTARA','prov_id' => '25'),
            array('id' => '355','name' => 'BOLAANG MONGONDOW TIMUR','prov_id' => '25'),
            array('id' => '356','name' => 'MINAHASA TENGGARA','prov_id' => '25'),
            array('id' => '357','name' => 'KOTAMOBAGU','prov_id' => '25'),
            array('id' => '358','name' => 'TOMOHON','prov_id' => '25'),
            array('id' => '359','name' => 'BANGGAI KEPULAUAN','prov_id' => '26'),
            array('id' => '360','name' => 'TOLI-TOLI','prov_id' => '26'),
            array('id' => '361','name' => 'PARIGI MOUTONG','prov_id' => '26'),
            array('id' => '362','name' => 'BUOL','prov_id' => '26'),
            array('id' => '363','name' => 'DONGGALA','prov_id' => '26'),
            array('id' => '364','name' => 'POSO','prov_id' => '26'),
            array('id' => '365','name' => 'MOROWALI','prov_id' => '26'),
            array('id' => '366','name' => 'TOJO UNA-UNA','prov_id' => '26'),
            array('id' => '367','name' => 'BANGGAI','prov_id' => '26'),
            array('id' => '368','name' => 'SIGI','prov_id' => '26'),
            array('id' => '369','name' => 'PALU','prov_id' => '26'),
            array('id' => '370','name' => 'MAROS','prov_id' => '27'),
            array('id' => '371','name' => 'WAJO','prov_id' => '27'),
            array('id' => '372','name' => 'BONE','prov_id' => '27'),
            array('id' => '373','name' => 'SOPPENG','prov_id' => '27'),
            array('id' => '374','name' => 'SIDENRENG RAPPANG / RAPANG','prov_id' => '27'),
            array('id' => '375','name' => 'TAKALAR','prov_id' => '27'),
            array('id' => '376','name' => 'BARRU','prov_id' => '27'),
            array('id' => '377','name' => 'LUWU TIMUR','prov_id' => '27'),
            array('id' => '378','name' => 'SINJAI','prov_id' => '27'),
            array('id' => '379','name' => 'PANGKAJENE KEPULAUAN','prov_id' => '27'),
            array('id' => '380','name' => 'PINRANG','prov_id' => '27'),
            array('id' => '381','name' => 'JENEPONTO','prov_id' => '27'),
            array('id' => '382','name' => 'PALOPO','prov_id' => '27'),
            array('id' => '383','name' => 'TORAJA UTARA','prov_id' => '27'),
            array('id' => '384','name' => 'LUWU','prov_id' => '27'),
            array('id' => '385','name' => 'BULUKUMBA','prov_id' => '27'),
            array('id' => '386','name' => 'MAKASSAR','prov_id' => '27'),
            array('id' => '387','name' => 'SELAYAR (KEPULAUAN SELAYAR)','prov_id' => '27'),
            array('id' => '388','name' => 'TANA TORAJA','prov_id' => '27'),
            array('id' => '389','name' => 'LUWU UTARA','prov_id' => '27'),
            array('id' => '390','name' => 'BANTAENG','prov_id' => '27'),
            array('id' => '391','name' => 'GOWA','prov_id' => '27'),
            array('id' => '392','name' => 'ENREKANG','prov_id' => '27'),
            array('id' => '393','name' => 'PAREPARE','prov_id' => '27'),
            array('id' => '394','name' => 'KOLAKA','prov_id' => '28'),
            array('id' => '395','name' => 'MUNA','prov_id' => '28'),
            array('id' => '396','name' => 'KONAWE SELATAN','prov_id' => '28'),
            array('id' => '397','name' => 'KENDARI','prov_id' => '28'),
            array('id' => '398','name' => 'KONAWE','prov_id' => '28'),
            array('id' => '399','name' => 'KONAWE UTARA','prov_id' => '28'),
            array('id' => '400','name' => 'KOLAKA UTARA','prov_id' => '28'),
            array('id' => '401','name' => 'BUTON','prov_id' => '28'),
            array('id' => '402','name' => 'BOMBANA','prov_id' => '28'),
            array('id' => '403','name' => 'WAKATOBI','prov_id' => '28'),
            array('id' => '404','name' => 'BAU-BAU','prov_id' => '28'),
            array('id' => '405','name' => 'BUTON UTARA','prov_id' => '28'),
            array('id' => '406','name' => 'GORONTALO UTARA','prov_id' => '29'),
            array('id' => '407','name' => 'BONE BOLANGO','prov_id' => '29'),
            array('id' => '408','name' => 'GORONTALO','prov_id' => '29'),
            array('id' => '409','name' => 'BOALEMO','prov_id' => '29'),
            array('id' => '410','name' => 'POHUWATO','prov_id' => '29'),
            array('id' => '411','name' => 'MAJENE','prov_id' => '30'),
            array('id' => '412','name' => 'MAMUJU','prov_id' => '30'),
            array('id' => '413','name' => 'MAMUJU UTARA','prov_id' => '30'),
            array('id' => '414','name' => 'POLEWALI MANDAR','prov_id' => '30'),
            array('id' => '415','name' => 'MAMASA','prov_id' => '30'),
            array('id' => '416','name' => 'MALUKU TENGGARA BARAT','prov_id' => '31'),
            array('id' => '417','name' => 'MALUKU TENGGARA','prov_id' => '31'),
            array('id' => '418','name' => 'SERAM BAGIAN BARAT','prov_id' => '31'),
            array('id' => '419','name' => 'MALUKU TENGAH','prov_id' => '31'),
            array('id' => '420','name' => 'SERAM BAGIAN TIMUR','prov_id' => '31'),
            array('id' => '421','name' => 'MALUKU BARAT DAYA','prov_id' => '31'),
            array('id' => '422','name' => 'AMBON','prov_id' => '31'),
            array('id' => '423','name' => 'BURU','prov_id' => '31'),
            array('id' => '424','name' => 'BURU SELATAN','prov_id' => '31'),
            array('id' => '425','name' => 'KEPULAUAN ARU','prov_id' => '31'),
            array('id' => '426','name' => 'TUAL','prov_id' => '31'),
            array('id' => '427','name' => 'HALMAHERA BARAT','prov_id' => '32'),
            array('id' => '428','name' => 'TIDORE KEPULAUAN','prov_id' => '32'),
            array('id' => '429','name' => 'TERNATE','prov_id' => '32'),
            array('id' => '430','name' => 'PULAU MOROTAI','prov_id' => '32'),
            array('id' => '431','name' => 'KEPULAUAN SULA','prov_id' => '32'),
            array('id' => '432','name' => 'HALMAHERA SELATAN','prov_id' => '32'),
            array('id' => '433','name' => 'HALMAHERA TENGAH','prov_id' => '32'),
            array('id' => '434','name' => 'HALMAHERA TIMUR','prov_id' => '32'),
            array('id' => '435','name' => 'HALMAHERA UTARA','prov_id' => '32'),
            array('id' => '436','name' => 'YALIMO','prov_id' => '33'),
            array('id' => '437','name' => 'DOGIYAI','prov_id' => '33'),
            array('id' => '438','name' => 'ASMAT','prov_id' => '33'),
            array('id' => '439','name' => 'JAYAPURA','prov_id' => '33'),
            array('id' => '440','name' => 'PANIAI','prov_id' => '33'),
            array('id' => '441','name' => 'MAPPI','prov_id' => '33'),
            array('id' => '442','name' => 'TOLIKARA','prov_id' => '33'),
            array('id' => '443','name' => 'PUNCAK JAYA','prov_id' => '33'),
            array('id' => '444','name' => 'PEGUNUNGAN BINTANG','prov_id' => '33'),
            array('id' => '445','name' => 'JAYAWIJAYA','prov_id' => '33'),
            array('id' => '446','name' => 'LANNY JAYA','prov_id' => '33'),
            array('id' => '447','name' => 'NDUGA','prov_id' => '33'),
            array('id' => '448','name' => 'BIAK NUMFOR','prov_id' => '33'),
            array('id' => '449','name' => 'KEPULAUAN YAPEN (YAPEN WAROPEN)','prov_id' => '33'),
            array('id' => '450','name' => 'PUNCAK','prov_id' => '33'),
            array('id' => '451','name' => 'INTAN JAYA','prov_id' => '33'),
            array('id' => '452','name' => 'WAROPEN','prov_id' => '33'),
            array('id' => '453','name' => 'NABIRE','prov_id' => '33'),
            array('id' => '454','name' => 'MIMIKA','prov_id' => '33'),
            array('id' => '455','name' => 'BOVEN DIGOEL','prov_id' => '33'),
            array('id' => '456','name' => 'YAHUKIMO','prov_id' => '33'),
            array('id' => '457','name' => 'SARMI','prov_id' => '33'),
            array('id' => '458','name' => 'MERAUKE','prov_id' => '33'),
            array('id' => '459','name' => 'DEIYAI (DELIYAI)','prov_id' => '33'),
            array('id' => '460','name' => 'KEEROM','prov_id' => '33'),
            array('id' => '461','name' => 'SUPIORI','prov_id' => '33'),
            array('id' => '462','name' => 'MAMBERAMO RAYA','prov_id' => '33'),
            array('id' => '463','name' => 'MAMBERAMO TENGAH','prov_id' => '33'),
            array('id' => '464','name' => 'RAJA AMPAT','prov_id' => '34'),
            array('id' => '465','name' => 'MANOKWARI SELATAN','prov_id' => '34'),
            array('id' => '466','name' => 'MANOKWARI','prov_id' => '34'),
            array('id' => '467','name' => 'KAIMANA','prov_id' => '34'),
            array('id' => '468','name' => 'MAYBRAT','prov_id' => '34'),
            array('id' => '469','name' => 'SORONG SELATAN','prov_id' => '34'),
            array('id' => '470','name' => 'FAKFAK','prov_id' => '34'),
            array('id' => '471','name' => 'PEGUNUNGAN ARFAK','prov_id' => '34'),
            array('id' => '472','name' => 'TAMBRAUW','prov_id' => '34'),
            array('id' => '473','name' => 'SORONG','prov_id' => '34'),
            array('id' => '474','name' => 'TELUK WONDAMA','prov_id' => '34'),
            array('id' => '475','name' => 'TELUK BINTUNI','prov_id' => '34')
          );
          City::insert($cities);
    }
}
