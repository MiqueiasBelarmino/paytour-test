<?php

namespace App\Http\Controllers;

use App\Models\Submission;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    public function index()
    {
        return Submission::query()->orderBy('sent_at', 'desc')->paginate(10);
    }

    public function show($id)
    {
        return Submission::findOrFail($id);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'email'        => 'required|email',
            'phone'        => 'nullable|string|max:20',
            'desired_role' => 'required|string|max:255',
            'schooling'    => 'required|string',
            'observations' => 'nullable|string',
            'file'         => 'required|file|mimes:doc,docx,pdf|max:1024',
        ]);

        $file = $request->file('file');
        $path = $file->store('submissions');

        $submission = Submission::create([
            'name'        => $validated['name'],
            'email'       => $validated['email'],
            'phone'       => $validated['phone'] ?? null,
            'desired_role'=> $validated['desired_role'],
            'schooling'   => $validated['schooling'],
            'observations'=> $validated['observations'] ?? null,
            'file_path'   => $path,
            'file_name'   => $file->getClientOriginalName(),
            'file_size'   => $file->getSize(),
            'ip_address'  => $request->ip(),
            'sent_at'     => now(),
        ]);

        return response()->json([
            'message' => 'Submissão enviada com sucesso!',
            'submission' => $submission,
        ], 201);
    }
}
