@extends('layouts.main')

@section('content')
    <img src="{{ asset('img/banner1.png') }}" width="100%" class="mb-4 rounded" alt="">
<div class="row">
            <div class="col-sm-4">
                    <div class="card" style="border-radius: 10px;">
                        <div class="card-header bg-success" style="border-radius: 10px;">
                        <h5 style="text-align: center; color:white" class="card-title">Kepala UPT PLUT KUMKM</h5>
                    </div>
                        <img src="{{ asset('img/foto.png') }}" class="card-img-top">
                    </div>
            </div>
            <div class="col-sm-8">
                <div class="card" style="border-radius: 10px;">
                    <div class="card-header bg-success" style="border-radius: 10px;">
                        <h5 style="color: whitesmoke; text-align:center;">Kata Sambutan</h5>
                    </div>
                        <div class="card-body">
                            <p class="card-title">Assalamualaikum wr.wb <br>
                            Selamat datang di website kami <br>
                            Website ini hadir utk melayani UKM dan UMKM. <br> <br>
                            Dengan adanya web ini UKM dan UMKM dapat mendaftar menjadi binaan dari UPT PLUT Dinas PERINDAGKOP UKM Provinsi Riau secara online, mendapatkan informasi layanan  dan pembinaan yg ada di UPT PLUT.
                            Semoga website ini bermanfaat buat para UKM dan UMKM. <br> <br>
                            Salam hangat untuk pluters semua <br>
                            PLUT Rumah UMKM <br>
                            UMKM naik kelas. <br>
                            Wassalamualaikum wr.wb
                            </p>
                        </div>
                </div>
            </div>
</div>
<br>
    <div class="card text-center">
        <div class="card-header bg-success">
            <h2 style="color: whitesmoke">Tentang Kami</h2>
        </div>
        <div class="card-body">
            <h5 class="card-title">UPT. PLUT KUMKM</h5>
            <p class="card-text">PLUT-KUMKM adalah lembaga yang menyediakan jasa non- finansial
                yang menyeluruh dan terintegrasi bagi koperasi dan usaha mikro, kecil dan menengah (KUMKM)
                meningkatkan (1) kinerja produksi, (2) kinerja pemasaran, (3) akses ke pembiayaan , (4) pengembangan SDM melalui
                peningkatan kapasitas kewirausahaan, teknis dan manajerial, serta (5) kinerja kelembagaan dalam
                rangka meningkatkan daya saing KUMKM.</p>
            <a href="https://www.instagram.com/plutriau/" target="_blank" rel="noopener noreferrer"> <img src="img/ig.png" style="width: 30px" alt=""></a>
            <a href="https://www.facebook.com/plutkumkmriau" target="_blank" rel="noopener noreferrer"> <img src="img/fb.png" style="width: 40px" alt=""></a>
            <a href="{{ url('produk') }}" class="btn btn-dark">Lihat Karya UMKM !</a>
        </div>
    {{-- <div class="card-footer text-muted">
        2 days ago
    </div> --}}
    </div>
    <br>
    <div class="card">
        <div class="card-header bg-success" style="border-radius: 10px;">
            <h2 style="text-align: center; color:white" class="card-title">Struktur Organisasi</h2>
            <p class="card-text" style="color: white">Layanan Pendampingan kepada UMKM melalui Konsultan Pendamping:</p>
        </div>
        <div class="card-body" style="border-radius: 10px;">
            <img src="{{ asset('img/Picture1.png') }}" class="card-img-top">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">1.	Konsultan bidang kelembagaan memberikan Layanan penyuluhan koperasi, memfasilitasi pembentukan,pembubaran, penggabungan, pembagian koperasi, penataan organisasi dan tatalaksana koperasi, legalitas badan dan ijin usaha Koperasi dan UMKM.</li>
                <li class="list-group-item bg-success" style="color: white">2.	Konsultan bidang sumber daya manusia (SDM) memberikan Layanan peningkatan kompetensi sumber dayamanusia Koperasi dan UMK melalui pendekatan konsultasi, fasilitasi,coaching/pendamping, mentoring/berbagi pengalaman dan pelatihan.</li>
                <li class="list-group-item">3.	Konsultan bidang produksi memberikan Layanan akses bahan baku, pengolahan produk, pemanfaatanteknologi pengolahan, standarisasi dan sertifikasi produk, serta pelabelan dan pengemasannya.</li>
                <li class="list-group-item bg-success" style="color: white">4.	Konsultan bidang pembiayaan memberikan Layanan perencanaan bisnis, penyusunan proposal pengembangan usaha, fasilitasi dan mediasi akses ke lembagakeuangan dan berbagai sumber pembiayaan serta manajemen keuangan.</li>
                <li class="list-group-item">5.	Konsultan bidang pemasaran memberikan Layanan penyediaan informasi pasar, pengembangan promosi dan kemitraan, peningkatan akses pasar, pemanfaatan teknologi informasi (e-commerce), serta pengembangan database yang terkait pengembangan Koperasi Usaha Mikro, Kecil dan Menengah.</li>
                <li class="list-group-item bg-success" style="color: white">6.	Konsultan bidang pengembangan teknologi informasi memberikan Layanan pengembangan sistempendataan Koperasi dan UMKM berbasis teknologi informasi,penyediaan data dan informasi  Koperasi dan UMKM untuk kepentinganpublikasi, promosi dan pengembangan kemitraan, serta pengembanganaplikasi bisnis lainnya berbasis digitalisasi.</li>
                <li class="list-group-item">7.	Konsultan bidang pengembangan jaringan kerjasama memberikan Layanan mengoordinasikankerjasama kelembagaan PLUT-KUMKM dengan berbagai Instansi/Lembaga pemerintahan, swasta dan berbagai perangkatpemangku kepentingan lainnya dalam pengembangan program pendampingan Koperasi dan UMKM.</li>
            </ul>
        </div>
    </div>
    <br>
        <div class="row">
        {{-- tujuan --}}
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <h5 class="card-title">Tujuan</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-success" style="color: whitesmoke; border-radius:10px">“Menjadi Pusat Layanan Terpadu Yang Memampukan Koperasi dan UMKM Dalam Mengembangkan Potensi Unggulan Daerah”</li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- tujuan end --}}

    </div>
    <br>
    <div class="row">
        {{-- misi --}}
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <h5 class="card-title">Visi</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-success" style="color: whitesmoke; border-radius:10px">Menjadi pendamping dan pembina yang dapat memberikan solusi permasalahan pada KUMKM (centre for problem solving). </li><br>
                        <li class="list-group-item" style="border-radius: 10px">Menjadi mediator dan sumber informasi yang dapat memberikan rujukan yang tepat pada KUMKM untuk mendapatkan solusi yang spesifik (centre of referral). </li><br>
                        <li class="list-group-item bg-success" style="color: whitesmoke; border-radius:10px">Menjadi etalase dan sumber inspirasi yang dapat menghadirkan praktik terbaik dari pengembangan KUMKM (centre for best practice).  </li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- misi end --}}
        <br>
        {{-- visi --}}
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <div class="card-body">
                        <h5 class="card-title">Misi</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-success" style="color: whitesmoke; border-radius:10px">Mendukung pencapaian Prioritas Nasional yang terkait dengan pemberdayaan KUMKM; </li><br>
                        <li class="list-group-item" style="border-radius: 10px">Memperkuat peran Pemda dalam memberdayakan KUMKM di daerahnya sesuai dengan amanat PP 38/2007; </li><br>
                        <li class="list-group-item bg-success" style="color: whitesmoke; border-radius:10px">Meningkatkan keterjangkauan KUMKM pada layanan pengembangan usaha; </li><br>
                        <li class="list-group-item" style="border-radius: 10px">Mensinergikan berbagai layanan usaha dalam satu atap bagi KUMKM dengan memanfaatkan sumber daya lokal dan jaringan regional/nasional. </li><br>
                        <li class="list-group-item bg-success" style="color: whitesmoke; border-radius:10px">Mendorong perkembangan jejaring layanan pengembangan usaha di daerah; </li><br>
                        <li class="list-group-item" style="border-radius: 10px">Meningkatkan jumlah dan perluasan usaha KUMKM; </li><br>
                        <li class="list-group-item bg-success" style="color: whitesmoke; border-radius:10px">Mendukung peningkatan produktivitas dan daya saingKUMKM. </li><br>
                    </ul>
                </div>
            </div>
        </div>
        {{-- visi end --}}
    </div>
    <br>
    <div class="container text-center">
        <h2>LOKASI UPT. PLUT KUMKM</h2>
        <div class="map-wrapper" style="overflow:hidden;padding-bottom:50%;position:relative;height:0;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.741997385674!2d101.4074391!3d0.4675151!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x49f1e4108c2fe0ef!2sPLUT%20KUMKM%20Provinsi%20Riau!5e0!3m2!1sen!2sid!4v1665208622547!5m2!1sen!2sid" width="1100" height="450" style="left:0;top:0;height:100%;width:100%;position:absolute;border-radius:10px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
