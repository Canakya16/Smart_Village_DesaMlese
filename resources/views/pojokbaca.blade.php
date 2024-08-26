@extends('layout.landing')

@section('nav')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('landing') }}">Beranda</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('profil') }}">Profil</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('informasi') }}">Informasi</a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('pojokbaca') }}">Pojok Baca</a>
    </li>
    <li class="nav-item">
        <a class="nav-link btn btn-core" href="{{ route('login') }}">Masuk</a>
    </li>
@endsection

@section('content')
    <!-- Header -->
    <section class="header" style="background-image: url('assets/img/header-bg.jpg'); background-size: cover; background-position: center; padding: 60px 0;">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-12 text-center">
                    <h1 style="color: #fff; text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7); font-size: 3rem;"><span>POJOK BACA</span></h1>
                    <p style="color: #f1f1f1; font-size: 1.2rem;">Menikmati budaya, UMKM, dan kuliner Desa Mlese melalui artikel, foto, dan video.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Header -->

    <!-- Main Content -->
    <section class="content py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow-sm" style="border-radius: 15px; overflow: hidden;">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="artikel-tab" data-toggle="tab" href="#artikel" role="tab" aria-controls="artikel" aria-selected="true">Artikel Budaya</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="galeri-tab" data-toggle="tab" href="#galeri" role="tab" aria-controls="galeri" aria-selected="false">Galeri Foto</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Destinasi Wisata</a>
                                </li>
                            </ul>
                            <div class="tab-content mt-3" id="myTabContent">
                                <div class="tab-pane fade show active" id="artikel" role="tabpanel" aria-labelledby="artikel-tab">
                                    <!-- Artikel content -->
                                    <h4>Artikel Budaya Desa Mlese</h4>
                                    <!-- Gunakan konten artikel yang sudah ada -->
                                    <div class="accordion" id="accordionExample">
                                        <!-- Artikel Section -->
                                        <div class="card mb-3">
                                            <div class="card-header" id="headingOne" style="background-color: #f8f9fa;">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left" type="button"
                                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne" style="font-size: 1.2rem; color: #333;">
                                                        <i class="fas fa-newspaper"></i> Artikel Budaya Desa Mlese
                                                    </button>
                                                </h2>
                                            </div>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                   <!-- Artikel 1 -->
                                                    <h5>Tenun Mlese: Warisan Budaya yang Tak Lekang oleh Waktu</h5>
                                                    <p>
                                                        Desa Mlese, sebuah permata tersembunyi di Kecamatan Cawas, Kabupaten Klaten, Jawa Tengah, menyimpan kekayaan budaya yang luar biasa, salah satunya adalah tradisi menenun. 
                                                        Tenun Mlese telah menjadi bagian tak terpisahkan dari kehidupan masyarakat setempat selama bergenerasi.
                                                        <a href="#modalArtikel1" data-toggle="modal">Baca selengkapnya</a>
                                                    </p>

                                                    <!-- Modal for Artikel 1 -->
                                                    <div class="modal fade" id="modalArtikel1" tabindex="-1" role="dialog" aria-labelledby="modalArtikel1Label" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalArtikel1Label">Tenun Mlese: Warisan Budaya yang Tak Lekang oleh Waktu</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>
                                                                        Desa Mlese, sebuah permata tersembunyi di Kecamatan Cawas, Kabupaten Klaten, Jawa Tengah, menyimpan kekayaan budaya yang luar biasa, salah satunya adalah tradisi menenun. 
                                                                        Tenun Mlese telah menjadi bagian tak terpisahkan dari kehidupan masyarakat setempat selama bergenerasi. 
                                                                        Tenun lurik, dengan motif garis-garis khasnya, menjadi produk unggulan Desa Mlese. Kain ini tidak hanya berfungsi sebagai pakaian, tetapi juga sarat akan makna dan nilai-nilai budaya.
                                                                    </p>
                                                                    <p>
                                                                        Proses pembuatan tenun lurik dilakukan secara tradisional menggunakan alat tenun bukan mesin (ATBM). Setiap helai benang ditenun dengan penuh kesabaran dan ketelitian oleh para pengrajin. 
                                                                        Proses ini dimulai dari pemilihan bahan baku berkualitas, seperti kapas atau benang sintetis. 
                                                                        Benang kemudian diberi warna alami atau sintetis sesuai dengan motif yang diinginkan. 
                                                                        Setelah itu, benang ditenun pada alat tenun hingga terbentuk kain yang utuh, melibatkan keterampilan dan pengetahuan yang turun-temurun.
                                                                    </p>
                                                                    <p>
                                                                        Tenun lurik tidak hanya memiliki nilai estetika, tetapi juga memiliki peran penting dalam kehidupan masyarakat Mlese. 
                                                                        Kain ini digunakan untuk berbagai keperluan, seperti pakaian sehari-hari, pakaian adat, dan bahan untuk membuat kerajinan tangan. 
                                                                        Selain itu, tenun lurik juga menjadi sumber mata pencaharian bagi sebagian besar masyarakat desa.
                                                                    </p>
                                                                    <p>
                                                                        Sebagai generasi penerus, kita memiliki tanggung jawab untuk melestarikan warisan budaya yang telah diwariskan oleh nenek moyang kita. 
                                                                        Dengan membeli dan menggunakan produk tenun lurik Mlese, kita tidak hanya mendukung perekonomian masyarakat setempat, tetapi juga turut serta melestarikan budaya tenun yang semakin langka.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Batas Artikel--> 
                                                     <!-- Artikel 2 -->
                                                    <h5>Budaya Lesungan: Ritme Hidup yang Menggema di Desa Mlese</h5>
                                                    <p>
                                                        Desa Mlese tidak hanya kaya akan tradisi tenun, tetapi juga memiliki warisan budaya yang tak kalah menarik, yaitu lesungan. 
                                                        Lesungan, alat musik tradisional yang terbuat dari kayu, telah menjadi bagian tak terpisahkan dari kehidupan masyarakat setempat.
                                                        <a href="#modalArtikel2" data-toggle="modal">Baca selengkapnya</a>
                                                    </p>   
                                                    <!-- Modal for Artikel 2 -->
                                                    <div class="modal fade" id="modalArtikel2" tabindex="-" role="dialog" aria-labelledby="modalArtikel1Label" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="modalArtikel1Label">Budaya Lesungan: Ritme Hidup yang Menggema di Desa Mlese</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>
                                                                        Desa Mlese tidak hanya kaya akan tradisi tenun, tetapi juga memiliki warisan budaya yang tak kalah menarik, yaitu lesungan. 
                                                                        Lesungan, alat musik tradisional yang terbuat dari kayu, telah menjadi bagian tak terpisahkan dari kehidupan masyarakat setempat. 
                                                                        Bunyi ritmis dari lesungan mengiringi berbagai kegiatan, mulai dari upacara adat hingga kegiatan sehari-hari.
                                                                    </p>
                                                                    <p>
                                                                        Pembuatan lesungan membutuhkan keahlian khusus. Kayu yang digunakan biasanya berasal dari pohon yang keras dan tahan lama, seperti kayu nangka atau jati. 
                                                                        Kayu tersebut kemudian dibentuk sedemikian rupa hingga menghasilkan bentuk lesungan yang khas. 
                                                                        Proses pembuatan lesungan membutuhkan waktu yang cukup lama, karena setiap detail harus dikerjakan dengan cermat.
                                                                    </p>
                                                                    <p>
                                                                        Lesungan memiliki peran yang sangat penting dalam kehidupan masyarakat Mlese, di antaranya adalah Saat gotong royong atau kerja bakti, bunyi lesungan akan mengiringi semangat kerja masyarakat. 
                                                                        Bunyi lesungan membuat suasana kerja menjadi lebih meriah dan menyenangkan. Selain itu, lesungan juga digunakan sebagai media hiburan. Anak-anak sering bermain lesungan sambil menyanyi lagu-lagu tradisional.
                                                                    <p>
                                                                        Meskipun lesungan telah menjadi bagian dari kehidupan masyarakat Mlese sejak dulu, namun keberadaan alat musik tradisional ini mulai terancam. 
                                                                        Generasi muda semakin tertarik dengan musik modern, sehingga minat terhadap lesungan semakin menurun.
                                                                    </p>
                                                                    <p>
                                                                        Lesungan bukan hanya sekedar alat musik, tetapi juga merupakan simbol identitas dan kebanggaan masyarakat Mlese. 
                                                                        Dengan menjaga dan melestarikan budaya lesungan, kita turut serta melestarikan warisan budaya bangsa. 
                                                                        Mari kita bersama-sama menjaga dan melestarikan lesungan agar tetap lestari hingga generasi mendatang.
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <!-- Batas Artikel-->    
                                                 <!-- Artikel 3 -->
                                                 <h5>Jatilan: Tarian Kuda yang Penuh Mistis</h5>
                                                 <p>
                                                    Desa Mlese tidak hanya kaya akan tradisi tenun dan lesungan, tetapi juga memiliki kesenian tradisional yang sangat menarik, yaitu jatilan atau kuda lumping. 
                                                    Tarian yang satu ini sangat populer di berbagai daerah di Indonesia, termasuk di Desa Mlese. 
                                                     <a href="#modalArtikel3" data-toggle="modal">Baca selengkapnya</a>
                                                 </p>   
                                                 <!-- Modal for Artikel 3 -->
                                                 <div class="modal fade" id="modalArtikel3" tabindex="-" role="dialog" aria-labelledby="modalArtikel1Label" aria-hidden="true">
                                                     <div class="modal-dialog modal-lg" role="document">
                                                         <div class="modal-content">
                                                             <div class="modal-header">
                                                                 <h5 class="modal-title" id="modalArtikel1Label">Jatilan: Tarian Kuda yang Penuh Mistis</h5>
                                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                     <span aria-hidden="true">&times;</span>
                                                                 </button>
                                                             </div>
                                                             <div class="modal-body">
                                                                 <p>
                                                                    Desa Mlese tidak hanya kaya akan tradisi tenun dan lesungan, tetapi juga memiliki kesenian tradisional yang sangat menarik, yaitu jatilan atau kuda lumping. Tarian yang satu ini sangat populer di berbagai daerah di Indonesia, termasuk di Desa Mlese. 
                                                                    Jatilan lebih dari sekadar tarian, tetapi merupakan perpaduan antara seni, budaya, dan spiritualitas.
                                                                 </p>
                                                                 <p>
                                                                    Asal-usul jatilan masih menjadi misteri. Ada yang berpendapat bahwa jatilan berasal dari pengaruh budaya Hindu-Buddha, sedangkan yang lain berpendapat bahwa jatilan merupakan akulturasi antara budaya Jawa dan Islam. 
                                                                    Namun, yang pasti adalah jatilan telah menjadi bagian tak terpisahkan dari kehidupan masyarakat Jawa sejak ratusan tahun lalu.
                                                                 </p>
                                                                 <p>
                                                                    Penari jatilan menggunakan kostum yang unik dan menarik. Mereka mengenakan topeng kuda yang terbuat dari kayu atau kertas, serta pakaian berwarna-warni yang dihiasi dengan aksesoris seperti bulu merak dan kain. 
                                                                    Selain topeng kuda, penari juga membawa properti seperti cambuk dan tombak. 
                                                                    Musik pengiring jatilan biasanya menggunakan gamelan atau alat musik tradisional lainnya.
                                                                 <p>
                                                                    Pertunjukan jatilan biasanya diawali dengan tari-tarian pembuka. Setelah itu, para penari akan menari sambil meniru gerakan kuda. Puncak dari pertunjukan jatilan adalah ketika para penari kesurupan. 
                                                                    Saat kesurupan, para penari akan melakukan gerakan-gerakan yang tidak biasa, seperti memakan beling atau berjalan di atas bara api.
                                                                 </p>
                                                                 <p>
                                                                    Jatilan mengandung banyak makna filosofis. Kuda dalam jatilan melambangkan kekuatan, keberanian, dan kegagahan. 
                                                                    Gerakan-gerakan yang dilakukan oleh penari jatilan melambangkan perjuangan hidup manusia. 
                                                                    Sedangkan kesurupan yang dialami oleh penari melambangkan hubungan antara manusia dengan kekuatan gaib.
                                                                 </p>
                                                                 <p>
                                                                    Jatilan merupakan warisan budaya yang sangat berharga. Dengan menjaga dan melestarikan kesenian jatilan, kita turut serta melestarikan budaya bangsa. 
                                                                    Mari kita bersama-sama mendukung dan melestarikan kesenian jatilan agar tetap lestari hingga generasi mendatang.
                                                                 </p>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- End of Accordion -->
                                </div>
                                <div class="tab-pane fade" id="galeri" role="tabpanel" aria-labelledby="galeri-tab">
                                    <!-- Galeri Foto content -->
                                    <h4>Galeri Foto Budaya Desa Mlese</h4>
                                    <div class="row">
                                        <!-- Foto 1 -->
                                        <div class="col-md-4 mb-4">
                                            <a href="images/tenun1.jpg" data-lightbox="galeri" data-title="Budaya Tenun">
                                                <img src="images/tenun1.jpg" class="img-fluid rounded shadow-sm" alt="Budaya 1">
                                            </a>
                                            <p class="mt-2 text-center">Salah satu UMKM Tenun di desa mlese</p>
                                        </div>
                                        <!-- Foto 2 -->
                                        <div class="col-md-4 mb-4">
                                            <a href="images/Tenun2.jpg" data-lightbox="galeri" data-title="Budaya Tenun">
                                                <img src="images/Tenun2.jpg" class="img-fluid rounded shadow-sm" alt="UMKM 1">
                                            </a>
                                            <p class="mt-2 text-center">Foto Bersama Mahasiswa KKN UNISRI Kelompok 48 dengan Bapak Joko Triyanto Pemilik UKM Lawe Jowo </p>
                                        </div>
                                        <!-- Foto 3 -->
                                        <div class="col-md-4 mb-4">
                                            <a href="images/Tenun3.jpg" data-lightbox="galeri" data-title="Budaya Tenun">
                                                <img src="images/tenun3.jpg" class="img-fluid rounded shadow-sm" alt="UMKM 1">
                                            </a>
                                            <p class="mt-2 text-center">Proses pembuatan Tenun </p>
                                        </div>
                                        <!-- Video 1 -->
                                        <div class="col-md-4 mb-4">
                                            <video class="img-fluid rounded shadow-sm" controls preload="metadata">
                                                <source src="videos/videotenun1.mp4" type="video/mp4">
                                                Video tidak didukung di browser Anda.
                                            </video>
                                            <p class="mt-2 text-center">Video singkat proses pembuatan tenun</p>
                                        </div>
                                        <!-- Video 2 -->
                                        <div class="col-md-4 mb-4">
                                            <video class="img-fluid rounded shadow-sm" controls preload="metadata">
                                                <source src="videos/videotenun2.mp4" type="video/mp4">
                                                Video tidak didukung di browser Anda.
                                            </video>
                                            <p class="mt-2 text-center">Video singkat proses pembuatan tenun</p>
                                        </div>
                                        <!-- Video 3 -->
                                        <div class="col-md-4 mb-4">
                                            <video class="img-fluid rounded shadow-sm" controls preload="metadata">
                                                <source src="videos/videotenun3.mp4" type="video/mp4">
                                                Video tidak didukung di browser Anda.
                                            </video>
                                            <p class="mt-2 text-center">Video singkat proses pembuatan tenun</p>
                                        </div>
                                        <!-- Video 4 -->
                                        <div class="col-md-4 mb-4">
                                            <video class="img-fluid rounded shadow-sm" controls preload="metadata">
                                                <source src="videos/videolesungan1.mp4" type="video/mp4">
                                                Video tidak didukung di browser Anda.
                                            </video>
                                            <p class="mt-2 text-center">Para warga desa mlese diperlihatkan sedang bermain Lesungan</p>
                                        </div>
                                        <!-- Video 5 -->
                                        <div class="col-md-4 mb-4">
                                            <video class="img-fluid rounded shadow-sm" controls preload="metadata">
                                                <source src="videos/videolesungan2.mp4" type="video/mp4">
                                                Video tidak didukung di browser Anda.
                                            </video>
                                            <p class="mt-2 text-center">Budaya Lesungan dapat digunakan pula sebagai ajang silahturami</p>
                                        </div>
                                        <!-- Tambahkan lebih banyak foto atau video sesuai kebutuhan -->
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
                                    <!-- Video content -->
                                    <h4>Destinasi Wisata Desa Mlese</h4>
                                    <!-- Embedded YouTube Video -->
                                    <div class="embed-responsive embed-responsive-16by9 mb-2">
                                        <iframe class="embed-responsive-item" 
                                                src="https://www.youtube.com/embed/-tpsUupt-_I" 
                                                frameborder="0" 
                                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                                                allowfullscreen></iframe>
                                    </div>
                                    <p>Deskripsi video kuliner...</p>
                                    <!-- Tambahkan lebih banyak video sesuai kebutuhan -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Main Content -->
@endsection

@section('styles')
<style>
    .nav-tabs .nav-link {
        color: #495057;
    }
    .nav-tabs .nav-link.active {
        color: #007bff;
    }
    @media (max-width: 768px) {
        .nav-tabs {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        .nav-tabs .nav-item {
            flex: 0 0 auto;
        }
    }
</style>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
@endsection