<?php

namespace App\Http\Controllers;

use App\Models\Auther;
use App\Models\Book;
use App\Models\Book_issue;
use App\Models\Category;
use App\Models\Publisher;
use App\Models\Student;
use Illuminate\Http\Request;


class dashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('master', [
            'authors' => Auther::count(),
            'publishers' => Publisher::count(),
            'categories' => Category::count(),
            'books' => Book::count(),
            'students' => Student::count(),
            'issued_books' => Book_issue::count(),
        ]);
    }
}
