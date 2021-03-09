<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class MyMoneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('money.index');
    }

    public function getMoney(Request $request)
    {

        if ($request->ajax()) {
            $data = Payment::where('user_id',auth()->user()->getAuthIdentifier())->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $csrf = csrf_token();
                    $actionBtn = "<a href='money/$row->id/edit' class='edit btn btn-primary btn-sm'>Edit</a>
            <form action='money/$row->id' method='POST'>
            <input type='hidden' name='_method' value='DELETE'>
            <input type='hidden' name='_token' value='$csrf'>
            <button class='delete btn btn-danger btn-sm' type='submit'>Delete</button>
            </form>";
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $level = str_replace('£', '', Auth::user()->level->name);
        $money = new Payment();
        $money->user_id = Auth::user()->id;
        $money->fill($request->all())->save();
        Donation::create([
            'user_id' => Auth::user()->id,
            'money_id' => $money->id,
            'donation_id' => Donation::generateKey(),
            'amount' => $level,
        ]);
        return redirect('dashboard/money')->with('success', 'Payment Added');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('money.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $money = new Payment();
        $money->id = $request->id;
        $money->fill($request->all())->update();
        return redirect('/money')->with('success', 'money Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $money = new Payment();
        $money->destroy($id);
        return redirect('dashboard/money')->with('success', 'Payment Method Deleted');
    }
}
