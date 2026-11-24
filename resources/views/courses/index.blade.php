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

    {{-- FORM SEARCH DAN FILTER --}}
    <form method="GET" action="{{ route('courses.index') }}"
        style="display: flex; flex-wrap: wrap; gap: 10px; margin: 20px 0;">

        <input
            type="search"
            name="q"
            value="{{ request('q') }}"
            placeholder="Cari kode atau nama kursus..."
            class="form-control"
            style="flex: 1; min-width: 200px;">

        <select name="status" class="form-control"
            style="min-width: 150px;">
            <option value="">Semua Status</option>
            <option value="open" {{ request('status') == 'open' ? 'selected' : '' }}>Open</option>
            <option value="closed" {{ request('status') == 'closed' ? 'selected' : '' }}>Closed</option>
            <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
        </select>

        <button type="submit" class="btn btn-primary">
            Cari
        </button>

        <a href="{{ route('courses.index') }}" class="btn btn-light">
            Reset
        </a>
    </form>

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
                    <td>{{ $courses->firstItem() + $loop->index }}</td>
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
                            <strong>Tidak ada kursus yang sesuai.</strong>
                            <p style="margin-top: 6px;">
                                Coba ubah kata kunci pencarian atau filter status.
                            </p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    {{-- TOTAL DATA --}}
    <div style="margin-top: 15px; color: #64748b; font-size: 11px;">
        Total data kursus ditemukan:
        <strong>{{ $courses->total() }}</strong>
    </div>

    {{-- PAGINATION --}}
    <div style="margin-top: 20px;">
        {{ $courses->links() }}
    </div>

</div>

@endsection