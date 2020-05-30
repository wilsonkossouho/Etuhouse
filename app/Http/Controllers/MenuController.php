<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    //
    public function index(Request $request)
    {
        $request->session()->forget('location');

        $products = \App\Location::all();

        return view('location.index',compact('products'));
    }

    public function createStep1(Request $request)
    {
        $location = $request->session()->get('location');

        return view('location.step1',compact('location'));
    }

    public function PostcreateStep1(Request $request)
    {
        $validatedData = $request->validate([
            'prix_voulu' => 'required',
        ]);
        
        if(empty($request->session()->get('location'))){
            $location = new \App\Location();
            $location->fill($validatedData);
 
            $request->session()->put('location', $location);
        }else{
            $location = $request->session()->get('location');
            $location->fill($validatedData);
            $request->session()->put('location', $location);
        }
        return redirect('/etape2');
}

   public function createStep2(Request $request)
   {
       
    $location = $request->session()->get('location');

    return view('location.step2',compact('location'));
    }

       public function PostcreateStep2(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required',
        ]);
         
        if(empty($request->session()->get('location'))){
             $location = new \App\Location();
             $location->fill($validatedData);
        $request->session()->put('location', $location);
     }else{
        $location = $request->session()->get('location');
        $location->fill($validatedData);
       
        $request->session()->put('location', $location);
    }
    return redirect('/etape3');
    }

    public function createStep3(Request $request)
    {  
            $location = $request->session()->get('location');
            return view('location.step3',compact('location'));
    }

    public function PostcreateStep3(Request $request)
    {
        $user =  Auth::id();
       // dd($user);
        $location = $request->session()->get('location');
             
        if(!isset($location->quatier))
        {
            $validatedData = $request->validate([
                'quatier' => 'required',
            ]);
     
        
            $location->fill($validatedData);
      
             $request->session()->put('location', $location);
        }
        
        return view('location.step4',compact('location', 'user')); 
    }

    public function stor(Request $request)
    {
        $user =  Auth::id();

        $location = $request->session()->get('location');

        \App\Location::create(array_merge($location->toArray() ,['autre_1' => $user]  ));

        return redirect('/data');
    }
    public function  rechercher()
    {
        return ("");
    }
}
