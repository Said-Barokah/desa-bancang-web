<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Database\Factories\PostFactory;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = array(
            array('id' => '1','category_id' => '5','user_id' => '1','cover' => '/storage/images/blog/xptKbzKaWCJR90YeKSMD14JlsFd1DM1x5ncs7IgU.png','title' => 'Berita ini akan berisi yang berkaitan dengan','slug' => 'berita-ini-akan-berisi-yang-berkaitan-dengan','desc' => '<p>A dentist or dental surgeon will perform the extraction in their clinic and then give the person some instructions for caring for the area as it heals.</p>
          <p>During the appointment, the dental surgeon will inject a strong anesthetic into the area around the tooth to prevent the person from feeling any pain. They will then use a series of instruments to loosen the tooth before pulling it out.</p>
          <p>After removing the tooth, they will place gauze over the extraction site to help control bleeding and promote clotting.</p>
          <p>Learn more about tooth extraction aftercare in this article. We also provide a general healing timeline and explain when to speak to a dentist.</p>
          <h3>Aftercare</h3>
          <p>Aftercare for an extracted tooth can vary slightly depending on a few factors.</p>
          <p>These include which tooth the dentist took out, as some teeth have deeper roots than others and take longer to heal. However, most people find that pain decreases after about 3 days.</p>
          <p>One of the most important aspects of aftercare is maintaining the blood clot that forms in the socket where the tooth used to be.</p>
          <p>Caring for this blood clot is key to the healing process, and it helps prevent painful complications, such as dry socket.</p>
          <h4>Days 1–2</h4>
          <p>Much of the aftercare in the first couple of days following an extraction focuses on allowing a blood clot to form and caring for the mouth in general.</p>
          <p>As some experts note, low level bleeding for up to 24 hours after an extraction is perfectly normal. However, active bleeding after this point requires treatment.</p>
          <p>Here are a few additional tips for the first 2 days of aftercare:</p>
          <ul>
          <li><strong>Get plenty of rest:</strong> Expect to be resting for at least the first 24 hours after the extraction.</li>
          <li><strong>Change the gauze as necessary:</strong> It is important to leave the first gauze in the mouth for at least a few hours to allow the clot to form. After this, it is fine to change the gauze as often as necessary.</li>
          <li><strong>Avoid rinsing:</strong> As tempting as it can be, avoid rinsing, swishing, or gargling anything in the mouth while the area is still clotting. These actions may dislodge any clot that is forming and affect the healing time.</li>
          <li><strong>Do not use straws:</strong> Using a straw places a lot of pressure on the healing wound, which can easily dislodge the blood clot.</li>
          <li><strong>Do not spit:</strong> Spitting also creates pressure in the mouth, which may dislodge the blood clot.</li>
          <li><strong>Avoid blowing the nose or sneezing:</strong> If the surgeon removed a tooth from the upper half of the mouth, blowing the nose or sneezing can create pressure in the head that may dislodge the developing blood clot. Avoid blowing the nose and sneezing if possible.</li>
          <li><strong>Do not smoke:</strong> Smoking creates the same pressure in the mouth as using a straw. While it is best to avoid smoking during the entire healing process, it is crucial not to smoke during the first couple of days as the blood clot forms.</li>
          <li><strong>Take pain relievers:</strong> Over-the-counter pain relievers may help reduce pain and inflammation.</li>
          <li><strong>Use cold compresses:</strong> Placing an ice pack or a towel-wrapped bag of ice on the area for 10–20 minutes at a time may help dull pain.</li>
          <li><strong>Elevate the head:</strong> When sleeping, use extra pillows to elevate the head. Lying too flat may allow blood to pool in the head and prolong healing time.</li>
          <li><strong>Take any medications that the dentist recommends:</strong> The dental surgeon may order prescription medications for complex removals. It is important to complete the full course of treatment.</li>
          </ul>
          <h4>Days 3–10</h4>
          <p>After the clot has formed, it is vital to keep it securely in place and to follow some extra steps for oral hygiene to help prevent other issues.</p>
          <p>Tips for aftercare between the third and 10th day include:</p>
          <ul>
          <li><strong>Saline rinses:</strong> When the clot is securely in place, gently rinse the mouth with a warm saline solution or a pinch of salt in warm water. This mixture helps kill bacteria in the mouth, which may prevent infections as the mouth heals.</li>
          <li><strong>Brush and floss as usual:</strong> Brush and floss the teeth as usual, but take care to avoid the extracted tooth altogether. The saline solution and any medicated mouthwash that a dentist recommends should be enough to clean this area.</li>
          <li><strong>Eat soft foods:</strong> Throughout the entire healing process, people should eat soft foods that do not require a lot of chewing and are unlikely to become trapped in the empty socket. Consider sticking to soups, yogurt, applesauce, and similar foods. Avoid hard toast, chips, and foods containing seeds.</li>
          </ul>
          <h4>Aftercare for multiple teeth</h4>
          <p>Sometimes, dental surgeons will need to extract more than one tooth at a time. When extracting multiple teeth, the surgeon is more likely to recommend general anesthesia instead of using a local anesthetic.</p>
          <p>The person will, therefore, be unconscious throughout the process. The dentist will also give them some special instructions leading up to the extraction, such as avoiding food for a certain time. After the procedure, the person will need someone else to drive them home.</p>
          <p>Caring for multiple extractions can be challenging, especially if they are on different sides of the mouth. Dentists may have specific instructions for these cases, and they may request a follow-up appointment shortly after the extraction.</p>
          <p>They may also use clotting aids in the extraction sites. These are small pieces of natural material that helps clotting. The body breaks the clotting aids down safely and absorbs them over time.</p>','keywords' => 'Berita ini akan berisi yang berkaitan dengan','meta_desc' => 'Berita ini akan berisi yang berkaitan dengan','created_at' => '2022-07-19 14:57:15','updated_at' => '2022-07-19 15:00:21','deleted_at' => NULL),
            array('id' => '2','category_id' => '3','user_id' => '1','cover' => '/storage/images/blog/ZWYhJxa95Xvl7vA2MZY0rWbbdqiAOdPeCul7klBO.png','title' => 'Semua','slug' => 'semua','desc' => '<p>Deskripsi....</p>','keywords' => 'semua','meta_desc' => 'semua','created_at' => '2022-07-26 04:21:22','updated_at' => '2022-08-15 09:08:41','deleted_at' => '2022-08-15 09:08:41'),
            array('id' => '3','category_id' => '1','user_id' => '3','cover' => '/storage/images/blog/KarcT8GojEP8AkUaAGhmUZH4jtkYicoABbXDCS7u.png','title' => 'Data Desa','slug' => 'data-desa','desc' => '<table><tbody><tr><th colspan="1" rowspan="1"><p>Data Desa</p></th><th colspan="1" rowspan="1"><p>Mantap</p></th><th colspan="1" rowspan="1"><p>Mantap</p></th></tr><tr><td colspan="1" rowspan="1"><p></p></td><td colspan="1" rowspan="1"><p></p></td><td colspan="1" rowspan="1"><p></p></td></tr><tr><td colspan="1" rowspan="1"><p></p></td><td colspan="1" rowspan="1"><p></p></td><td colspan="1" rowspan="1"><p></p></td></tr></tbody></table>','keywords' => 'asa','meta_desc' => 'sasassa','created_at' => '2022-07-26 13:46:25','updated_at' => '2022-08-07 14:03:15','deleted_at' => NULL),
            array('id' => '4','category_id' => '5','user_id' => '1','cover' => '/storage/images/blog/G6DEzvzy1gXW2u8yYNprOrMhMQVGplefN3DlhsDo.png','title' => 'Data','slug' => 'asas','desc' => '<p>Deskripsi....</p>','keywords' => 'assa','meta_desc' => 'saas','created_at' => '2022-07-27 07:36:17','updated_at' => '2022-08-15 08:41:47','deleted_at' => NULL),
            array('id' => '7','category_id' => '4','user_id' => '1','cover' => '/storage/images/blog/hmzeCzJD5v2x8lgn9INmnEw2t2D2gO9T4aDsDIYS.png','title' => 'asasasa','slug' => 'asasasa','desc' => '<p>Deskripsi....</p>','keywords' => 'asa','meta_desc' => 'asas','created_at' => '2022-08-15 09:05:02','updated_at' => '2022-08-15 09:05:38','deleted_at' => '2022-08-15 09:05:38'),
            array('id' => '8','category_id' => '4','user_id' => '1','cover' => '/storage/images/blog/5PA28nuvdmau1oSXyo6EMVIjSKuKScKZf8JIVmJS.png','title' => 'sas','slug' => 'sas','desc' => '<p>sdsd</p>','keywords' => 'dsdsds','meta_desc' => 'dsdsds','created_at' => '2022-08-15 09:23:30','updated_at' => '2022-08-15 09:58:21','deleted_at' => NULL)
          );

          Post::insert($posts);

          $post_tag = array(
            array('id' => '1','post_id' => '1','tag_id' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '2','post_id' => '1','tag_id' => '6','created_at' => NULL,'updated_at' => NULL),
            array('id' => '3','post_id' => '1','tag_id' => '4','created_at' => NULL,'updated_at' => NULL),
            array('id' => '4','post_id' => '2','tag_id' => '6','created_at' => NULL,'updated_at' => NULL),
            array('id' => '5','post_id' => '2','tag_id' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '6','post_id' => '1','tag_id' => '2','created_at' => '2022-07-26 12:14:47','updated_at' => '2022-07-26 12:14:47'),
            array('id' => '7','post_id' => '3','tag_id' => '2','created_at' => NULL,'updated_at' => NULL),
            array('id' => '8','post_id' => '3','tag_id' => '1','created_at' => NULL,'updated_at' => NULL),
            array('id' => '9','post_id' => '4','tag_id' => '3','created_at' => NULL,'updated_at' => NULL),
            array('id' => '10','post_id' => '7','tag_id' => '4','created_at' => NULL,'updated_at' => NULL),
            array('id' => '12','post_id' => '8','tag_id' => '4','created_at' => NULL,'updated_at' => NULL)
          );

          DB::table('post_tag')->insert($post_tag);

    }
}
