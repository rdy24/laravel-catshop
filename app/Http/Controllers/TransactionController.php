<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('transaction.transaction', compact('transactions'));
    }
    public function create()
    {
        return view('transaction.transaction-entry');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'tanggal' => 'required',
        ]);

        Transaction::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'tanggal' => $request->tanggal,
        ]);

        return redirect('/transaction');
    }

    public function edit($id_transaction)
    {
        $transaction = Transaction::find($id_transaction);
        return view('transaction.transaction-edit', compact('transaction'));
    }

    public function update(Request $request, $id_transaction)
    {
        $this->validate($request, [
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'tanggal' => 'required',
        ]);

        $transaction = Transaction::find($id_transaction);

        $transaction->update([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'tanggal' => $request->tanggal,
        ]);

        return redirect('/transaction');
    }

    public function delete($id_transaction)
    {
        $transaction = Transaction::find($id_transaction);
        return view('transaction.transaction-hapus', compact('transaction'));
    }

    public function destroy($id_transaction)
    {
        $transaction = Transaction::find($id_transaction);
        $transaction->delete();
        return redirect('/transaction');
    }
}
