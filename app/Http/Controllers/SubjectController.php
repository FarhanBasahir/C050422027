<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SubjectController extends Controller
{
    public function index(Request $request)
    {
        $subjects = DB::table('subjects')
        ->when($request->input('title'), function ($query, $subject_id) {
            return $query->where('title', 'like', '%' . $title . '%');
        })
        ->select('id', 'title', 'lecturer_id', 'created_at')
        ->orderBy('id', 'asc')
        ->paginate(15);
        return view ('pages.subject.index', compact('subjects'));
    }
}
