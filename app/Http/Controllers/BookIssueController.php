<?php

namespace App\Http\Controllers;

use App\Models\Book_issue;
use Illuminate\Http\Request;
use App\Http\Requests\Storebook_issueRequest;
use App\Http\Requests\Updatebook_issueRequest;
use App\Models\Auther;
use App\Models\Book;
use App\Models\Setting;
use App\Models\Student;


class BookIssueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $book_issue = Book_issue::all();
        return view('book.issueBooks', compact('book_issue'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('book.issueBook_add', [
            'students' => Student::latest()->get(),
            'books' => Book::where('status', 'Y')->get(),
        ]);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storebook_issueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storebook_issueRequest $request)
    {
        $issue_date = date('Y-m-d');
        $return_date = date('Y-m-d', strtotime("+" . (Setting::latest()->first()->return_days) . " days"));
        $data = book_issue::create($request->validated() + [
            'student_id' => $request->student_id,
            'book_id' => $request->book_id,
            'issue_date' => $issue_date,
            'return_date' => $return_date,
            'issue_status' => 'N',
        ]);
        $data->save();
        $book = Book::find($request->book_id);
        $book->status = 'N';
        $book->save();
        return redirect()->route('book_issued');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book_issue $book_issue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
         // calculate the total fine  (total days * fine per day)
         $book = book_issue::where('id',$id)->get()->first();
         $first_date = date_create(date('Y-m-d'));
         $last_date = date_create($book->return_date);
         $diff = date_diff($first_date, $last_date);
         $fine = (Setting::latest()->first()->fine * $diff->format('%a'));
         return view('book.issueBook_edit', [
             'book' => $book,
             'fine' => $fine,
         ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $book = book_issue::find($id);
        $book->issue_status = 'Y';
        $book->return_day = now();
        $book->save();
        $bookk = book::find($book->book_id);
        $bookk->status= 'Y';
        $bookk->save();
        return redirect()->route('book_issued');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        book_issue::find($id)->delete();
        return redirect()->route('book_issued');
    }
}
