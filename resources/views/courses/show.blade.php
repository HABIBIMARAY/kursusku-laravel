@extends('layouts.app')

@section('title', 'Detail Kursus - KursusKu')

@section('content')
@if (session('success'))
<div class="alert alert-success">
    <strong>✓ Berhasil!</strong>
    {{ session('success') }}
</div>
@endif
<div class="page-heading">
    <div class="eyebrow">KURSUSKU · DETAIL KURSUS</div>
    <h1>Detail Kursus</h1>
    <p>Informasi lengkap mengenai program kursus yang dipilih.</p>
</div>

<div class="panel">

    <div class="panel-header">
        <div>
            <h2>{{ $course->name }}</h2>
            <p>Informasi program kursus KursusKu</p>
        </div>

        <span class="status status-{{ $course->status }}">
            {{ $course->status }}
        </span>
    </div>

    <div class="table-wrap">
        <table>
            <tbody>
                <tr>
                    <th style="width: 30%;">Kode Kursus</th>
                    <td>{{ $course->code }}</td>
                </tr>

                <tr>
                    <th>Nama Kursus</th>
                    <td>{{ $course->name }}</td>
                </tr>

                <tr>
                    <th>Deskripsi</th>
                    <td style="white-space: normal;">
                        {{ $course->description ?: 'Belum ada deskripsi.' }}
                    </td>
                </tr>

                <tr>
                    <th>Biaya Kursus</th>
                    <td>Rp {{ number_format($course->fee, 0, ',', '.') }}</td>
                </tr>

                <tr>
                    <th>Kuota Peserta</th>
                    <td>{{ $course->quota }} peserta</td>
                </tr>

                <tr>
                    <th>Tanggal Mulai</th>
                    <td>{{ $course->start_date?->format('d-m-Y') }}</td>
                </tr>

                <tr>
                    <th>Status Kursus</th>
                    <td>
                        <span class="status status-{{ $course->status }}">
                            {{ $course->status }}
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="form-actions">
        <a href="{{ route('courses.index') }}" class="btn btn-light">
            Kembali
        </a>

        <a href="{{ route('courses.edit', $course) }}" class="btn btn-primary">
            Edit Kursus
        </a>
    </div>

</div>

@endsection