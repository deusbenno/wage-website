<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate input
        $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'nullable|email|max:150',
            'message' => 'required|string|min:5',
        ]);

        // 2. Save to database
        Feedback::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'approved' => false, // default waiting admin approval
        ]);

        // 3. Redirect back with success message
        return back()->with('success', 'Feedback sent successfully!');
    }
    public function index()
{
    $feedbacks = Feedback::latest()->get();
    return view('admin.feedback', compact('feedbacks'));
}

public function approve($id)
{
    $feedback = Feedback::findOrFail($id);
    $feedback->approved = true;
    $feedback->save();

    return back()->with('success', 'Feedback approved!');
}

public function destroy($id)
{
    $feedback = Feedback::findOrFail($id);
    $feedback->delete();

    return back()->with('success', 'Feedback deleted!');
}
}