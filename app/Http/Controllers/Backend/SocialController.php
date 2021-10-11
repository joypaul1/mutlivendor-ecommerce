<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sociallink;
// use App\Http\Requests\Social\SocialRequest;

class SocialController extends Controller
{
    
	public function index($value='')
	{
		return view('backend.social.index');
	}

    // public function createupdate(SocialRequest $socialRequest, $id = null )
    public function createupdate(Request $request, $id = null )
    {
      if($id)
          	{
               $social = Sociallink::first();
              if($social)
              	{
              		
                 $social->update($request->all());
                 return redirect()->back()
                        ->with('message','social link updated successfully');
             	}
          	}
            // write create code
            else
          	{
                Sociallink::create($request->all());
                return redirect()->back()
                    ->with('message','social link created successfully');
          	}
    
    	}
}
