<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
            $user =  Auth::id() ;
            $location = $request->session()->get('location');

            dd($location);
      
            // dd($input) ;
    
        if( $location !=null )
        {  
        
            \App\Location::create(array_merge($location->toArray() ,['autre_1' => $user]  ));
    
         
     
           //$location->add(['autre_1' => $user]); 
         //  dd($location)  ;
        
       
      //  $location->save();

        return redirect('/data');

        }
        else{
            return view('home');
        }
        return view('home');
    }
}
