<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request; 
use App\Models\Party;

class PartyController extends Controller{

    // load manage party view
    public function manage(){

        // get all parties
        $parties = Party::all();

        // get specific column value
        // $parties = Party::select('id', 'party_type', 'name')->get();
        return view('party.manage', compact('parties'));
    }

    // load add party view
    public function add(){
        return view('party.add');
    }

    // store party data
    public function create(Request $request){

        // data validation
        $request->validate([
            'party_type' => 'required', 
            'name' => 'required', 
            'phone' => 'required', 
            'address' => 'required', 
            'account_holder' => 'required', 
            'account_number' => 'required', 
            'bank' => 'required', 
            'bank_branch' => 'required', 
            'bank_state' => 'required', 
            'bank_ifse' => 'required', 
            'bank_zip' => 'required'
        ]);

        // save party data
        $data = $request->all();
        Party::create($data);

        // redirect
        //return redirect()->route('add-party')->withStatus('Party created successful');
        return redirect()->route('add-party')->with('status', 'Party created successful');
    }

    // edit party
    public function edit($party_id){

        // get all parties
        $parties =  Party::find($party_id);
        return view('party.edit', compact('parties'));
    }

    // update party
    public function update($id, Request $request){

        // data validation
        $request->validate([
            'party_type' => 'required', 
            'name' => 'required', 
            'phone' => 'required', 
            'address' => 'required', 
            'account_holder' => 'required', 
            'account_number' => 'required', 
            'bank' => 'required', 
            'bank_branch' => 'required', 
            'bank_state' => 'required', 
            'bank_ifse' => 'required', 
            'bank_zip' => 'required'
        ]);

        // update party data
        $data = $request->all();
        unset($data['_token']);
        unset($data['_method']);
        Party::where('id', $id)->update($data);
        return redirect()->route('manage-party')->withStatus('Party update successfully');
    }

    // function to delete party
    public function delete(Party $party){
        $party->delete();
        return redirect()->route('manage-party')->withStatus('Party Delete successfully');
    }
}
