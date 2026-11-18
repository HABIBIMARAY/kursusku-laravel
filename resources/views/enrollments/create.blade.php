@extends('layouts.app')

@section('title', 'Tambah Pendaftaran - KursusKu')

@section('content')

<div class="page-heading">
    <span class="eyebrow">MANAJEMEN DATA</span>
    <h1>Tambah Pendaftaran</h1>
    <p>Daftarkan peserta ke program kursus yang tersedia di KursusKu.</p>
</div>

@if ($errors->any())
<div class="alert alert-error">
    <strong>Terjadi kesalahan!</strong>
    <ul style="margin-top: 8px; padding-left: 20px;">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="panel">

    <div class="panel-header">
        <div>
            <h2>Form Pendaftaran Kursus</h2>
            <p>Lengkapi informasi peserta dan pilih kursus.</p>
        </div>
    </div>

    <form action="{{ route('enrollments.store') }}" method="POST">
        @csrf

        <div style="padding: 20px;">

            <div class="form-group" style="margin-bottom: 18px;">
                <label for="participant_id">Nama Peserta</label>

                <select name="participant_id" id="participant_id"
                    class="form-control" required>
                    <option value="">-- Pilih Peserta --</option>

                    @foreach ($participants as $participant)
                    <option value="{{ $participant->id }}"
                        {{ old('participant_id') == $participant->id ? 'selected' : '' }}>
                        {{ $participant->name }} - {{ $participant->email }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group" style="margin-bottom: 18px;">
                <label for="course_id">Program Kursus</label>

                <select name="course_id" id="course_id"
                    class="form-control" required>
                    <option value="">-- Pilih Kursus --</option>

                    @foreach ($courses as $course)
                    <option value="{{ $course->id }}"
                        {{ old('course_id') == $course->id ? 'selected' : '' }}>
                        {{ $course->name }} -
                        Rp{{ number_format($course->fee, 0, ',', '.') }}
                    </option>
                    @endforeach
                </select>

                @if ($courses->isEmpty())
                <p style="color: #dc2626; margin-top: 8px; font-size: 12px;">
                    Belum ada kursus dengan status open. Silakan buka status
                    kursus terlebih dahulu.
                </p>
                @endif
            </div>

            <div style="display: flex; gap: 10px; margin-top: 25px;">

                <button type="submit" class="btn btn-primary"
                    {{ $courses->isEmpty() || $participants->isEmpty() ? 'disabled' : '' }}>
                    Daftarkan Peserta
                </button>

                <a href="{{ route('enrollments.index') }}" class="btn btn-light">
                    Kembali
                </a>

            </div>

        </div>
    </form>

</div>

@endsection