<?php

namespace App\Http\Controllers;

use App\Models\Child;
use App\Models\GiftedToken;
use App\Models\Payment;
use App\Models\PurchasedToken;
use App\Models\Tokens;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TokenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tokens = Payment::where('user_id',1)->select(['payment_account','payment_method'])->first();
        return view('tokens.index', ['tokens' => Tokens::all(), 'payment' => $tokens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tokens.create', ['tokens' => PurchasedToken::where('purchased_by',auth()->id())->where('admin_status',true)->get(),'gifted' => GiftedToken::all()]);
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
        Session::put('token', $request->get('token_amount'));
        Session::put('token_id', $request->get('token_id'));
        return redirect('dashboard/payment');
    }

    public function assignedToken()
    {
        //jugar
        $child1 = Child::with('getChildOne')->where('user_id',auth()->id())->first();
        $child2 = Child::with('getChildTwo')->where('user_id',auth()->id())->first();
        return view('tokens.assigned', ['child1' => $child1,'child2' => $child2, 'giftedTokens' =>GiftedToken::where('user_id', '!=' , auth()->user()->name)->get() ]);
    }

    public function giftToken(Request $request)
    {
        $giftToken = new GiftedToken();
        foreach(Tokens::all() as $item)
        {
            $giftToken->token_id = $item->id;
        }
        $giftToken->name = auth()->user()->name;
        $giftToken->status = 'gifted';
        $giftToken->gift_to = $request->gift_to;
        $giftToken->user_id = $request->user_id;
        $giftToken->save();
        return back()->with('success','Token Gifted Succesfully');
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
