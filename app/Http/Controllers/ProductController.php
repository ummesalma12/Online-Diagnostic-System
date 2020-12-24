<?php

namespace App\Http\Controllers;
use Session;
use App\Product;
use App\invoice;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->paginate(20);
        return view ('employee.billingdetails.index', compact('product'));
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
        $invoice=Product::all();
        $invoice=count($invoice);
        $invoice_number="TARA_".$invoice;
        $name=$request->session()->get('cart');
       
        foreach($name as $id =>$value){
            $cart=new invoice();
            $cart->invoicenumber=$invoice_number;
            $cart->service=$value['name'];
            $cart->price=$value['price'];
            $cart->quantity =$value['quantity'];
            $cart->subtotal =$value['quantity']*$value['price'];
            $cart->total =$value['quantity']*$value['price'];
            $cart->save();
        }
               
        $product = Product::create([
            'name' => $request->name,
            'email' => $request->email,
            'address'=>$request->address,
            'city'=>$request->city,
            'state'=>$request->state,
            'zip'=>$request->zip,
            'phoneNumber'=>$request->number,
            'invoice'=>$invoice_number,
        ]);


        return redirect('/confirmorder'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $products,$id)
    {
        $product=product::find($id);
        
        if($product){
            $product->delete(); 
            Session::flash('success', 'Billing Info deleted successfully');
            return redirect()->route('product.index');
        }
    }
}
