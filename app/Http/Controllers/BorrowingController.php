<?php

namespace App\Http\Controllers;

use App\Models\Borrowing;
use App\Models\Book;
use App\Models\Student;
use Illuminate\Http\Request;

class BorrowingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrowings = Borrowing::latest()->paginate(5);

        return view('borrowings.index',compact('borrowings'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all();
        $students = Student::all(); 
        return view('borrowings.create',compact('books', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_peminjam'=>'required',
            'judul_buku'=>'required',
            'tgl_pinjam'=>'required',
            'tgl_kembali'=>'required',
            'ket'=>'required'
        ]);

        Borrowing::create($request->all());
        return redirect()->route('borrowings.index')
                        ->with('success','Berhasil Menyimpan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Borrowing  $borrowing
     * @return \Illuminate\Http\Response
     */
    public function show(Borrowing $borrowing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Borrowing  $borrowing
     * @return \Illuminate\Http\Response
     */
    public function edit(Borrowing $borrowing)
    {
        $books = Book::all();
        $students = Student::all(); 
        return view('borrowings.edit',compact('borrowing', 'books', 'students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Borrowing  $borrowing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Borrowing $borrowing)
    {
        $request->validate([
            'nama_peminjam'=>'required',
            'judul_buku'=>'required',
            'tgl_pinjam'=>'required',
            'tgl_kembali'=>'required',
            'ket'=>'required'
        ]);

        $borrowing->update($request->all());
        return redirect()->route('borrowings.index')
                        ->with('success','Berhasil Update !');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Borrowing  $borrowing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borrowing $borrowing)
    {
        $borrowing->delete();

        return redirect()->route('borrowings.index')
                        ->with('success','Berhasil Hapus !');
    }
}