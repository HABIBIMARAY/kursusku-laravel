@extends('layouts.app')

@section('title', 'Data Pendaftaran - KursusKu')

@section('content')

@if (session('success'))
<div class="alert alert-success">
    <strong>✓ Berhasil!</strong>
    {{ session('success') }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-error">
    Terdapat kesalahan pada data yang dimasukkan.
</div>
@endif

<div class="page-heading">
    <span class="eyebrow">MANAJEMEN DATA</span>
    <h1>Data Pendaftaran</h1>
    <p>Kelola peserta yang telah mendaftar pada program kursus KursusKu.</p>
</div>

<div class="panel">

    <div class="panel-header">
        <div>
            <h2>Daftar Peserta Kursus</h2>
            <p>Data peserta dan kursus yang diikuti.</p>
        </div>

        <a href="{{ route('enrollments.create') }}" class="btn btn-primary">
            + Tambah Pendaftaran
        </a>
    </div>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Peserta</th>
                    <th>Email</th>
                    <th>Nama Kursus</th>
                    <th>Tanggal Mulai</th>
                    <th>Status Pendaftaran</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($enrollments as $enrollment)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <strong>{{ $enrollment->participant->name }}</strong>
                    </td>
                    <td>{{ $enrollment->participant->email }}</td>
                    <td>{{ $enrollment->course->name }}</td>
                    <td>
                        {{ $enrollment->course->start_date?->format('d-m-Y') }}
                    </td>
                    <td>
                        <span class="status status-{{ $enrollment->status }}">
                            {{ $enrollment->status }}
                        </span>
                    </td>
                </tr>

                @empty
                <tr>
                    <td colspan="6">
                        <div class="empty-state">
                            <strong>Belum ada data pendaftaran.</strong>
                            <p style="margin-top: 6px;">
                                Silakan tambahkan peserta melalui tombol Tambah Pendaftaran.
                            </p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div style="margin-top: 15px; color: #64748b; font-size: 11px;">
        Total pendaftaran:
        <strong>{{ $enrollments->count() }}</strong>
    </div>

</div>

@endsection