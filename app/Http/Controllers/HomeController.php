<?php

namespace App\Http\Controllers;

use App\Models\LogActivity;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        /**

     * Create a new controller instance.

     *

     * @return void

     */

     public function __construct()

     {


     }

     /**

      * Show the application dashboard.

      *

      * @return \Illuminate\Http\Response

      */

     public function myTestAddToLog()

     {

         \LogActivity::addToLog('My Testing Add To Log.');

         dd('log insert successfully.');

     }


     /**

      * Show the application dashboard.

      *

      * @return \Illuminate\Http\Response

      */

     public function logActivity()

     {

         $logs = \LogActivity::logActivityLists();

         return view('logActivity',compact('logs'));

     }

     public function delete($id)
     {
        LogActivity::where('id', $id)->delete();
         return back();

     }
}
