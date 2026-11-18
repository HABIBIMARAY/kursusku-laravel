<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\Participant;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::with(['participant', 'course'])
            ->latest()
            ->get();

        return view('enrollments.index', compact('enrollments'));
    }

    public function create()
    {
        $participants = Participant::orderBy('name')->get();

        // Status kursus pada proyek KursusKu adalah open.
        $courses = Course::where('status', 'open')
            ->orderBy('name')
            ->get();

        return view('enrollments.create', compact('participants', 'courses'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'participant_id' => ['required', 'exists:participants,id'],
            'course_id' => [
                'required',
                'exists:courses,id',
                Rule::unique('enrollments')->where(
                    fn($query) => $query->where(
                        'participant_id',
                        $request->participant_id
                    )
                ),
            ],
        ], [
            'course_id.unique' =>
            'Participant ini sudah terdaftar pada course tersebut.',
        ]);

        Enrollment::create([
            'participant_id' => $validated['participant_id'],
            'course_id' => $validated['course_id'],
            'status' => 'registered',
        ]);

        return redirect()->route('enrollments.index')
            ->with('success', 'Pendaftaran kursus berhasil!');
    }
}
