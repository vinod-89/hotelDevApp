<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;
use App\Hotels;
use App\Comments;

class AdminController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function viewHotel()
   {
        return view("welcome");
   }

    public function createHotel(){
      $hotels = new Hotels();
      $hotels->name = Input::get('hotel');
      $hotels->save();

      $comments=new Comments();
      $comments->comment= Input::get('comment');
      $comments->save();
      return redirect()->back();

    }
    public function getHotelList(){
      $hotellist = DB::table('hotels')->get();

      return view("home",compact('hotellist'));
    }
}
