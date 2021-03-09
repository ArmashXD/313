<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\DonationsReceived;
use App\Models\DonationsSent;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        return view('donation.index',['data' => DonationsSent::with('donations')->get()]);
    }

    public function donationSend()
    {
        return view('donation.sent',['data' =>  Donation::where('user_id','!=',auth()->id())->where('status',true)->get()]);
    }

    public function submitDonation(Request $request)
    {
        DonationsSent::insert([
           'donation_id' => $request->donation_id,
           'to_user' => $request->user_id,
           'status' => 'Submitted'
        ]);
        DonationsReceived::insert([
            'from' => auth()->id(),
            'user_id' => $request->user_id,
            'donation_id' => $request->donation_id,
            'status' => 'Pending'
        ]);
        Donation::where('id', $request->donation_id)->update([
            'status' => false
        ]);
        return back()->with('success','Your Donation has been Sent!');
    }

    public function receivedDonations()
    {
        $data = DonationsReceived::with('donations')->where('from',auth()->id())->where('status','Sended')->get();
        return view('donation.received',compact('data'));
    }

    public function changeStatus(Request $request)
    {
        DonationsReceived::where('id',$request->id)->update([
            'status' => $request->status
        ]);
        return back()->with('success','Donation Received');
    }

    public function create()
    {
    return view('donation.create');
    }

    public function store(Request $request)
    {
        $donate = new Donation();
        $donate->donation_id = Donation::generateKey();
        $donate->user_id = auth()->user()->id;
        $donate->fill($request->all())->save();
        return redirect('/donation')->with('success','Donation created !');
    }

    public function edit($id)
    {
    //
        return view('donation.edit',['donate' => Donation::find($id)]);
    }

    public function update(Request $request)
    {
    //
        $donate = Donation::findOrFail($request->id);
        $donate->id = $request->id;
        $donate->fill($request->all())->save();
        return redirect('/donation')->with('success','Updated');
    }


    public function destroy($id)
    {
    //
        DonationsSent::destroy($id);
        return redirect('/donation')->with('success','Deleted !');
    }
}
