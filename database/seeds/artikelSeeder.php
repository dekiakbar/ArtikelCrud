<?php

use Illuminate\Database\Seeder;

class artikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$judul = ['Linux','Ubuntu','Pengertian Arduino'];
    	$slug = ['linux','ubuntu','pengertian-arduino'];
    	$kutipan = ['linux adalah linux','Ubuntu adalah ubuntu','Pengertian Arduino'];
    	$kategori_id = ['2','2','3'];
    	$tag_id = ['9,10,11,12,13','9','15,16,17,18,19'];
    	$meta_keyword = ['linux, opensource','ubuntu,terminal,','Arduino nano, Arduino Mega'];
    	$meta_deskripsi = ['artikel linux','artikel ubuntu','arduino'];
    	$foto = ['1519771814.jpg','1519773998.jpg','1519777718.png'];
    	$status = ['release','release','release'];

    	$isi = [
    		'<h2><img alt="" src="http://localhost:8000/media/photos/1/5a95e8f2ba956.jpg" style="height:418px; width:670px" /></h2>
           
           <h2>Pengertian Ubuntu</h2>
           
           <p>Ubuntu adalah salah satu distribusi Linux yang berbasiskan Debian dan didistribusikan menjadi perangkat lunak sistem operasi yang bebas. Secara singkat dan jelasnya yaitu Ubuntu adalah sejenis sistem operasi yang berbasiskan Linux Debian.</p>
           
           <p>Ubuntu adalah proyek yang disponsori perusahaan Canonical LTD , yang berasal dari Afrika Selatan . Nama Ubuntu pun juga berasal dari filosofi dari Afrika Selatan yang berarti &ldquo;Kemanusiaan kepada sesama&rdquo;.</p>
           
           <p>Ubuntu ditujukan untuk penggunaan secara pribadi , namun ubuntu juga disediakan dalam bentuk sistem operasi ubuntu server .</p>
           
           <p>Varian atau macam dari ubuntu sangat banyak yaitu Kubuntu, Xubuntu, Lubuntu, Edubuntu, Mythbuntu, Blackbuntu. Namun hanya 3 yang dibiayai resmi dari Canonical LTD , yaitu Xubuntu, Lubuntu dan Kubuntu.</p>
           
           <h2>Macam-macan Linux Ubuntu :</h2>
           
           <p>1. Kubuntu</p>
           
           <p>Pada kubuntu lebih memakai sumber daya yang lebih besar dari pada pemakaian ubuntu biasa . Pada kubuntu memakai desktop environment K-Plasma .</p>
           
           <p>2. Xubuntu</p>
           
           <p>Xubuntu adalah ubuntu yang memakai desktop environment Xfce . Xubuntu lebih membutuhkan sumber daya yang lebih sdikit .</p>
           
           <p>3. Lubuntu</p>
           
           <p>Lubuntu adalah ubuntu yang memakai desktop environmet LXDE . Lubuntu adalah ubuntu yang paling sedikit membutuhkan sumber daya .</p>
           
           <p>3. Edubuntu</p>
           
           <p>Edubuntu adalah ubuntu yang ditujukan untuk penggunaan rumahan dan sekolahan . Edubuntu adalah gabungan dari Ubuntu dengan GNOME desktop environment.</p>
           
           <p>4. Mythbuntu</p>
           
           <p>Mythbuntu memakai desktop environment xfce , sama dengan yang digunakan oleh Xubuntu . Mythbuntu ditujukan untuk membuat teater rumahan dengan MythTV.</p>
           
           <p>5. Blackbuntu</p>
           
           <p>Blackbuntu adalah ubuntu yang digunakan untuk para pengguna advance seperti hacker peretas . Seperti namanya , blackbuntu biasa digunakan untuk meretas jaringan, peretas keamanan, digital forensic.</p>
           
           <p>Pada desktop ubuntu memakai desktop environment graphic , desktop ubuntu yang paling terkenal yaitu :</p>
		',
    		'<h3><img alt="" src="http://localhost:8000/media/photos/1/5a95e00dc80e3.jpg" style="height:383px; width:613px" /></h3>
           
           <h3>Kelebihan dan Kekurangan Linux</h3>
           
           <p>Apabila terdapat dua produk yang sama peruntukkannya sudah lazim bagi kita membandingkan kedua atau lebih produk tersebut. Linux sama halnya dengan produk-produk lain yang mempunyai kelebihan dan kekurangan. Berikut ini kami ulas beberapa kelebihan dan kekurangan sistem operasi Linux.</p>
           
           <p><strong>Kelebihan Linux</strong></p>
           
           <p>Open Source; Linux adalah salah satu sistem operasi yang bersifat open source, bebas untuk dimiliki, bebas untuk dikembangkan, dan bebas untuk didistribusikan ulang.</p>
           
           <p>Freeware; Linux merupakan sistem operasi yang mempunyai bersifat Freeware, hal ini berarti siapapun baik untuk penggunaan pribadi, kelompok, dan instansi sekalipun dapat menggunakan sistem operasi ini secara bebas dan tanpa dituntut untuk membayar royalty kepada si penciptanya.</p>
           
           <p>Minimal Hardware; Linux hanya membutuhkan spesifikasi hardware komputer yang rendah, namun tetap untuk kebutuhan yang tinggi seperti grafis dan lainnya disarankan untuk menggunakan spesifikasi yang lebih tinggi.</p>
           
           <ul>
           \t<li>Skalabilitas; Linux dapat berjalan pada mesin sekecil 3Com Palm Pilot dan Digital Itsy atau pada mesin besar seperti Beowulf Clusters.</li>
           \t<li>Stabilitas; Keandalan linux dipercaya oleh badan sekelas NASA, NASA menggunakan sistem operasi Linux untuk sebuah percobaan tanaman di luar angkasa yang membutuhkan kestabilan sistem tinggi.</li>
           </ul>
           
           <p><em>Shared Libraries; Linux menggunakan sistem penomoran versi Shared Libraries. Sehingga memungkinkan untuk memperbaharui versi tanpa akan adanya kerusakan pada program lain.</em></p>
           
           <p><em>Non-Fragmentasi; Pengguna linux dipermudah dalam penggunaan untuk mengedit, membuat, dan menghapus file tanpa harus kuatir akan terjadinya fragmentasi pada program atau data yang ada.</em></p>
           
           <p><em>Kebal Virus; Linux lebih kebal terhadap serangan virus dibandingkan dengan sistem operasi lain seperti yang berbasis DOS. Hal ini merupakan yang paling penting karena berhubungan dengan sistem keamanan.</em></p>
           
           <p><strong>Masih terdapat beberapa kelebihan lainnya dari sistem operasi linux, yaitu: Bugfix, Native Protocol TCP/IP, File System 32 Bit, Multi User, Multiconcole, Multitasiking, Virtual Memory, Akses Sistem File, EMulator, Partition Mounting. Selain itu Linux juga mendukung beberapa software penting untuk sebuah server andal, diantaranya: Proxy Serverl Local, Transparent Proxy, Web Server, FTP Server, Remote, Firewall, Shell Programmbale. Selain itu Linux juga menyediakan dukungan terhadap fasilitas GUI (Graphic User Interface).</strong></p>
           
           <p><strong>Kekurangan Linux</strong></p>
           
           <p>Disamping seabreg kelebihan Linux, terdapat beberapa kekurangan yang terdapat pada sistem operasi gratis ini.</p>
           
           <p>User awam akan mengalami kesulitan ketika pertama kali menggunakan Linux, karena sistem operasi ini sama sekali berbeda dengan sistem operasi populer semacam Windows.</p>'
           ,
           ' <p><img alt="" src="http://localhost:8000/media/photos/1/5a95f749936b8.jpg" style="height:288px; width:435px" /></p>
           
           <p><strong>Arduino</strong> adalah pengendali mikro single-board yang bersifat open-source, diturunkan dari Wiring platform, dirancang untuk memudahkan penggunaan elektronik dalam berbagai bidang. Hardwarenya memiliki prosesor Atmel AVR dan softwarenya memiliki bahasa pemrograman sendiri. Saat ini Arduino sangat populer di seluruh dunia. Banyak pemula yang belajar mengenal robotika dan elektronika lewat Arduino karena mudah dipelajari. Tapi tidak hanya pemula, para hobbyist atau profesional pun ikut senang mengembangkan aplikasi elektronik menggunakan Arduino. Bahasa yang dipakai dalam Arduino bukan assembler yang relatif sulit, tetapi bahasa C yang disederhanakan dengan bantuan pustaka-pustaka (libraries) Arduino. Arduino juga menyederhanakan proses bekerja dengan mikrokontroler, sekaligus menawarkan berbagai macam kelebihan antara lain:</p>
           
           <p>* Murah &ndash; Papan (perangkat keras) Arduino biasanya dijual relatif murah (antara 125ribu hingga 400ribuan rupiah saja) dibandingkan dengan platform mikrokontroler pro lainnya. Jika ingin lebih murah lagi, tentu bisa dibuat sendiri dan itu sangat mungkin sekali karena semua sumber daya untuk membuat sendiri Arduino tersedia lengkap di website Arduino bahkan di website-website komunitas Arduino lainnya. Tidak hanya cocok untuk Windows, namun juga cocok bekerja di Linux.</p>
           
           <p>* Sederhana dan mudah pemrogramannya &ndash; Perlu diketahui bahwa lingkungan pemrograman di Arduino mudah digunakan untuk pemula, dan cukup fleksibel bagi mereka yang sudah tingkat lanjut. Untuk guru/dosen, Arduino berbasis pada lingkungan pemrograman Processing, sehingga jika mahasiswa atau murid-murid terbiasa menggunakan Processing tentu saja akan mudah menggunakan Arduino.</p>'
        ];

        foreach ($judul as $indek => $hiraukan) {
        
	        DB::table('artikel')->insert([
	        	'judul' => $judul[$indek],
	        	'slug' => $slug[$indek],
	        	'kutipan' => $kutipan[$indek],
	        	'kategori_id' => $kategori_id[$indek],
	        	'tag_id' => $tag_id[$indek],
	        	'isi' => $isi[$indek],
	        	'meta_keyword' => $meta_keyword[$indek],
	        	'meta_deskripsi' => $meta_deskripsi[$indek],
	        	'foto' => $foto[$indek],
	        	'status' => $status[$indek],
	        	'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
	        ]);
        }
    }
}
