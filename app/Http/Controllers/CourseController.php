<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Menampilkan daftar kursus.
     */
    public function index(Request $request)
    {
        // Validasi pencarian dan filter status
        $validated = $request->validate([
            'q' => 'nullable|string|max:255',
            'status' => 'nullable|in:open,closed,draft',
        ]);

        $query = Course::query();

        // Search berdasarkan kode dan nama kursus
        if (!empty($validated['q'])) {
            $keyword = $validated['q'];

            $query->where(function ($query) use ($keyword) {
                $query->where('code', 'like', '%' . $keyword . '%')
                    ->orWhere('name', 'like', '%' . $keyword . '%');
            });
        }

        // Filter berdasarkan status kursus
        if (!empty($validated['status'])) {
            $query->where('status', $validated['status']);
        }

        // Pagination 10 data per halaman
        $courses = $query->latest()
            ->paginate(10)
            ->withQueryString();

        return view('courses.index', compact('courses'));
    }

    /**
     * Menampilkan formulir tambah kursus.
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Menyimpan kursus baru.
     */
    public function store(StoreCourseRequest $request)
    {
        Course::create($request->validated());

        return to_route('courses.index')
            ->with('success', 'Kursus berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail kursus.
     */
    public function show(Course $course)
    {
        return view('courses.show', compact('course'));
    }

    /**
     * Menampilkan formulir edit kursus.
     */
    public function edit(Course $course)
    {
        return view('courses.edit', compact('course'));
    }

    /**
     * Memperbarui data kursus.
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        $course->update($request->validated());

        return to_route('courses.show', $course)
            ->with('success', 'Kursus berhasil diperbarui.');
    }

    /**
     * Menghapus kursus.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return to_route('courses.index')
            ->with('success', 'Kursus berhasil dihapus.');
    }
}
