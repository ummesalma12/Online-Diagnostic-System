<?php

namespace App\Http\Controllers;
use App\Product;
use App\invoice;
use Illuminate\Http\Request;
use App\Services;
use App\report;

class pagesController extends Controller
{

  
    public function Home(){
      return view('index');  
    }

    public function Services(){
        return view('Services');  
      }

      public function DiagnosisShop(){
       /*  return view('diagnosisShop')->with('services',service::all()); */ 
        $services = Services::paginate(20);
        return view ('diagnosisShop', compact('services'));
         
      }

      public function ReportCollection(){
        return view('reportcollection'); 
      }

      public function Contact(){
        return view('contact');  
      }

      public function Feedback(){
        return view('feedback');  
      }

      public function AboutUs(){
        return view('aboutUs');  
      }
      public function Employee(){
        return view('createAccountEmployee');  
      }

      public function TestDetails(){
        return view('shopsTestDetail');  
      }
      public function empDashboard(){
        return view('employee.dashboard.index');
      } 

      public function pay(){
       return view('pay');
      }

      public function Report(Request $request){
        $reportid=$request->input('fname');
        $reportdata=report::where('invoicenumber',$reportid)->first();

        return view('reports',compact('reportdata'));
       }



      public function confirmOrder(){
        $id=Product::orderBy('id','DESC')->first();
        $id=$id->id;
        return view('confirmorder',compact('id'));

       }

      public function cart(){
        return view('cart');
      }



      public function Invoice($id){
        $billingInformation=Product::find($id);
  /*       dd($billingInformation); */
  $billing=invoice::where('invoicenumber',$billingInformation->invoice)->get();
  // dd($billing);


        return view('invoice',compact('billingInformation','billing'));
      }


      public function addToCart(Services $services)
      {
          $cart =  session()->get('cart');
          if (!$cart){
              $cart = [$services->id => $this->sessionData($services)];
              return $this->setSessionAndReturnResponse($cart);
          }
          if (isset($cart[$services->id])){
              $cart[$services->id]['quantity']++;
              return $this->setSessionAndReturnResponse($cart);
          }
          $cart[$services->id] = $this->sessionData($services);
          return $this->setSessionAndReturnResponse($cart);
  
      }
  
      public function removeFromCart($id)
      {
          $cart = session()->get('cart');
  
          if (isset($cart[$id])){
              unset($cart[$id]);
              session()->put('cart', $cart);
          }
          return redirect()->back()->with('success', "Removed from Cart");
      }

      
    protected function sessionData(Services $services){
      return [
          'name'        => $services->name,
          'quantity'    => 1,
          'price'       => $services->price
      ];
  }

  protected function setSessionAndReturnResponse($cart){
      session()->put('cart', $cart);
      return redirect()->route('cart')->with('success', "Added to Cart");
  }

    
}

