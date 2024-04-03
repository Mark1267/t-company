<?php

namespace App\Http\Controllers\Admin;

use App\Models\Account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CurrencyController extends Controller
{
    public function add(){
        return view('dashboard.admin.currency.add');
    }

    public function addSave(Request $request){
        $request->validate([
            'name' => 'required|unique:accounts,name',
            'address' => 'required|string|max:225',
            'network' => 'required|string',
            'symbol' => 'required|string'
        ]);

        Account::create([
            'name' =>$request->name,
            'address' => $request->address,
            'network' => $request->network,
            'symbol' => $request->symbol,
        ]);

        return redirect()->route('admin.overview');
    }

    
    public function edit($currency_id){
        $currency = Account::find($currency_id);

        return view('dashboard.admin.currency.edit', [
            'currency' => $currency
        ]);
    }

    public function editSave(Request $request){
        $currency = $request->validate([
            'name' => 'required|unique:accounts,name,' . $request->currency_id,
            'address' => 'required|string|max:225',
            'network' => 'required|string',
            'symbol' => 'required|string'
        ]);

        Account::where('id', $request->currency_id)->update([
            'name' =>$request->name,
            'address' => $request->address,
            'network' => $request->network,
            'symbol' => $request->symbol,
        ]);

        return redirect()->route('admin.overview');
    }

    public function delete($currency_id){
        $currency = Account::find($currency_id);

        $currency->delete();
        
        return redirect()->route('admin.overview');
    }
}
