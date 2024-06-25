<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Billing;
use App\Models\Party;


class BillingController extends Controller
{
    public function create(){

        $data['parties'] = Party::where('party_type', 'client')->orderBy('name')->get(); 
        return view('billing.create', $data);
    }
    public function manage(){
        $bills = Billing::where('is_deleted', 0)->with('party')->get()->all();
        return view('billing.manage', compact('bills'));
    }
    public function print($id){
        $data['bill'] = Billing::where('id', $id)->with('party')->first();
        return view('billing.print', $data);
    }

    public function createGstBill(Request $request){
        // validate request
        $request->validate([
            'party_id' => 'required|exists:parties,id', 
            'invoice_date' => 'required|date', 
            'invoice_no' => 'required|string|max:255', 
            'item_description' => 'required|string|max:255', 
            'total_amount' => 'required|numeric', 
            'cgst_rate' => 'required|numeric', 
            'sgst_rate' => 'required|numeric', 
            'igst_rate' => 'required|numeric', 
            'tax_amount' => 'required|numeric', 
            'net_amount' => 'required|numeric', 
            'declaration' => 'required|string|max:255'
        ]);

        // save the data
        Billing::create($request->all());

        return redirect()
            ->route('manage-bill')
            ->withStatus('Bill created successfully.');
    }

}
