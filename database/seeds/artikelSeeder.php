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
    	$judul = ['Linux','Ubuntu','Pengertian Arduino','Pengertian Resistor','Laravel 5.5','Debian'];
    	$slug = ['linux','ubuntu','pengertian-arduino','pengertian-resistor','laravel-55','debian'];
    	$kutipan = [
        'Ubuntu adalah salah satu distribusi Linux yang berbasiskan Debian dan didistribusikan menjadi perangkat lunak sistem operasi yang bebas. Secara singkat dan jelasnya yaitu Ubuntu adalah sejenis sistem operasi yang berbasiskan Linux Debian. Ubuntu adalah proyek yang disponsori perusahaan Canonical LTD , yang berasal dari Afrika Selatan . Nama Ubuntu pun juga berasal dari filosofi dari Afrika Selatan yang berarti “Kemanusiaan kepada sesama”. Ubuntu ditujukan untuk penggunaan secara pribadi , namun ubuntu juga disediakan dalam bentuk sistem operasi ubuntu server . Varian atau macam dari ubuntu sangat banyak yaitu Kubuntu, Xubuntu, Lubuntu, Edubuntu, Mythbuntu, Blackbuntu. Namun hanya 3 yang dibiayai resmi dari Canonical LTD , yaitu Xubuntu, Lubuntu dan Kubuntu.'
        ,
        'Open Source; Linux adalah salah satu sistem operasi yang bersifat open source, bebas untuk dimiliki, bebas untuk dikembangkan, dan bebas untuk didistribusikan ulang.User awam akan mengalami kesulitan ketika pertama kali menggunakan Linux, karena sistem operasi ini sama sekali berbeda dengan sistem operasi populer semacam Windows.User awam akan mengalami kesulitan ketika pertama kali menggunakan Linux, karena sistem operasi ini sama sekali berbeda dengan sistem operasi populer semacam Windows. Freeware; Linux merupakan sistem operasi yang mempunyai bersifat Freeware, hal ini berarti siapapun baik untuk penggunaan pribadi, kelompok, dan instansi sekalipun dapat menggunakan sistem operasi ini secara bebas dan tanpa dituntut untuk membayar royalty kepada si penciptanya. Minimal Hardware; Linux hanya membutuhkan spesifikasi hardware komputer yang rendah, namun tetap untuk kebutuhan yang tinggi seperti grafis dan lainnya disarankan untuk menggunakan spesifikasi yang lebih tinggi.'
        ,
        'Arduino adalah pengendali mikro single-board yang bersifat open-source, diturunkan dari Wiring platform, dirancang untuk memudahkan penggunaan elektronik dalam berbagai bidang. Hardwarenya memiliki prosesor Atmel AVR dan softwarenya memiliki bahasa pemrograman sendiri. Saat ini Arduino sangat populer di seluruh dunia. Banyak pemula yang belajar mengenal robotika dan elektronika lewat Arduino karena mudah dipelajari.Hardwarenya memiliki prosesor Atmel AVR dan softwarenya memiliki bahasa pemrograman sendiri. Saat ini Arduino sangat populer di seluruh dunia. Banyak pemula yang belajar mengenal robotika dan elektronika lewat Arduino karena mudah dipelajari. Tapi tidak hanya pemula, para hobbyist atau profesional pun ikut senang mengembangkan aplikasi elektronik menggunakan Arduino. Bahasa yang dipakai dalam Arduino bukan assembler yang relatif sulit, tetapi bahasa C yang disederhanakan dengan bantuan pustaka-pustaka (libraries) Arduino. Arduino juga menyederhanakan proses bekerja dengan mikrokontroler, '
        ,
        'Untuk menyatakan resistansi sebaiknya disertakan batas kemampuan dayanya. Umumnya berbagai jenis pada resistor dibuat dari bahan dan sifat atau karakteristik yang berbeda. Spesifikasi lain yang perlu diperhatikan dalam memilih resitor pada suatu rancangan selain besar resistansi adalah besar watt-nya. Akibat dari resistor yang bekerja dengan konsep dialiri arus listrik, maka akan terjadi suatu kondisi yang disebut disipasi daya berupa panas sebesar W=I2R Watt.Tetapi umumnya untuk jenis  maka akan terjadi suatu kondisi yang disebut disipasi daya berupa panas sebesar W=I2R Watt.Tetapi umumnya untuk jenis resistor yang berukuran lebih besar (jumbo) nilai resistansi dicetak langsung dibadannya sehingga dapat terlihat, misalnya 100Ω 5W. Tetapi umumnya untuk jenis resistor yang berukuran lebih besar (jumbo) nilai resistansi dicetak langsung dibadannya sehingga dapat terlihat, misalnya 100Ω 5W. Tetapi umumnya untuk jenis resistor yang berukuran lebih besar (jumbo) nilai resistansi dicetak langsung dibadannya sehingga dapat terlihat, misalnya 100Ω 5W.'
        ,
        ' Laravel adalah sebuah framework PHP yang dirilis dibawah lisensi MIT, dibangun dengan konsep MVC (model view controller). Laravel adalah pengembangan website berbasis MVP yang ditulis dalam PHP yang dirancang untuk meningkatkan kualitas perangkat lunak dengan mengurangi biaya pengembangan awal dan biaya pemeliharaan, dan untuk meningkatkan pengalaman bekerja dengan aplikasi dengan menyediakan sintaks yang ekspresif, jelas dan menghemat waktu. MVC adaLaravel adalah sebuah framework PHP yang dirilis dibawah lisensi MIT, dibangun dengan konsep MVC (model view controller). Laravel adalah pengembangan website berbasis MVP yang ditulis dalam PHP yang dirancang untuk meningkatkan kualitas perangkat lunak dengan mengurangi biaya pengembangan awal dan biaya pemeliharaan, dan untuk meningkatkan pengalaman bekerja dengan aplikasi dengan menyediakan sintaks yang ekspresif, jelas dan menghemat waktu. MVC adalah sebuah pendekatan perangkat lunak yang memisahkan aplikasi logika dari presentasi. MVC memisahkan aplikasi berdasarkan komponen- komponen aplikasi, seperti : manipulasi data, controller, dan user interface.lah sebuah pendekatan perangkat lunak yang memisahkan aplikasi logika dari presentasi. MVC memisahkan aplikasi berdasarkan komponen- komponen aplikasi, seperti : manipulasi data, controller, dan user interface.'
        ,
        'Debian server adalah sistem operasi berbasis open source yang dikembangkan secara terbuka oleh banyak programmer sukarelawan yang ingin mengembangkan debian. System perasi debian adalah gabungan dari perangkat lunak yang dikembangkan dengan lisensi GNU, dan utamanya menggunakan kernel linux, sehingga lebih suka disebut dengan nama DEBIAN GNU/LINUX. System operasi ini yang menggunakan kernel linux yang merupakan salah satu distro linux yang populer dengan kestabilannya. Rata-rata distro turunan dari debian adalah yang paling banyak digunakan di dunia. Contoh seperti: Ubuntu, Linux mint, dan bactrack.'];
    	$kategori_id = ['2','2','3','4','1','2'];
    	$tag_id = ['9,10,11,12,13','9','15,16,17,18,19','20,21','3,4,5,6','10'];
    	$meta_keyword = ['linux, opensource','ubuntu,terminal,','Arduino nano, Arduino Mega','resistor. elektronika, dasar elektronika','laravel','debian,'];
    	$meta_deskripsi = ['artikel linux','artikel ubuntu','arduino','pengertian dasar elektronika tepatnya tentang resistor','Laravel adalah sebuah framework PHP','Debian adalah sistem operasi komputer'];
    	$foto = ['1519771814.jpg','1519773998.jpg','1519777718.png','1519779056.png','1520092297.png','1520093437.jpg'];
    	$status = ['release','release','release','release','release','release'];

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
        ,
        '<p><img alt="" src="http://localhost:8000/media/photos/1/5a95fce670872.jpg" style="height:280px; width:550px" /></p>

			<p><strong>Apa itu Resistor ?</strong> Resistor adalah komponen dasar&nbsp; elektronika&nbsp; yang digunakan untuk membatasi jumlah arus yang mengalir&nbsp; dalam&nbsp; satu&nbsp; rangkaian.&nbsp; Sesuai&nbsp; dengan&nbsp; namanya&nbsp; resistor&nbsp; bersifat&nbsp; resistif&nbsp; dan umumnya&nbsp; terbuat&nbsp; dari&nbsp; bahan&nbsp; karbon. Dari&nbsp; hukum&nbsp; Ohms&nbsp; diketahui,&nbsp; resistansi&nbsp; berbanding&nbsp; terbalik dengan jumlah&nbsp; arus&nbsp; yang&nbsp; mengalir&nbsp; melaluinya.&nbsp; Satuan&nbsp; untuk resistansi&nbsp; pada&nbsp; resistor&nbsp; disebut&nbsp; Ohm dengan simbol&nbsp; Ω (Omega).&nbsp;</p>

			<p>Untuk&nbsp; menyatakan&nbsp; resistansi&nbsp; sebaiknya&nbsp; disertakan&nbsp; batas&nbsp; kemampuan&nbsp; dayanya.&nbsp; Umumnya berbagai jenis pada resistor&nbsp; dibuat&nbsp; dari&nbsp; bahan&nbsp; dan sifat atau karakteristik yang berbeda. Spesifikasi&nbsp; lain yang perlu diperhatikan&nbsp; dalam memilih resitor pada suatu rancangan selain besar resistansi adalah besar&nbsp; watt-nya.&nbsp; Akibat dari resistor yang bekerja dengan konsep dialiri arus listrik,&nbsp; maka&nbsp; akan&nbsp; terjadi suatu kondisi yang disebut&nbsp; disipasi&nbsp; daya berupa&nbsp; panas&nbsp; sebesar&nbsp; W=I2R&nbsp; Watt.<br />
			<br />
			Semakin besar fisik&nbsp; atau ukuran dari suatu&nbsp; resistor&nbsp; maka hal ini akan berbanding lurus dengan&nbsp; semakin besar kemampuan disipasi daya resistor&nbsp; tersebut. Umumnya di pasar tersedia ukuran 1/8, 1/4, 1, 2, 5, 10 dan 20 watt. Resistor&nbsp; yang&nbsp; memiliki disipasi daya dari 5, 10 hingga 20&nbsp; watt&nbsp; umumnya memiliki bentuk fisik atau berbentuk kubik&nbsp; memanjang&nbsp; persegi&nbsp; empat&nbsp; yang berwarna&nbsp; putih,&nbsp; meskipun juga terdapat bentuk lain seperti berbentuk silinder.<br />
			<br />
			Tetapi umumnya untuk&nbsp; jenis resistor&nbsp; yang berukuran lebih besar (jumbo) nilai&nbsp; resistansi&nbsp; dicetak&nbsp; langsung dibadannya sehingga dapat terlihat, misalnya 100Ω&nbsp; 5W.</p>'
      ,
      '<p><strong>Laravel</strong> adalah sebuah framework PHP yang dirilis dibawah lisensi MIT, dibangun dengan konsep MVC (model view controller). Laravel adalah pengembangan website berbasis MVP yang ditulis dalam PHP yang dirancang untuk meningkatkan kualitas perangkat lunak dengan mengurangi biaya pengembangan awal dan biaya pemeliharaan, dan untuk meningkatkan pengalaman bekerja dengan aplikasi dengan menyediakan sintaks yang ekspresif, jelas dan menghemat waktu.</p>

        <p>MVC adalah sebuah pendekatan perangkat lunak yang memisahkan aplikasi logika dari presentasi. MVC memisahkan aplikasi berdasarkan komponen- komponen aplikasi, seperti : manipulasi data, controller, dan user interface.</p>

        <ol>
          <li>Model, Model mewakili struktur data. Biasanya model berisi fungsi-fungsi yang membantu seseorang dalam pengelolaan basis data seperti memasukkan data ke basis data, pembaruan data dan lain-lain.</li>
          <li>View, View adalah bagian yang mengatur tampilan ke pengguna. Bisa dikatakan berupa halaman web.</li>
          <li>Controller, Controller merupakan bagian yang menjembatani model dan view.</li>
        </ol>

        <p>Beberapa fitur yang terdapat di Laravel :</p>

        <ul>
          <li>Bundles, yaitu sebuah fitur dengan sistem pengemasan modular dan tersedia beragam di aplikasi.</li>
          <li>Eloquent ORM, merupakan penerapan PHP lanjutan menyediakan metode internal dari pola &ldquo;active record&rdquo; yang menagatasi masalah pada hubungan objek database.</li>
          <li>Application Logic, merupakan bagian dari aplikasi, menggunakan controller atau bagian Route.</li>
          <li>Reverse Routing, mendefinisikan relasi atau hubungan antara Link dan Route.</li>
          <li>Restful controllers, memisahkan logika dalam melayani HTTP GET and POST.</li>
          <li>Class Auto Loading, menyediakan loading otomatis untuk class PHP.</li>
          <li>View Composer, adalah kode unit logikal yang dapat dieksekusi ketika view sedang loading.</li>
          <li>IoC Container, memungkin obyek baru dihasilkan dengan pembalikan controller.</li>
          <li>Migration, menyediakan sistem kontrol untuk skema database.</li>
          <li>Unit Testing, banyak tes untuk mendeteksi dan mencegah regresi.</li>
          <li>Automatic Pagination, menyederhanakan tugas dari penerapan halaman.</li>
        </ul>'
        ,
        '<p>Debian pertama kali diperkenalkan oleh <a href="https://id.wikipedia.org/wiki/Ian_Murdock">Ian Murdock</a>, seorang mahasiswa dari <a href="https://id.wikipedia.org/wiki/Universitas_Purdue">Universitas Purdue</a>, <a href="https://id.wikipedia.org/wiki/Amerika_Serikat">Amerika Serikat</a>, pada tanggal <a href="https://id.wikipedia.org/w/index.php?title=16_Agustus_1993&amp;action=edit&amp;redlink=1">16 Agustus 1993</a>. Nama Debian berasal dari kombinasi nama Ian dengan mantan-kekasihnya Debra Lynn: Deb dan Ian.</p>

        <p>Pada awalnya, Ian memulainya dengan memodifikasi distribusi SLS (Softlanding Linux System). Namun, ia tidak puas dengan SLS yang telah dimodifikasi olehnya sehingga ia berpendapat bahwa lebih baik membangun sistem (distribusi Linux) dari nol (Dalam hal ini, Patrick Volkerding juga berusaha memodifikasi SLS. Ia berhasil dan distribusinya dikenal sebagai &quot;Slackware&quot;).</p>

        <p>Proyek Debian tumbuh lambat pada awalnya dan merilis versi 0.9x pada tahun 1994 dan 1995. Pengalihan arsitektur ke selain i386 dimulai pada tahun 1995. Versi 1.x dimulai tahun 1996.</p>

        <p>Pada tahun 1996, Bruce Perens menggantikan Ian Murdoch sebagai Pemimpin Proyek. Dalam tahun yang sama pengembang debian Ean Schuessler, berinisiatif untuk membentuk Debian Social Contract dan Debian Free Software Guidelines, memberikan standar dasar komitmen untuk pengembangan distribusi debian. Dia juga membentuk organisasi &quot;Software in Public Interest&quot; untuk menaungi debian secara legal dan hukum.</p>

        <p>Di akhir tahun 2000, proyek debian melakukan perubahan dalam archive dan managemen rilis. Serta pada tahun yang sama para pengembang memulai konferensi dan workshop tahunan &quot;debconf&quot;.</p>

        <p>Di April 8, 2007, Debian GNU/Linux 4.0 dirilis dengan nama kode &quot;Etch&quot;. Rilis versi terbaru Debian, 2009, diberi nama kode &quot;Lenny&quot;. deb adalah perpanjangan dari paket perangkat lunak Debian format dan nama yang paling sering digunakan untuk paket-paket binari seperti itu.</p>

        <p>Paket debian adalah standar Unix pada arsip yang mencakup dua gzip, tar bzipped atau lzmaed arsip: salah satu yang memegang kendali informasi dan lain yang berisi data. Program kanonik untuk menangani paket-paket tersebut adalah dpkg, paling sering melalui apt/aptitude.</p>

        <p>Beberapa paket Debian inti tersedia sebagai udebs (&quot;mikro deb&quot;), dan biasanya hanya digunakan untuk bootstrap instalasi Linux Debian. Meskipun file tersebut menggunakan ekstensi nama file udeb, mereka mematuhi spesifikasi struktur yang sama seperti biasa deb. Namun, tidak seperti rekan-rekan mereka deb, hanya berisi paket-paket udeb fungsional penting file. Secara khusus, file dokumentasi biasanya dihilangkan. udeb paket tidak dapat diinstal pada sistem Debian standar.</p>

        <p>Paket debian juga digunakan dalam distribusi berbasis pada Debian, seperti Ubuntu dan lain-lain. Saat ini telah terdapat puluhan distribusi Linux yang berbasis kepada debian, salah satu yang paling menonjol dan menjadi fenomena adalah <a href="https://id.wikipedia.org/wiki/Ubuntu">Ubuntu</a></p>
      '
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
