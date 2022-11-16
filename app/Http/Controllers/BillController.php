<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bill;
use Str;

class BillController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('bill.create');
    }


    public function status()
    {
        $bills = Bill::all();
        return view('bill.status', compact('bills'));
    }

    public function managebill(Bill $bill)
    {
        return view('bill.show', compact('bill'));
    }

    public function viewbill(Bill $bill)
    {
        return view('bill.view', compact('bill'));
    }


    public function manage()
    {
        $bills = Bill::all();
        return view('bill.manage', compact('bills'));
    }

    public function update(Request $request)
    {
        if ($request->has('photo')) {
            $ext = $request->file('photo')->getClientOriginalExtension();
            $photo = $request->file('photo')->storeAs('bills', uniqid() . "." . $ext, 'public');


            $bill = Bill::create([
                'bilnum' => $request->bilnum,
                'photo' => $photo
            ]);
        }

        return redirect('createbill');

       
       
       
        return $request->all();
    }
}
