<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = array(
            array('id' => '1','path_profile_photo' => '/storage/images/profil/VSykNziMVjtU5WheGPldzIwHdxDsFM3pJi7xdmPu.png','name' => 'Said Admin','email' => 'yanginiemailnyasaid@gmail.com','email_verified_at' => '2022-07-17 05:08:10','password' => '$2y$10$a6kgdv1HizI2PIlkYUJEKeKiL6vvzSDmn39nS/tnfj69ghHTKZag2','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'remember_token' => 'kcsec8L8m9pcucQw2YC3owVGZv6yChe47HB5YtDTss6PJjR0oUEetQoAfnYS','created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-09 19:29:19'),
            array('id' => '2','path_profile_photo' => '/storage/images/profil/7Cm1wz2jYCfJOaB9WivMPEJUlqICdjDBwOXw4osF.jpg','name' => 'Mustofa','email' => 'user@role.com','email_verified_at' => '2022-07-23 04:46:26','password' => '$2y$10$X6dID1ASs0ZdajSl0FYhQ.MDY4JLpE4OFrKgHKsddoKAMe.fR2WUi','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'remember_token' => NULL,'created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-07 13:56:47'),
            array('id' => '3','path_profile_photo' => NULL,'name' => 'Super Admin Role','email' => 'SuperAdmin@role.com','email_verified_at' => '2022-08-07 10:02:13','password' => '$2y$10$NkeGuk82ari19C2au4FGJe/lAC6gvToSrdBGpx0D/lpF6zhSoPQcu','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'remember_token' => NULL,'created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-07 10:02:13'),
            array('id' => '4','path_profile_photo' => NULL,'name' => 'Super Admin Role','email' => '190411100045@student.trunojoyo.ac.id','email_verified_at' => NULL,'password' => '$2y$10$JnHT8YvfJ0RNgy0MPm6QG.M.907CqI7v9ppsrglsEXPZwSAnPlYmm','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'remember_token' => NULL,'created_at' => '2022-07-17 05:06:22','updated_at' => '2022-07-17 05:06:22'),
            array('id' => '5','path_profile_photo' => NULL,'name' => 'Super Admin Role','email' => 'akunnasaid@gmail.com','email_verified_at' => '2022-08-07 22:14:29','password' => '$2y$10$8BY5UdTaHwpO5wIhCKXuquHJKEW2GVGS6iQMrEqQm31oVxQanpYtC','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'remember_token' => NULL,'created_at' => '2022-07-17 05:06:22','updated_at' => '2022-08-07 22:14:29'),
            array('id' => '6','path_profile_photo' => NULL,'name' => 'User Said','email' => '190411100047@student.trunojoyo.ac.id','email_verified_at' => '2022-07-23 05:03:43','password' => '$2y$10$Y.g9z8di2OuCwGSaXLxNyO.5joqVp.O.lWYF732vxSqFfk0a.MvK.','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'remember_token' => NULL,'created_at' => '2022-07-23 05:03:00','updated_at' => '2022-07-23 05:03:43'),
            array('id' => '7','path_profile_photo' => '/storage/images/profil/zImSTVPEe6OwYvV85yzQYHROIube4ukW7NYfZFOD.png','name' => 'Ahmad','email' => 'ahmadROle@gmail.com','email_verified_at' => NULL,'password' => '$2y$10$2n.NNiHVmGsiitmOvi91IOh08a.cY3s1FAl9tDBdcp2QVSezB6wFq','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'remember_token' => NULL,'created_at' => '2022-08-07 15:14:15','updated_at' => '2022-08-07 15:54:11'),
            array('id' => '8','path_profile_photo' => '/storage/images/profil/V6ZfxznQovZg8rWHGm3NINyNGU2rAH19fWzgoQk7.png','name' => 'user said','email' => 'usersaid@user.com','email_verified_at' => '2022-08-07 22:57:51','password' => '$2y$10$5ulRquktJnKLv21FwdogAOuvk.4KcfrDN42A/Zb42oKlPcBHSry4C','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'remember_token' => NULL,'created_at' => '2022-08-07 22:55:54','updated_at' => '2022-08-07 23:02:57'),
            array('id' => '9','path_profile_photo' => NULL,'name' => 'a','email' => '1904111005@student.trunojoyo.ac.id','email_verified_at' => NULL,'password' => '$2y$10$3CUietkHKLjauveUgXBMbeAAWQjZfMEK/WR.epmiQTVcCvPIwUTje','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'remember_token' => NULL,'created_at' => '2022-08-09 20:00:04','updated_at' => '2022-08-09 20:00:04'),
            array('id' => '10','path_profile_photo' => NULL,'name' => 'sad','email' => '190411100045@student.tojoyo.ac.id','email_verified_at' => '2022-08-12 09:25:10','password' => '$2y$10$Se2e7.Sx7c9kGScEssTwG.G7gVqs/n65qJQJb3j9E7xpwH.7g1f2u','two_factor_secret' => NULL,'two_factor_recovery_codes' => NULL,'two_factor_confirmed_at' => NULL,'remember_token' => NULL,'created_at' => '2022-08-12 09:20:39','updated_at' => '2022-08-12 09:25:10')
          );

          User::insert($users);
          $model_has_roles = array(
            array('role_id' => '1','model_type' => 'App\\Models\\User','model_id' => '1'),
            array('role_id' => '1','model_type' => 'App\\Models\\User','model_id' => '5'),
            array('role_id' => '1','model_type' => 'App\\Models\\User','model_id' => '7'),
            array('role_id' => '2','model_type' => 'App\\Models\\User','model_id' => '2'),
            array('role_id' => '2','model_type' => 'App\\Models\\User','model_id' => '8'),
            array('role_id' => '2','model_type' => 'App\\Models\\User','model_id' => '9'),
            array('role_id' => '2','model_type' => 'App\\Models\\User','model_id' => '10'),
            array('role_id' => '3','model_type' => 'App\\Models\\User','model_id' => '3'),
            array('role_id' => '3','model_type' => 'App\\Models\\User','model_id' => '4'),
            array('role_id' => '3','model_type' => 'App\\Models\\User','model_id' => '6')
          );
          DB::table('model_has_roles')->insert($model_has_roles);
    }
}
