<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ShowDataController extends Controller
{
    //
    public function showhAbout_Us(Request $request): \Illuminate\Http\JsonResponse
    {
        $posts=DB::table('About_Us')->get();

        if($request->type === 'api'){

            return response()->json(['post'=>$posts]);
        }
        else {
            return view('home');
        }
    }

    public function showfClients_Who_trust_Us(Request $request): \Illuminate\Http\JsonResponse
    {
        $posts=DB::table('Clients_Who_trust_Us')->get();

        if($request->type === 'api'){

            return response()->json(['post'=>$posts]);
        }
        else {
            return view('home');
        }
    }

    public function showfollow_Us(Request $request): \Illuminate\Http\JsonResponse
    {
        $posts=DB::table('follow_Us')->get();
        
        if($request->type === 'api'){

            return response()->json(['post'=>$posts]);
        }
        else {
            return view('home')->with('showfollow_Us',$posts);
        }
    }

    public function showHeader(Request $request): \Illuminate\Http\JsonResponse
    {
        $posts=DB::table('Header')->get();
        if($request->type === 'api'){

            return response()->json(['post'=>$posts]);
        }
        else {
            return view('home')->with('Header',$posts);
        }
    }

    public function showHero_Home(Request $request)
    {
        $posts=DB::table('hero_home')->get(); 
        if($request->type === 'api'){

            return response()->json(['post'=>$posts]);
        }
        return view('/home')->with('Hero_Home',$posts);    

    }

    public function showSpecial_Service(Request $request): \Illuminate\Http\JsonResponse
    {
        $posts=DB::table('Special_Service')->get();
        if($request->type === 'api'){

            return response()->json(['post'=>$posts]);
        }
        else {
            return view('home');     
        }
    }

    public function showAbout_Us(Request $request): \Illuminate\Http\JsonResponse
    {
        $posts=DB::table('About_Us')->get();
        if($request->type === 'api'){

            return response()->json(['post'=>$posts]);
        }
        else {
            return view('home');     
        }
    }

    public function showHero_services(Request $request): \Illuminate\Http\JsonResponse
    {
        $posts=DB::table('Hero_services')->get();
        if($request->type === 'api'){

            return response()->json(['post'=>$posts]);
        }
        else {
            return view('home');
        }
    }

    public function showservices(Request $request): \Illuminate\Http\JsonResponse
    {
        $posts=DB::table('services')->get();
        if($request->type === 'api'){

            return response()->json(['post'=>$posts]);
        }
        else {
            return view('home');
        }
    }

    public function showRecent_Projects(Request $request): \Illuminate\Http\JsonResponse
    {
        $posts=DB::table('Recent_Projects')->get();
        if($request->type === 'api'){

            return response()->json(['post'=>$posts]);
        }
        else {
            return view('home');
        }
    }

    public function showUseful_Links(Request $request): \Illuminate\Http\JsonResponse
    {
        $posts=DB::table('Useful_Links')->get();
        if($request->type === 'api'){

            return response()->json(['post'=>$posts]);
        }
        else {
            return view('home');
        }
    }

    public function showWho_Are_we(Request $request): \Illuminate\Http\JsonResponse
    {
        $posts=DB::table('Who_Are_we')->get();
        if($request->type === 'api'){

            return response()->json(['post'=>$posts]);
        }
        else {
            return view('home');
            // return view('home')->with('Who_Are_we',$Who_Are_we);
        }
    }

}
