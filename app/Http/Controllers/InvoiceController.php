<?php

namespace App\Http\Controllers;
use Session;
use App\invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $invoice = invoice::orderBy('created_at', 'DESC')->paginate(20);
        return view ('employee.invoice.index', compact('invoice'));
  
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*         $name=$request->session->get('cart');
        dd($name);

        if(session('cart'))
        foreach(session('cart') as $id => $services)
            
                $sub_total = $services['price'] * $services['quantity'];
                $total += $sub_total;
           
            
                $services['name']
                $services['price']
                $services['quantity']
                $sub_total
               
                             
        endforeach
    endif */
        $invoice = invoice::create([
            'service' => $request->name,
            'price' => $request->price,
            'quantity'=>$request->quantity,
            'subtotal'=>($request->quantity*$request->price),
            'total'=>($request->quantity*$request->price),


        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(invoice $invoices,$id)
    {
        $invoice=invoice::find($id);
        
        if($invoice){
            $invoice->delete(); 
            Session::flash('success', 'Invoice Info deleted successfully');
            return redirect()->route('invoice.index');
        }
    }
}
