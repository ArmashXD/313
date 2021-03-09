<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PurchasedToken;
use App\Models\Tokens;
use Illuminate\Http\Request;

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
        return view('admin.tokens.index',['tokens' => Tokens::all(), 'purchasedTokens' => PurchasedToken::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tokens.create');
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
        $token = new Tokens();
        $token->code = $token->generateCode();
        $token->amount = 10;
        $token->fill($request->all())->save();
        return redirect('admin/tokens')->with('success','Token Created');
    }
    public function tokenChange(Request $request)
    {
        $token = PurchasedToken::where('id',$request->get('token_id'));
        $token->update([
            'admin_status' => $request->get('active')
        ]);
        return back()->with('success','User Token Activated');
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
    public function destroy(Tokens $tokens)
    {
        //
        $tokens->delete();
        return back()->with('success','Token Deleted');
    }
}
