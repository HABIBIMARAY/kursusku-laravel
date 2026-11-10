    @extends('layouts.app')

    @section('title', 'Edit Kursus - KursusKu')

    @section('content')

    <div class="page-heading">
        <span class="eyebrow">MANAJEMEN DATA</span>
        <h1>Edit Kursus</h1>
        <p>Perbarui informasi program kursus yang tersimpan di KursusKu.</p>
    </div>

    <div class="panel">

        <div class="panel-header">
            <div>
                <h2>Formulir Edit Kursus</h2>
                <p>Ubah informasi kursus pada kolom berikut.</p>
            </div>
        </div>

        @if ($errors->any())
        <div class="alert alert-error">
            <strong>Data belum berhasil diperbarui.</strong>
            <ul style="padding-left: 18px; margin-top: 7px;">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('courses.update', $course) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-grid">

                <div class="form-group">
                    <label for="code">Kode Kursus</label>
                    <input type="text" id="code" name="code"
                        class="form-control"
                        value="{{ old('code', $course->code) }}" required>
                    @error('code')
                    <small class="error-text">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="name">Nama Kursus</label>
                    <input type="text" id="name" name="name"
                        class="form-control"
                        value="{{ old('name', $course->name) }}" required>
                    @error('name')
                    <small class="error-text">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group" style="grid-column: 1 / -1;">
                    <label for="description">Deskripsi</label>
                    <textarea id="description" name="description"
                        class="form-control" rows="4">{{ old('description', $course->description) }}</textarea>
                    @error('description')
                    <small class="error-text">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="fee">Biaya Kursus (Rp)</label>
                    <input type="number" id="fee" name="fee"
                        class="form-control"
                        value="{{ old('fee', $course->fee) }}" min="0" required>
                    @error('fee')
                    <small class="error-text">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="quota">Kuota Peserta</label>
                    <input type="number" id="quota" name="quota"
                        class="form-control"
                        value="{{ old('quota', $course->quota) }}"
                        min="1" max="500" required>
                    @error('quota')
                    <small class="error-text">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="start_date">Tanggal Mulai</label>
                    <input type="date" id="start_date" name="start_date"
                        class="form-control"
                        value="{{ old('start_date', $course->start_date?->format('Y-m-d')) }}"
                        required>
                    @error('start_date')
                    <small class="error-text">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status">Status Kursus</label>
                    <select id="status" name="status" class="form-control" required>
                        <option value="draft"
                            {{ old('status', $course->status) == 'draft' ? 'selected' : '' }}>
                            Draft
                        </option>
                        <option value="open"
                            {{ old('status', $course->status) == 'open' ? 'selected' : '' }}>
                            Open
                        </option>
                        <option value="closed"
                            {{ old('status', $course->status) == 'closed' ? 'selected' : '' }}>
                            Closed
                        </option>
                    </select>
                    @error('status')
                    <small class="error-text">{{ $message }}</small>
                    @enderror
                </div>

            </div>

            <div class="form-actions">
                <a href="{{ route('courses.index') }}" class="btn btn-light">
                    Batal
                </a>

                <button type="submit" class="btn btn-primary">
                    Perbarui Kursus
                </button>
            </div>

        </form>

    </div>

    @endsection