<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\Transaction;
use App\Credit;
use App\Debit;

class TransactionsController extends Controller
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
    public function index()
    {
        //
        return view('admin.transaction.index')->with('trans', Transaction::orderBy('created_at', 'desc')->paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $credits = Credit::all();
        $debits = Debit::all();

        if($credits->count()==0 || $debits->count() == 0)
        {

            Session::flash('info', 'u must have at least one category');

            return redirect()->back();

        }

        return view('admin.transaction.create');
    }
    


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

       
       
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
       return view('admin.transaction.edit')->with('trans', Transaction::find($id));
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
         $this->validate($request, [
            'price' => 'required',
            'description' => 'required',
        ]);
        
        $trans = Transaction::find($id);
        $trans->price = $request->price;
        $trans->description = $request->description;
        $trans->save();

        Session::flash('success','Trans edited succesfully');

        return redirect()->route('transactions.index');
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
        Transaction::destroy($id);

        Session::flash('success', 'Transaction Deleted');

        return redirect()->route('transactions.index');
    }
}
