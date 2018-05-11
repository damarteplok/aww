<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\Transaction;
use App\Credit;
use App\Debit;

class transCon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function create1()
    {
        //
        $credits = Credit::all();
        $debits = Debit::all();

        if($credits->count()==0 || $debits->count() == 0)
        {

            Session::flash('info', 'u must have at least one category');

            return redirect()->back();

        }

        return view('admin.transaction.create1')->with('credits', $credits);
    }
    public function create2()
    {
        //
        $credits = Credit::all();
        $debits = Debit::all();

        if($credits->count()==0 || $debits->count() == 0)
        {

            Session::flash('info', 'u must have at least one category');

            return redirect()->back();

        }

        return view('admin.transaction.create2')->with('debits', $debits);
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store1(Request $request)
    {
        //
        $this->validate($request, [
            'price' => 'required|Integer',
            'description' => 'required',
            'category_id_c' => 'required'
        ]);

        Transaction::create([
            'price' => $request->price,
            'description' => $request->description,
            'credit_id' => $request->category_id_c,
            
        ]);

        Session::flash('success', 'Trans created');

        return redirect()->route('transactions.index');
    }

    public function store2(Request $request)
    {
        //
        $this->validate($request, [
            'price' => 'required|Integer',
            'description' => 'required',
            'category_id_d' => 'required'
        ]);

        Transaction::create([
            'price' => $request->price,
            'description' => $request->description,
            'debit_id' => $request->category_id_d,

        ]);

        Session::flash('success', 'Trans created');

        return redirect()->route('transactions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function rekapIndex(Request $request)
    {
        //
        
        // $trans = Transaction::whereBetween('created_at', array($request->start, $request->end))->get();
        $trans =  Transaction::where('created_at','=',$request->start)
->where('created_at','=',$request->end)
->get();
        
        return view('admin.transaction.rekap')->with('trans',$trans);
                                           
                                         
    }
}
