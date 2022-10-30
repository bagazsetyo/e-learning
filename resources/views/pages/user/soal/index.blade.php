@extends('layouts.admin')

@section('title', 'Soal')

@section('content')

<x-breadcrumb :breadcrumb="$breadcrumb" />

<div>
</div>
<div class="page-content">
    <section id="input-style">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-9">
                                <h4 class="card-title">Mata Pelajaran</h4>
                            </div>
                            <div class="col-lg-3">
                                <input type="text" id="cari" class="form-control" placeholder="Cari mata pelajaran">
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="mapel">
            {{-- @for ($i = 0; $i < 32; $i++)
                <div class="col-lg-3 item">
                    <div class="card">
                        <div class="card-body">
                        </div>
                    </div>
                </div>
            @endfor --}}
        </div>
    </section>
</div>
@endsection

@push('after-scripts')
    <script>
        var arr_mapel = [
            {
                id: 1,
                nama: 'Matematika',
                keterangan: 'Matematika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah matematika.',
            },
            {
                id: 2,
                nama: 'Fisika',
                keterangan: 'Fisika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah fisika.',
            },
            {
                id: 3,
                nama: 'Kimia',
                keterangan: 'Kimia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kimia.',
            },
            {
                id: 4,
                nama: 'Biologi',
                keterangan: 'Biologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah biologi.',
            },
            {
                id: 5,
                nama: 'Bahasa Inggris',
                keterangan: 'Bahasa Inggris adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa inggris.',
            },
            {
                id: 6,
                nama: 'Bahasa Indonesia',
                keterangan: 'Bahasa Indonesia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa indonesia.',
            },
            {
                id: 7,
                nama: 'Bahasa Jawa',
                keterangan: 'Bahasa Jawa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jawa.',
            },
            {
                id: 8,
                nama: 'Bahasa Sunda',
                keterangan: 'Bahasa Sunda adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa sunda.',
            },
            {
                id: 9,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 10,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 11,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 12,
                nama: 'Bahasa Prancis',
                keterangan: 'Bahasa Prancis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa prancis.',
            },
            {
                id: 13,
                nama: 'Bahasa Jerman',
                keterangan: 'Bahasa Jerman adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jerman.',
            },
            {
                id: 14,
                nama: 'Bahasa Rusia',
                keterangan: 'Bahasa Rusia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa rusia.',
            },
            {
                id: 15,
                nama: 'Seni Rupa',
                keterangan: 'Seni Rupa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah seni rupa.',
            },
            {
                id: 16,
                nama: 'Olahraga',
                keterangan: 'Olahraga adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah olahraga.',
            },
            {
                id: 17,
                nama: 'Keterampilan',
                keterangan: 'Keterampilan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah keterampilan.',
            },
            {
                id: 18,
                nama: 'Kewarganegaraan',
                keterangan: 'Kewarganegaraan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kewarganegaraan.',
            },
            {
                id: 19,
                nama: 'Sosiologi',
                keterangan: 'Sosiologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sosiologi.',
            },
            {
                id: 20,
                nama: 'Ekonomi',
                keterangan: 'Ekonomi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah ekonomi.',
            },
            {
                id: 21,
                nama: 'Geografi',
                keterangan: 'Geografi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah geografi.',
            },
            {
                id: 22,
                nama: 'Sejarah',
                keterangan: 'Sejarah adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sejarah.',
            },
            {
                id: 23,
                nama: 'Sastra',
                keterangan: 'Sastra adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sastra.',
            },
            {
                id: 24,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 25,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 26,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 27,
                nama: 'Menggambar',
                keterangan: 'Menggambar adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menggambar.',
            },
            {
                id: 28,
                nama: 'Menulis',
                keterangan: 'Menulis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menulis.',
            },
            {
                id: 29,
                nama: 'Mewarnai',
                keterangan: 'Mewarnai adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah mengwarna.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 1,
                nama: 'Matematika',
                keterangan: 'Matematika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah matematika.',
            },
            {
                id: 2,
                nama: 'Fisika',
                keterangan: 'Fisika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah fisika.',
            },
            {
                id: 3,
                nama: 'Kimia',
                keterangan: 'Kimia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kimia.',
            },
            {
                id: 4,
                nama: 'Biologi',
                keterangan: 'Biologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah biologi.',
            },
            {
                id: 5,
                nama: 'Bahasa Inggris',
                keterangan: 'Bahasa Inggris adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa inggris.',
            },
            {
                id: 6,
                nama: 'Bahasa Indonesia',
                keterangan: 'Bahasa Indonesia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa indonesia.',
            },
            {
                id: 7,
                nama: 'Bahasa Jawa',
                keterangan: 'Bahasa Jawa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jawa.',
            },
            {
                id: 8,
                nama: 'Bahasa Sunda',
                keterangan: 'Bahasa Sunda adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa sunda.',
            },
            {
                id: 9,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 10,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 11,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 12,
                nama: 'Bahasa Prancis',
                keterangan: 'Bahasa Prancis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa prancis.',
            },
            {
                id: 13,
                nama: 'Bahasa Jerman',
                keterangan: 'Bahasa Jerman adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jerman.',
            },
            {
                id: 14,
                nama: 'Bahasa Rusia',
                keterangan: 'Bahasa Rusia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa rusia.',
            },
            {
                id: 15,
                nama: 'Seni Rupa',
                keterangan: 'Seni Rupa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah seni rupa.',
            },
            {
                id: 16,
                nama: 'Olahraga',
                keterangan: 'Olahraga adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah olahraga.',
            },
            {
                id: 17,
                nama: 'Keterampilan',
                keterangan: 'Keterampilan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah keterampilan.',
            },
            {
                id: 18,
                nama: 'Kewarganegaraan',
                keterangan: 'Kewarganegaraan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kewarganegaraan.',
            },
            {
                id: 19,
                nama: 'Sosiologi',
                keterangan: 'Sosiologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sosiologi.',
            },
            {
                id: 20,
                nama: 'Ekonomi',
                keterangan: 'Ekonomi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah ekonomi.',
            },
            {
                id: 21,
                nama: 'Geografi',
                keterangan: 'Geografi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah geografi.',
            },
            {
                id: 22,
                nama: 'Sejarah',
                keterangan: 'Sejarah adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sejarah.',
            },
            {
                id: 23,
                nama: 'Sastra',
                keterangan: 'Sastra adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sastra.',
            },
            {
                id: 24,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 25,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 26,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 27,
                nama: 'Menggambar',
                keterangan: 'Menggambar adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menggambar.',
            },
            {
                id: 28,
                nama: 'Menulis',
                keterangan: 'Menulis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menulis.',
            },
            {
                id: 29,
                nama: 'Mewarnai',
                keterangan: 'Mewarnai adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah mengwarna.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 1,
                nama: 'Matematika',
                keterangan: 'Matematika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah matematika.',
            },
            {
                id: 2,
                nama: 'Fisika',
                keterangan: 'Fisika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah fisika.',
            },
            {
                id: 3,
                nama: 'Kimia',
                keterangan: 'Kimia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kimia.',
            },
            {
                id: 4,
                nama: 'Biologi',
                keterangan: 'Biologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah biologi.',
            },
            {
                id: 5,
                nama: 'Bahasa Inggris',
                keterangan: 'Bahasa Inggris adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa inggris.',
            },
            {
                id: 6,
                nama: 'Bahasa Indonesia',
                keterangan: 'Bahasa Indonesia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa indonesia.',
            },
            {
                id: 7,
                nama: 'Bahasa Jawa',
                keterangan: 'Bahasa Jawa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jawa.',
            },
            {
                id: 8,
                nama: 'Bahasa Sunda',
                keterangan: 'Bahasa Sunda adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa sunda.',
            },
            {
                id: 9,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 10,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 11,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 12,
                nama: 'Bahasa Prancis',
                keterangan: 'Bahasa Prancis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa prancis.',
            },
            {
                id: 13,
                nama: 'Bahasa Jerman',
                keterangan: 'Bahasa Jerman adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jerman.',
            },
            {
                id: 14,
                nama: 'Bahasa Rusia',
                keterangan: 'Bahasa Rusia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa rusia.',
            },
            {
                id: 15,
                nama: 'Seni Rupa',
                keterangan: 'Seni Rupa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah seni rupa.',
            },
            {
                id: 16,
                nama: 'Olahraga',
                keterangan: 'Olahraga adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah olahraga.',
            },
            {
                id: 17,
                nama: 'Keterampilan',
                keterangan: 'Keterampilan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah keterampilan.',
            },
            {
                id: 18,
                nama: 'Kewarganegaraan',
                keterangan: 'Kewarganegaraan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kewarganegaraan.',
            },
            {
                id: 19,
                nama: 'Sosiologi',
                keterangan: 'Sosiologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sosiologi.',
            },
            {
                id: 20,
                nama: 'Ekonomi',
                keterangan: 'Ekonomi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah ekonomi.',
            },
            {
                id: 21,
                nama: 'Geografi',
                keterangan: 'Geografi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah geografi.',
            },
            {
                id: 22,
                nama: 'Sejarah',
                keterangan: 'Sejarah adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sejarah.',
            },
            {
                id: 23,
                nama: 'Sastra',
                keterangan: 'Sastra adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sastra.',
            },
            {
                id: 24,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 25,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 26,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 27,
                nama: 'Menggambar',
                keterangan: 'Menggambar adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menggambar.',
            },
            {
                id: 28,
                nama: 'Menulis',
                keterangan: 'Menulis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menulis.',
            },
            {
                id: 29,
                nama: 'Mewarnai',
                keterangan: 'Mewarnai adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah mengwarna.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 1,
                nama: 'Matematika',
                keterangan: 'Matematika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah matematika.',
            },
            {
                id: 2,
                nama: 'Fisika',
                keterangan: 'Fisika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah fisika.',
            },
            {
                id: 3,
                nama: 'Kimia',
                keterangan: 'Kimia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kimia.',
            },
            {
                id: 4,
                nama: 'Biologi',
                keterangan: 'Biologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah biologi.',
            },
            {
                id: 5,
                nama: 'Bahasa Inggris',
                keterangan: 'Bahasa Inggris adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa inggris.',
            },
            {
                id: 6,
                nama: 'Bahasa Indonesia',
                keterangan: 'Bahasa Indonesia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa indonesia.',
            },
            {
                id: 7,
                nama: 'Bahasa Jawa',
                keterangan: 'Bahasa Jawa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jawa.',
            },
            {
                id: 8,
                nama: 'Bahasa Sunda',
                keterangan: 'Bahasa Sunda adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa sunda.',
            },
            {
                id: 9,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 10,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 11,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 12,
                nama: 'Bahasa Prancis',
                keterangan: 'Bahasa Prancis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa prancis.',
            },
            {
                id: 13,
                nama: 'Bahasa Jerman',
                keterangan: 'Bahasa Jerman adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jerman.',
            },
            {
                id: 14,
                nama: 'Bahasa Rusia',
                keterangan: 'Bahasa Rusia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa rusia.',
            },
            {
                id: 15,
                nama: 'Seni Rupa',
                keterangan: 'Seni Rupa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah seni rupa.',
            },
            {
                id: 16,
                nama: 'Olahraga',
                keterangan: 'Olahraga adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah olahraga.',
            },
            {
                id: 17,
                nama: 'Keterampilan',
                keterangan: 'Keterampilan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah keterampilan.',
            },
            {
                id: 18,
                nama: 'Kewarganegaraan',
                keterangan: 'Kewarganegaraan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kewarganegaraan.',
            },
            {
                id: 19,
                nama: 'Sosiologi',
                keterangan: 'Sosiologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sosiologi.',
            },
            {
                id: 20,
                nama: 'Ekonomi',
                keterangan: 'Ekonomi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah ekonomi.',
            },
            {
                id: 21,
                nama: 'Geografi',
                keterangan: 'Geografi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah geografi.',
            },
            {
                id: 22,
                nama: 'Sejarah',
                keterangan: 'Sejarah adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sejarah.',
            },
            {
                id: 23,
                nama: 'Sastra',
                keterangan: 'Sastra adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sastra.',
            },
            {
                id: 24,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 25,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 26,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 27,
                nama: 'Menggambar',
                keterangan: 'Menggambar adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menggambar.',
            },
            {
                id: 28,
                nama: 'Menulis',
                keterangan: 'Menulis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menulis.',
            },
            {
                id: 29,
                nama: 'Mewarnai',
                keterangan: 'Mewarnai adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah mengwarna.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 1,
                nama: 'Matematika',
                keterangan: 'Matematika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah matematika.',
            },
            {
                id: 2,
                nama: 'Fisika',
                keterangan: 'Fisika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah fisika.',
            },
            {
                id: 3,
                nama: 'Kimia',
                keterangan: 'Kimia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kimia.',
            },
            {
                id: 4,
                nama: 'Biologi',
                keterangan: 'Biologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah biologi.',
            },
            {
                id: 5,
                nama: 'Bahasa Inggris',
                keterangan: 'Bahasa Inggris adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa inggris.',
            },
            {
                id: 6,
                nama: 'Bahasa Indonesia',
                keterangan: 'Bahasa Indonesia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa indonesia.',
            },
            {
                id: 7,
                nama: 'Bahasa Jawa',
                keterangan: 'Bahasa Jawa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jawa.',
            },
            {
                id: 8,
                nama: 'Bahasa Sunda',
                keterangan: 'Bahasa Sunda adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa sunda.',
            },
            {
                id: 9,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 10,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 11,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 12,
                nama: 'Bahasa Prancis',
                keterangan: 'Bahasa Prancis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa prancis.',
            },
            {
                id: 13,
                nama: 'Bahasa Jerman',
                keterangan: 'Bahasa Jerman adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jerman.',
            },
            {
                id: 14,
                nama: 'Bahasa Rusia',
                keterangan: 'Bahasa Rusia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa rusia.',
            },
            {
                id: 15,
                nama: 'Seni Rupa',
                keterangan: 'Seni Rupa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah seni rupa.',
            },
            {
                id: 16,
                nama: 'Olahraga',
                keterangan: 'Olahraga adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah olahraga.',
            },
            {
                id: 17,
                nama: 'Keterampilan',
                keterangan: 'Keterampilan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah keterampilan.',
            },
            {
                id: 18,
                nama: 'Kewarganegaraan',
                keterangan: 'Kewarganegaraan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kewarganegaraan.',
            },
            {
                id: 19,
                nama: 'Sosiologi',
                keterangan: 'Sosiologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sosiologi.',
            },
            {
                id: 20,
                nama: 'Ekonomi',
                keterangan: 'Ekonomi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah ekonomi.',
            },
            {
                id: 21,
                nama: 'Geografi',
                keterangan: 'Geografi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah geografi.',
            },
            {
                id: 22,
                nama: 'Sejarah',
                keterangan: 'Sejarah adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sejarah.',
            },
            {
                id: 23,
                nama: 'Sastra',
                keterangan: 'Sastra adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sastra.',
            },
            {
                id: 24,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 25,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 26,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 27,
                nama: 'Menggambar',
                keterangan: 'Menggambar adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menggambar.',
            },
            {
                id: 28,
                nama: 'Menulis',
                keterangan: 'Menulis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menulis.',
            },
            {
                id: 29,
                nama: 'Mewarnai',
                keterangan: 'Mewarnai adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah mengwarna.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 1,
                nama: 'Matematika',
                keterangan: 'Matematika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah matematika.',
            },
            {
                id: 2,
                nama: 'Fisika',
                keterangan: 'Fisika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah fisika.',
            },
            {
                id: 3,
                nama: 'Kimia',
                keterangan: 'Kimia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kimia.',
            },
            {
                id: 4,
                nama: 'Biologi',
                keterangan: 'Biologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah biologi.',
            },
            {
                id: 5,
                nama: 'Bahasa Inggris',
                keterangan: 'Bahasa Inggris adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa inggris.',
            },
            {
                id: 6,
                nama: 'Bahasa Indonesia',
                keterangan: 'Bahasa Indonesia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa indonesia.',
            },
            {
                id: 7,
                nama: 'Bahasa Jawa',
                keterangan: 'Bahasa Jawa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jawa.',
            },
            {
                id: 8,
                nama: 'Bahasa Sunda',
                keterangan: 'Bahasa Sunda adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa sunda.',
            },
            {
                id: 9,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 10,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 11,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 12,
                nama: 'Bahasa Prancis',
                keterangan: 'Bahasa Prancis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa prancis.',
            },
            {
                id: 13,
                nama: 'Bahasa Jerman',
                keterangan: 'Bahasa Jerman adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jerman.',
            },
            {
                id: 14,
                nama: 'Bahasa Rusia',
                keterangan: 'Bahasa Rusia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa rusia.',
            },
            {
                id: 15,
                nama: 'Seni Rupa',
                keterangan: 'Seni Rupa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah seni rupa.',
            },
            {
                id: 16,
                nama: 'Olahraga',
                keterangan: 'Olahraga adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah olahraga.',
            },
            {
                id: 17,
                nama: 'Keterampilan',
                keterangan: 'Keterampilan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah keterampilan.',
            },
            {
                id: 18,
                nama: 'Kewarganegaraan',
                keterangan: 'Kewarganegaraan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kewarganegaraan.',
            },
            {
                id: 19,
                nama: 'Sosiologi',
                keterangan: 'Sosiologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sosiologi.',
            },
            {
                id: 20,
                nama: 'Ekonomi',
                keterangan: 'Ekonomi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah ekonomi.',
            },
            {
                id: 21,
                nama: 'Geografi',
                keterangan: 'Geografi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah geografi.',
            },
            {
                id: 22,
                nama: 'Sejarah',
                keterangan: 'Sejarah adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sejarah.',
            },
            {
                id: 23,
                nama: 'Sastra',
                keterangan: 'Sastra adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sastra.',
            },
            {
                id: 24,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 25,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 26,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 27,
                nama: 'Menggambar',
                keterangan: 'Menggambar adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menggambar.',
            },
            {
                id: 28,
                nama: 'Menulis',
                keterangan: 'Menulis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menulis.',
            },
            {
                id: 29,
                nama: 'Mewarnai',
                keterangan: 'Mewarnai adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah mengwarna.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 1,
                nama: 'Matematika',
                keterangan: 'Matematika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah matematika.',
            },
            {
                id: 2,
                nama: 'Fisika',
                keterangan: 'Fisika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah fisika.',
            },
            {
                id: 3,
                nama: 'Kimia',
                keterangan: 'Kimia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kimia.',
            },
            {
                id: 4,
                nama: 'Biologi',
                keterangan: 'Biologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah biologi.',
            },
            {
                id: 5,
                nama: 'Bahasa Inggris',
                keterangan: 'Bahasa Inggris adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa inggris.',
            },
            {
                id: 6,
                nama: 'Bahasa Indonesia',
                keterangan: 'Bahasa Indonesia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa indonesia.',
            },
            {
                id: 7,
                nama: 'Bahasa Jawa',
                keterangan: 'Bahasa Jawa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jawa.',
            },
            {
                id: 8,
                nama: 'Bahasa Sunda',
                keterangan: 'Bahasa Sunda adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa sunda.',
            },
            {
                id: 9,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 10,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 11,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 12,
                nama: 'Bahasa Prancis',
                keterangan: 'Bahasa Prancis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa prancis.',
            },
            {
                id: 13,
                nama: 'Bahasa Jerman',
                keterangan: 'Bahasa Jerman adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jerman.',
            },
            {
                id: 14,
                nama: 'Bahasa Rusia',
                keterangan: 'Bahasa Rusia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa rusia.',
            },
            {
                id: 15,
                nama: 'Seni Rupa',
                keterangan: 'Seni Rupa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah seni rupa.',
            },
            {
                id: 16,
                nama: 'Olahraga',
                keterangan: 'Olahraga adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah olahraga.',
            },
            {
                id: 17,
                nama: 'Keterampilan',
                keterangan: 'Keterampilan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah keterampilan.',
            },
            {
                id: 18,
                nama: 'Kewarganegaraan',
                keterangan: 'Kewarganegaraan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kewarganegaraan.',
            },
            {
                id: 19,
                nama: 'Sosiologi',
                keterangan: 'Sosiologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sosiologi.',
            },
            {
                id: 20,
                nama: 'Ekonomi',
                keterangan: 'Ekonomi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah ekonomi.',
            },
            {
                id: 21,
                nama: 'Geografi',
                keterangan: 'Geografi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah geografi.',
            },
            {
                id: 22,
                nama: 'Sejarah',
                keterangan: 'Sejarah adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sejarah.',
            },
            {
                id: 23,
                nama: 'Sastra',
                keterangan: 'Sastra adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sastra.',
            },
            {
                id: 24,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 25,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 26,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 27,
                nama: 'Menggambar',
                keterangan: 'Menggambar adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menggambar.',
            },
            {
                id: 28,
                nama: 'Menulis',
                keterangan: 'Menulis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menulis.',
            },
            {
                id: 29,
                nama: 'Mewarnai',
                keterangan: 'Mewarnai adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah mengwarna.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 1,
                nama: 'Matematika',
                keterangan: 'Matematika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah matematika.',
            },
            {
                id: 2,
                nama: 'Fisika',
                keterangan: 'Fisika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah fisika.',
            },
            {
                id: 3,
                nama: 'Kimia',
                keterangan: 'Kimia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kimia.',
            },
            {
                id: 4,
                nama: 'Biologi',
                keterangan: 'Biologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah biologi.',
            },
            {
                id: 5,
                nama: 'Bahasa Inggris',
                keterangan: 'Bahasa Inggris adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa inggris.',
            },
            {
                id: 6,
                nama: 'Bahasa Indonesia',
                keterangan: 'Bahasa Indonesia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa indonesia.',
            },
            {
                id: 7,
                nama: 'Bahasa Jawa',
                keterangan: 'Bahasa Jawa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jawa.',
            },
            {
                id: 8,
                nama: 'Bahasa Sunda',
                keterangan: 'Bahasa Sunda adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa sunda.',
            },
            {
                id: 9,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 10,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 11,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 12,
                nama: 'Bahasa Prancis',
                keterangan: 'Bahasa Prancis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa prancis.',
            },
            {
                id: 13,
                nama: 'Bahasa Jerman',
                keterangan: 'Bahasa Jerman adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jerman.',
            },
            {
                id: 14,
                nama: 'Bahasa Rusia',
                keterangan: 'Bahasa Rusia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa rusia.',
            },
            {
                id: 15,
                nama: 'Seni Rupa',
                keterangan: 'Seni Rupa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah seni rupa.',
            },
            {
                id: 16,
                nama: 'Olahraga',
                keterangan: 'Olahraga adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah olahraga.',
            },
            {
                id: 17,
                nama: 'Keterampilan',
                keterangan: 'Keterampilan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah keterampilan.',
            },
            {
                id: 18,
                nama: 'Kewarganegaraan',
                keterangan: 'Kewarganegaraan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kewarganegaraan.',
            },
            {
                id: 19,
                nama: 'Sosiologi',
                keterangan: 'Sosiologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sosiologi.',
            },
            {
                id: 20,
                nama: 'Ekonomi',
                keterangan: 'Ekonomi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah ekonomi.',
            },
            {
                id: 21,
                nama: 'Geografi',
                keterangan: 'Geografi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah geografi.',
            },
            {
                id: 22,
                nama: 'Sejarah',
                keterangan: 'Sejarah adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sejarah.',
            },
            {
                id: 23,
                nama: 'Sastra',
                keterangan: 'Sastra adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sastra.',
            },
            {
                id: 24,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 25,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 26,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 27,
                nama: 'Menggambar',
                keterangan: 'Menggambar adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menggambar.',
            },
            {
                id: 28,
                nama: 'Menulis',
                keterangan: 'Menulis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menulis.',
            },
            {
                id: 29,
                nama: 'Mewarnai',
                keterangan: 'Mewarnai adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah mengwarna.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 1,
                nama: 'Matematika',
                keterangan: 'Matematika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah matematika.',
            },
            {
                id: 2,
                nama: 'Fisika',
                keterangan: 'Fisika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah fisika.',
            },
            {
                id: 3,
                nama: 'Kimia',
                keterangan: 'Kimia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kimia.',
            },
            {
                id: 4,
                nama: 'Biologi',
                keterangan: 'Biologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah biologi.',
            },
            {
                id: 5,
                nama: 'Bahasa Inggris',
                keterangan: 'Bahasa Inggris adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa inggris.',
            },
            {
                id: 6,
                nama: 'Bahasa Indonesia',
                keterangan: 'Bahasa Indonesia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa indonesia.',
            },
            {
                id: 7,
                nama: 'Bahasa Jawa',
                keterangan: 'Bahasa Jawa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jawa.',
            },
            {
                id: 8,
                nama: 'Bahasa Sunda',
                keterangan: 'Bahasa Sunda adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa sunda.',
            },
            {
                id: 9,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 10,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 11,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 12,
                nama: 'Bahasa Prancis',
                keterangan: 'Bahasa Prancis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa prancis.',
            },
            {
                id: 13,
                nama: 'Bahasa Jerman',
                keterangan: 'Bahasa Jerman adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jerman.',
            },
            {
                id: 14,
                nama: 'Bahasa Rusia',
                keterangan: 'Bahasa Rusia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa rusia.',
            },
            {
                id: 15,
                nama: 'Seni Rupa',
                keterangan: 'Seni Rupa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah seni rupa.',
            },
            {
                id: 16,
                nama: 'Olahraga',
                keterangan: 'Olahraga adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah olahraga.',
            },
            {
                id: 17,
                nama: 'Keterampilan',
                keterangan: 'Keterampilan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah keterampilan.',
            },
            {
                id: 18,
                nama: 'Kewarganegaraan',
                keterangan: 'Kewarganegaraan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kewarganegaraan.',
            },
            {
                id: 19,
                nama: 'Sosiologi',
                keterangan: 'Sosiologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sosiologi.',
            },
            {
                id: 20,
                nama: 'Ekonomi',
                keterangan: 'Ekonomi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah ekonomi.',
            },
            {
                id: 21,
                nama: 'Geografi',
                keterangan: 'Geografi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah geografi.',
            },
            {
                id: 22,
                nama: 'Sejarah',
                keterangan: 'Sejarah adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sejarah.',
            },
            {
                id: 23,
                nama: 'Sastra',
                keterangan: 'Sastra adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sastra.',
            },
            {
                id: 24,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 25,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 26,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 27,
                nama: 'Menggambar',
                keterangan: 'Menggambar adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menggambar.',
            },
            {
                id: 28,
                nama: 'Menulis',
                keterangan: 'Menulis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menulis.',
            },
            {
                id: 29,
                nama: 'Mewarnai',
                keterangan: 'Mewarnai adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah mengwarna.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 1,
                nama: 'Matematika',
                keterangan: 'Matematika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah matematika.',
            },
            {
                id: 2,
                nama: 'Fisika',
                keterangan: 'Fisika adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah fisika.',
            },
            {
                id: 3,
                nama: 'Kimia',
                keterangan: 'Kimia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kimia.',
            },
            {
                id: 4,
                nama: 'Biologi',
                keterangan: 'Biologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah biologi.',
            },
            {
                id: 5,
                nama: 'Bahasa Inggris',
                keterangan: 'Bahasa Inggris adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa inggris.',
            },
            {
                id: 6,
                nama: 'Bahasa Indonesia',
                keterangan: 'Bahasa Indonesia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa indonesia.',
            },
            {
                id: 7,
                nama: 'Bahasa Jawa',
                keterangan: 'Bahasa Jawa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jawa.',
            },
            {
                id: 8,
                nama: 'Bahasa Sunda',
                keterangan: 'Bahasa Sunda adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa sunda.',
            },
            {
                id: 9,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 10,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 11,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 12,
                nama: 'Bahasa Prancis',
                keterangan: 'Bahasa Prancis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa prancis.',
            },
            {
                id: 13,
                nama: 'Bahasa Jerman',
                keterangan: 'Bahasa Jerman adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jerman.',
            },
            {
                id: 14,
                nama: 'Bahasa Rusia',
                keterangan: 'Bahasa Rusia adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa rusia.',
            },
            {
                id: 15,
                nama: 'Seni Rupa',
                keterangan: 'Seni Rupa adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah seni rupa.',
            },
            {
                id: 16,
                nama: 'Olahraga',
                keterangan: 'Olahraga adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah olahraga.',
            },
            {
                id: 17,
                nama: 'Keterampilan',
                keterangan: 'Keterampilan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah keterampilan.',
            },
            {
                id: 18,
                nama: 'Kewarganegaraan',
                keterangan: 'Kewarganegaraan adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah kewarganegaraan.',
            },
            {
                id: 19,
                nama: 'Sosiologi',
                keterangan: 'Sosiologi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sosiologi.',
            },
            {
                id: 20,
                nama: 'Ekonomi',
                keterangan: 'Ekonomi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah ekonomi.',
            },
            {
                id: 21,
                nama: 'Geografi',
                keterangan: 'Geografi adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah geografi.',
            },
            {
                id: 22,
                nama: 'Sejarah',
                keterangan: 'Sejarah adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sejarah.',
            },
            {
                id: 23,
                nama: 'Sastra',
                keterangan: 'Sastra adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah sastra.',
            },
            {
                id: 24,
                nama: 'Bahasa Arab',
                keterangan: 'Bahasa Arab adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa arab.',
            },
            {
                id: 25,
                nama: 'Bahasa Jepang',
                keterangan: 'Bahasa Jepang adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa jepang.',
            },
            {
                id: 26,
                nama: 'Bahasa Korea',
                keterangan: 'Bahasa Korea adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah bahasa korea.',
            },
            {
                id: 27,
                nama: 'Menggambar',
                keterangan: 'Menggambar adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menggambar.',
            },
            {
                id: 28,
                nama: 'Menulis',
                keterangan: 'Menulis adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menulis.',
            },
            {
                id: 29,
                nama: 'Mewarnai',
                keterangan: 'Mewarnai adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah mengwarna.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },
            {
                id: 30,
                nama: 'Menari',
                keterangan: 'Menari adalah mata pelajaran yang mengandung kemampuan menghitung dan menyelesaikan masalah menari.',
            },

        ];

        // split 0 - 10 arr_mapel
        // const arr_mapel_0_10 = arr_mapel.slice(0, 15);

        // loop arr_mapel with jquery
        $.each(arr_mapel, function(i, val) {
            var string = `<div class="col-lg-3 item item`+i+`" data-list="`+(i+1)+`">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-center">`+val.nama+ ' -' + i +`</h5>
                            <p class="card-text text-center">`+val.keterangan+`</p>
                        </div>
                    </div>
                </div>`;
            if(i >= 20) {
                $('#mapel').append(string).find('.item'+i).addClass('hide-item hide-'+i).removeClass('show_item').hide();
            }else{
                $('#mapel').append(string).find('.item'+i).removeClass('hide-item hide-'+i).addClass('show_item').show();
            }
        });
        
        $(document).ready(function() {
            $('#cari').on('keyup', function() {
                var cari = $(this).val();
                var mulai = 0;
                $('#mapel').find('.item').each(function(i, val) {
                    if ($(this).text().toLowerCase().indexOf(cari.toLowerCase()) > -1 && mulai < 20) {
                            $(this).removeClass('hide-item hide-'+i).addClass('show_item').show();
                            mulai++;
                    } else {
                        $(this).addClass('hide-item hide-'+i).removeClass('show_item').hide();
                    }
                });
            });
        });

        $(window).scroll(function () { 
            if ($(window).scrollTop() >= $(document).height() - $(window).height() - 10) {
                
                // count show_item class
                var show_item = $('#mapel').find('.show_item');
                // get last show_item 
                var last_show_item = show_item.last();

                // get data-list 
                var data_list = last_show_item.data('list');
                
                // input cari
                var cari = $('#cari').val();
                var mulai = 0;
                // jquery count show item
                $('#mapel').find('.hide-item').each(function(i, val) {
                    var data_list_hide = $(this).data('list');
                    if($(this).text().toLowerCase().indexOf(cari.toLowerCase()) > -1 && mulai < 10) {
                        $(this).removeClass('hide-item').show();
                        mulai++;
                    }
                });
            }
        });
    </script>
@endpush
