<?php

namespace App\Http\Controllers\Admin\Transactions;

use App\Events\Admin\Transactions\BonusEvent;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Admin\Transaction\BonusService;
use App\Http\Requests\Admin\Transactions\BonusRequest;

class BonusController extends Controller
{
    public function add(){
        return view('dashboard.admin.transactions.bonus.add', [
            'users' => User::where('admin', 0)->orderBy('created_at', 'desc')->get()
        ]);
    }

    public function addSave(BonusRequest $request){
        if((new BonusService())->addBonus($request->user_id, $request->amount)){
            event(new BonusEvent($request->user_id, $request->amount));
            toastr()->success('Bonus Added Sucessfuly');
            return redirect()->route('admin.users.all', ['type' => 'users']);
        }else{
            toastr()->error('Something went wrong');
            return back();
        }
    }
}
