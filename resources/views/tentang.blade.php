@extends('layouts.app')

@section('judul', 'Tentang')

@section('isi')
   <h2>Tentang Aplikasi Ini</h2>
   <p>Aplikasi ini dibuat untuk praktikum Pemrograman Berbasis Web 2.</p>
   <ul>
      <li>Nama: {{ $nama }}</li>
      <li>NIM: {{ $nim }}</li>
      <li>Kelas: {{ $kelas }}</li>
   </ul>
@endsection