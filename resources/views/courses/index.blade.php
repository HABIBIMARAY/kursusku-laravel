@extends('layouts.app')

@section('title', 'Data Kursus - KursusKu')

@section('content')
@if (session('success'))
<div class="alert alert-success">
    <strong>✓ Berhasil!</strong>
    {{ session('success') }}
</div>
@endif

<div class="page-heading">
    <span class="eyebrow">MANAJEMEN DATA</span>
    <h1>Data Kursus</h1>
    <p>Kelola informasi program kursus yang tersedia di KursusKu.</p>
</div>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-error">
    Terdapat kesalahan pada data yang dimasukkan. Silakan periksa kembali.
</div>
@endif

<div class="panel">

    <div class="panel-header">
        <div>
            <h2>Daftar Program Kursus</h2>
            <p>Data kursus yang tersimpan di database.</p>
        </div>

        <a href="{{ route('courses.create') }}" class="btn btn-primary">
            + Tambah Kursus
        </a>
    </div>

    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Kode</th>
                    <th>Nama Kursus</th>
                    <th>Biaya</th>
                    <th>Kuota</th>
                    <th>Tanggal Mulai</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($courses as $course)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><strong>{{ $course->code }}</strong></td>
                    <td>{{ $course->name }}</td>
                    <td>Rp{{ number_format($course->fee, 0, ',', '.') }}</td>
                    <td>{{ $course->quota }} peserta</td>
                    <td>
                        {{ $course->start_date?->format('d-m-Y') }}
                    </td>
                    <td>
                        <span class="status status-{{ $course->status }}">
                            {{ $course->status }}
                        </span>
                    </td>
                    <td>
                        <div style="display: flex; gap: 5px; align-items: center;">

                            <a href="{{ route('courses.show', $course) }}"
                                class="btn btn-light">
                                Detail
                            </a>

                            <a href="{{ route('courses.edit', $course) }}"
                                class="btn btn-primary">
                                Edit
                            </a>

                            <form action="{{ route('courses.destroy', $course) }}"
                                method="POST"
                                onsubmit="return confirm('Apakah kamu yakin ingin menghapus kursus ini?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                    class="btn"
                                    style="background: #fee2e2; color: #b91c1c;">
                                    Hapus
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>

                @empty
                <tr>
                    <td colspan="8">
                        <div class="empty-state">
                            <strong>Belum ada data kursus.</strong>
                            <p style="margin-top: 6px;">
                                Silakan tambahkan data kursus melalui tombol Tambah Kursus.
                            </p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div style="margin-top: 15px; color: #64748b; font-size: 11px;">
        Total data kursus: <strong>{{ $courses->count() }}</strong>
    </div>

</div>

@endsection