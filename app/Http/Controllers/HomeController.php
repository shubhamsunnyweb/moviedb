<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

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
    public function index()
    {	//echo '<pre>'; print_r(Auth::id()); '<pre>'; die;
		$userid = Auth::id();
		$url = "https://api.themoviedb.org/3/list/1?api_key=3892a16035e717e0765115b81baff1ca";
		$opts = [
		    "http" => [
		        "method" => "GET"
		    ]
		];
		$context = stream_context_create($opts);
		$moviedata = json_decode(file_get_contents($url, false, $context), true);
		//dd($data);
        return view('home', compact('moviedata', 'userid'));
    }
	
	public function add_favorite(Request $request){
		unset($_POST['_token']);
		//echo '<pre>'; print_r($_POST); '<pre>'; die;
		$alreadyexist = $this->already_exist($_POST['movie_id'], $_POST['user_id']);
		if($alreadyexist){
			return redirect()->back()->with('message', 'Already Added');
		}
		DB::table('movie_favorite')->insert($_POST);
		return redirect()->back()->with('message', 'Favorite Added');
	}
	
	private function already_exist($movieid,$userid){
		$countdata = DB::table('movie_favorite')->where('movie_id', $movieid)->where('user_id',$userid)->count();
		if($countdata == 0){
			return false;
		}
		return true;
	}
	
	public function favorite_list($userid){
		$favoritelist = DB::table('movie_favorite')->where('user_id', $userid)->get();
		//echo '<pre>'; print_r(); '<pre>'; die;
		$favoritelist = json_decode(json_encode($favoritelist));
		return view('list', compact('favoritelist'));
	}
	
	public function view_favorite($fav_id){
		$favoritedata = DB::table('movie_favorite')->where('id', $fav_id)->first();
		//echo '<pre>'; print_r($favoritedata); '<pre>'; die;
		return view('view', compact('favoritedata'));
	}
	public function test(){
		$testdata = DB::table('movie_favorite')->get();
		echo '<pre>'; print_r($testdata); '<pre>'; die;
	}
}
