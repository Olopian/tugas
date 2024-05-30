@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <?php
                            $administrator = [
                              ['icon' => 'fa fa-user', 'link' => '/home', 'label' => 'Dashboard'],
                              ['icon' => 'fa fa-bars', 'link' => '/home', 'label' => 'Data Master', 'submenu' => [
                                ['icon' => 'fa fa-clone', 'link' => '/satuan', 'label' => 'Data Satuan'],
                                ['icon' => 'fa fa-hospital-o', 'link' => '/poliklinik', 'label' => 'Data Poliklinik'],
                                ['icon' => 'fa fa-file-text', 'link' => '/diagnosa', 'label' => 'Data Diagnosa'],
                                ['icon' => 'fa fa-file-text', 'link' => '/tindakan', 'label' => 'Data Tindakan'],
                                // ['icon' => 'fa fa-file-text', 'link' => '/jenis-pemeriksaan-lab', 'label' => 'Jenis Pemeriksaan Lab'],
                                ['icon' => 'fa fa-list-ul', 'link' => '/gejala', 'label' => 'Data Gejala'],
                                ['icon' => 'fa fa-user-md', 'link' => '/user?jabatan=dokter', 'label' => 'Data Dokter'],
                                ['icon' => 'fa fa-cube', 'link' => '/supplier', 'label' => 'Data Supplier'],
                                ['icon' => 'fa fa-list-ul', 'link' => '/unit-stock', 'label' => 'Data Unit Stock'],
                                ['icon' => 'fa fa-user-md', 'link' => '/kategori', 'label' => 'Data Kategori'],
                                ['icon' => 'fa fa-user-md', 'link' => '/barang', 'label' => 'Data Barang'],
                                ['icon' => 'fa fa-list-ul', 'link' => '/perusahaan-asuransi', 'label' => 'Perusahaan Asuransi'],
                                ['icon' => 'fa fa-list-ul', 'link' => '/icd', 'label' => 'Data ICD'],
                                // ['icon' => 'fa fa-home', 'link' => '/kamar', 'label' => 'Data Kamar'],
                                // ['icon' => 'fa fa-bed', 'link' => '/bed', 'label' => 'Data Bed'],
                              ]],
                              ['icon' => 'fa fa-bars', 'link' => '#', 'label' => 'Laporan', 'submenu' => [
                                ['icon' => 'fa fa-plus-square', 'link' => '/laporan/kunjungan-perpoli', 'label' => 'Kunjungan Perpoli'],
                                ['icon' => 'fa fa-plus-square', 'link' => '/stock-opname', 'label' => 'Stock Opname']
                              ]],
                      
                              ['icon' => 'fa fa-list-ul', 'link' => '/surat-sehat-sakit', 'label' => 'Data Surat Sehat Dan Sakit'],
                              ['icon' => 'fa fa-bars', 'link' => '/home', 'label' => 'Transaksi Apotek', 'submenu' => [
                                ['icon' => 'fa fa-cube', 'link' => '/purchase-order', 'label' => 'Purchase Order (PO)'],
                                ['icon' => 'fa fa-plus-square', 'link' => '/purchase-order/create', 'label' => 'Tambah Purchase Order (PO)'],
                                ['icon' => 'fa fa-cube', 'link' => '/permintaan-barang-internal', 'label' => 'Permintaan Barang Internal'],
                                ['icon' => 'fa fa-plus-square', 'link' => '/permintaan-barang-internal/create', 'label' => 'Buat Permintaan Barang'],
                              ]],
                              ['icon' => 'fa fa-user-circle-o', 'link' => '/user?jabatan=user', 'label' => 'Pengguna Aplikasi'],
                              ['icon' => 'fa fa-gear', 'link' => '/setting', 'label' => 'Setting Aplikasi']
                            ];
                      
                            $kasir = [
                              ['icon' => 'fa fa-user', 'link' => '/home', 'label' => 'Dashboard'],
                              ['icon' => 'fa fa-user-circle-o', 'link' => '/pendaftaran', 'label' => 'Data Pasien Antri']
                            ];
                      
                            $apoteker = [
                              ['icon' => 'fa fa-user', 'link' => '/home', 'label' => 'Dashboard'],
                              ['icon' => 'fa fa-user-circle-o', 'link' => '/pendaftaran', 'label' => 'Data Pasien']
                            ];
                      
                            $hrd = [
                              ['icon' => 'fa fa-user', 'link' => '/home', 'label' => 'Dashboard'],
                              ['icon' => 'fa fa-user-circle-o', 'link' => '/pegawai', 'label' => 'Data Pegawai'],
                              ['icon' => 'fa fa-list-alt', 'link' => '/shift', 'label' => 'Data Shift'],
                              ['icon' => 'fa fa-money', 'link' => '/gaji', 'label' => 'Laporan Gaji'],
                              ['icon' => 'fa fa-calendar-check-o', 'link' => '/harilibur', 'label' => 'Setting Hari Libur'],
                              ['icon' => 'fa fa-id-card', 'link' => '/kehadiran-pegawai', 'label' => 'Kehadiran Pegawai'],
                              ['icon' => 'fa fa-list-alt', 'link' => '/komponengaji', 'label' => 'Komponen Gaji'],
                              ['icon' => 'fa fa-list-alt', 'link' => '/kelompok-pegawai', 'label' => 'Kelompok Pegawai'],
                            ];
                      
                            $akutansi = [
                              ['icon' => 'fa fa-user', 'link' => '/home', 'label' => 'Dashboard'],
                              ['icon' => 'fa fa-user', 'link' => '/akun', 'label' => 'Akun'],
                              ['icon' => 'fa fa-user', 'link' => '/jurnal', 'label' => 'Jurnal Umum'],
                              ['icon' => 'fa fa-book', 'link' => '/buku-besar', 'label' => 'Buku Besar'],
                              ['icon' => 'fa fa-user', 'link' => '/neraca-saldo', 'label' => 'Neraca Saldo'],
                              ['icon' => 'fa fa-paste', 'link' => '/akun', 'label' => 'Laporan'],
                              ['icon' => 'fa fa-user', 'link' => '/purchase-order', 'label' => 'Purchase Order'],
                              ['icon' => 'fa fa-paste', 'link' => '/laporan-fee-tindakan', 'label' => 'Laporan Fee Tindakan'],
                              ['icon' => 'fa fa-user', 'link' => '/laporan-tagihan', 'label' => 'Laporan Tagihan'],
                              ['icon' => 'fa fa-paste', 'link' => '/laporan-barang-keluar', 'label' => 'Laporan Barang Keluar'],
                            ];
                      
                            $keuangan = [
                              ['icon' => 'fa fa-user', 'link' => '/home', 'label' => 'Dashboard'],
                              ['icon' => 'fa fa-user', 'link' => '/jurnal', 'label' => 'Jurnal Umum']
                            ];
                      
                            $bagian_gudang = [
                              ['icon' => 'fa fa-user', 'link' => '/home', 'label' => 'Dashboard'],
                              ['icon' => 'fa fa-user', 'link' => '/purchase-order', 'label' => 'Purchase Order'],
                              ['icon' => 'fa fa-user', 'link' => '/supplier', 'label' => 'Data Supplier'],
                              ['icon' => 'fa fa-book', 'link' => '/stock-opname', 'label' => 'Stock Opname'],
                              ['icon' => 'fa fa-user', 'link' => '/barang', 'label' => 'Master Barang'],
                              ['icon' => 'fa fa-user', 'link' => '/kategori', 'label' => 'Master Kategori'],
                              ['icon' => 'fa fa-clone', 'link' => '/satuan', 'label' => 'Data Satuan'],
                              ['icon' => 'fa fa-user', 'link' => '/pbf', 'label' => 'Master PBF']
                            ];
                      
                            $bagian_pendaftaran = [
                                ['icon' => 'fa fa-address-card', 'link' => '/pendaftaran', 'label' => 'Data Pasien Antri'],
                                ['icon' => 'fa fa-plus-square', 'link' => '/pasien/create', 'label' => 'pendaftaran Pasien Baru'],
                                ['icon' => 'fa fa-plus-square-o', 'link' => '/pendaftaran/create', 'label' => 'Pendaftaran Pasien Lama'],
                                ['icon' => 'fa fa-users', 'link' => '/pasien', 'label' => 'Database Pasien'],
                                ['icon' => 'fa fa-calendar', 'link' => '/laporan/kunjungan-perpoli', 'label' => 'Kunjungan Perpoli'],
                                ['icon' => 'fa fa-user-md', 'link' => '/user?jabatan=dokter', 'label' => 'Data Dokter'],
                                
                            ];
                      
                            $admin_medis = [
                              ['icon' => 'fa fa-television', 'link' => '/home', 'label' => 'Dashboard'],
                              ['icon' => 'fa fa-address-card', 'link' => '/pendaftaran', 'label' => 'daftar pasien antri'],
                            ];
                      
                            $rekamedis = [
                              ['icon' => 'fa fa-television', 'link' => '/home', 'label' => 'Dashboard'],
                              ['icon' => 'fa fa-address-card', 'link' => '/pasien', 'label' => 'Database Pasien'],
                            ];
                            $pimpinan = [
                              ['icon' => 'fa fa-user', 'link' => '/home', 'label' => 'Dashboard'],
                              ['icon' => 'fa fa-user', 'link' => '/purchase-order', 'label' => 'Purchase Order'],
                              ['icon' => 'fa fa-money', 'link' => '/gaji', 'label' => 'Laporan Gaji'],
                            ];
                            $poliklinik = [
                              ['icon' => 'fa fa-book', 'link' => '/antrian', 'label' => 'Antrian'],
                              ['icon' => 'fa fa-list-ul', 'link' => '/surat-sehat-sakit', 'label' => 'Data Surat Sehat Dan Sakit'],
                              ['icon' => 'fa fa-address-card', 'link' => '/pendaftaran', 'label' => 'Data Pasien Antri']
                            ];
                      
                            $laboratorium = [
                              ['icon' => 'fa fa-address-card', 'link' => '/pendaftaran', 'label' => 'Data Pasien Antri'],
                              ['icon' => 'fa fa-file-text', 'link' => '/jenis-pemeriksaan-lab', 'label' => 'Jenis Pemeriksaan Lab'],
                            ];
                      
                            // pengaturan menu berdasarkan level
                            $menus = [
                              'administrator'   => $administrator,
                              'dokter'          => [],
                              'kasir'           => $kasir,
                              'keuangan'        => $keuangan,
                              'akutansi'        => $akutansi,
                              'hrd'             => $hrd,
                              'bagian_gudang'   => $bagian_gudang,
                              'admin_medis'     => $admin_medis,
                              'pimpinan'        => $pimpinan,
                              'apoteker'        => $apoteker,
                              'bagian_pendaftaran' => $bagian_pendaftaran,
                              'laboratorium'    => $laboratorium,
                              'rekamedis'       => $rekamedis,
                              'poliklinik'      => $poliklinik
                            ];
                            ?>

                            

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        @foreach($menus[Auth::user()->role] as $menu)
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>MODULE</h3>

              <p>{{strtoupper($menu['label'])}}</p>
            </div>
            <div class="icon">
              <i class="{{$menu['icon']}}"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        @endforeach


   
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
