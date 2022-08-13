<?php

namespace App\Http\Controllers;
use App\Models\Myblog;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function Addblogs()
    {
        return view('addblog');
    }
   
    function save(Request $request)
    {
        //print_r($request->input());
        
        $user = new Myblog;
      
        $user->title = $request->title;
        $user->description = $request->description;
        if($files=$request->file('myfile')){  
            $name=$files->getClientOriginalName();  
            $files->move('images',$name);  
            $user->bannerimage=$name;  
            }  
        $user->body = $request->body;
        echo $user->save();

    }

    public function viewdata()
    {
        $users = Myblog::all();  
 
        return view('bloglist', compact('users'));      
   }


   public function edit(Myblog $user,$id)
    {
        $users=Myblog::find($id);
        return view('edit',['users'=>$users]);
    }

    public function update(Request $request, Myblog  $user,$id)
    {
         $users=Myblog::find($id);
         $users->title = $request->get('title');
         $users->description = $request->get('description');
         if($files=$request->file('myfile')){  
            $name=$files->getClientOriginalName();  
            $files->move('images',$name);  
            $users->bannerimage= $request->get('$name');  
            }  
         $users->body = $request->get('body');
        
          $users->save();

          return redirect('bloglist');
    }

    public function destroy(Myblog $user,$id)
    {
        $user=Myblog::find($id);
        $user->delete();
        return redirect('bloglist');

    }

    public function bloguser()
    {
        $users = Myblog::all();  
 
        return view('userblog', compact('users'));      

    }
}
