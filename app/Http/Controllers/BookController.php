<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\CompanyData;
use App\Services\DateConversionService;

class BookController extends Controller
{
    protected $dateConversionService;
    public function __construct(DateConversionService $dateConversionService)
    {
        $this->dateConversionService= $dateConversionService;
    }
    public function showNepaliDate($englishDate){
        $nepaliDate = $this->dateConversionService->converttoNepaliDate($englishDate);
        return view('nepaliDate', ['nepaliDate'=>$nepaliDate]);
    }
    public function where($englishDate)
    {
        $nepaliDate = $this->dateConversionService->converttoNepaliDate($englishDate);

        $royal = CompanyData::where('company_name', '=', 'Royal Enfield')->select('company_name', 'items_name')->get();
        return view('db.where', ['royal' => $royal, 'nepaliDate'=>$nepaliDate]);
    }
    public function index()
    {

        return Book::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = Book::create($request->all());
        return response()->json($book, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
