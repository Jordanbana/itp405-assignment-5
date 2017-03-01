<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

use App\Tweet;



class TweetController extends Controller
{
    public function index(){
      $tweets = Tweet::orderBy('id', 'DESC')->get();
      return view('home', [
          'tweets' => $tweets
      ]);

   }

     public function store(Request $request){
           $validator = Validator::make($request->all(), [
               'tweet' => 'required|max:140',
           ]);

           if ($validator->passes()) {
              $tweet = new Tweet();
              $tweet->tweet = request('tweet');
              $tweet->save();

               return redirect('/')
                   ->with('successStatus', 'Tweet created successfully!');
           } else {
               return redirect('/')->withErrors($validator);
           }
       }


    public function view($tweetsID){

        $tweets = Tweet::find($tweetsID);
          return view("/tweet", [
              'tweets' => $tweets
          ]);

    }


    public function destroy($tweetsID){

        $tweets = Tweet::find($tweetsID);
        $tweets->delete();

        return redirect("/")
               ->with('successStatus', 'Tweet was deleted successfully!');

    }


    public function edit($tweetsID){

            $tweets = Tweet::find($tweetsID);


            return view("edit",[
                    'tweets' => $tweets
                ]);
                  // ->with('successStatus', 'Tweet was edited successfully!');

      }

    public function update(Request $request, $tweetsID){

      $validator = Validator::make($request->all(), [
          'tweet' => 'required|max:140',
      ]);

      if ($validator->passes()) {


         $tweet = Tweet::find($tweetsID);
         $tweet->tweet = request('tweet');
         $tweet->save();



          return redirect("/tweets/$tweetsID")
              ->with('successStatus', 'Tweet was successfully updated!');
      } else {
          return redirect("/tweets/$tweetsID/edit")->withErrors($validator);
      }

    }


}
