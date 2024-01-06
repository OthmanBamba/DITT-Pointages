<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class SousDirectionController extends Controller
{
    public function liste(){
        if(request()->has('search')){

        
        $sous_directions = DB::table('sous_directions')
        ->where('name','LIKE',"%".$request->get('search')."%")
        ->paginate(5);
        }
        else{
            $sous_directions = DB::table('sous_directions')
            ->paginate(5);
            
        }
        
    
        
        return view('sous-directions.list', ['datas' => $sous_directions]);
    }

    public function form(){
        return View('sous-directions.formulaire');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>'required', 
        ]);
        
        $date=DB::table('sous_directions')
        ->insert(['name' => $request->get('name')]);
        
        
        
        if ($date ){
            return back( )->with(['message' =>'Enregistrement reussie',
            'type' => 'Alert-info']);
        }
        else{
            return back()->with(['message' =>'echec',
            'type' => 'alert-danger']);
        }

        
       
    }
            public function edit($id)
            {
                $sousDirection = SousDirection::find($id); //Eloquent
                return view('sous-directions.edit', compact('sousDirection'));
            }
        

   
       
    

   

}
