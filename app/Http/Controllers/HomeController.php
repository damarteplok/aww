<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Credit;
use App\Debit;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $trans = Transaction::all();
        $saldo = 0;
        $pemasukan = 0;
        $pengeluaran = 0;

        foreach ($trans as $t) {
            if (is_null($t->debits)) {
                
                $pemasukan = $pemasukan + $t->price;
                        
            }
            if (is_null($t->credits)) {
                
                $pengeluaran = $pengeluaran + $t->price;
                        
            }
            
        }

        $saldo = $pemasukan - $pengeluaran;
        
        return view('home')->with('saldo', $saldo)->with('pemasukan', $pemasukan)->with('pengeluaran', $pengeluaran);
    }
}
