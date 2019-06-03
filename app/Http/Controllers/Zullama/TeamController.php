<?php 
namespace Zullama\Http\Controllers\Zullama;

use Zullama\Models\Teams;
use Illuminate\Http\Request;
use Zullama\Http\Requests;
use Zullama\Http\Controllers\Controller;

class TeamController extends Controller
{
	public function show($id){
		$detail = Teams::find($id);
    	return view('zullamaFront.team.detail',compact('detail'));
    }

    public function team($name){

    	$team = [
    		'description' => trans('team.team.'.$name.'.description'),
            'linkedin'    => trans('team.team.'.$name.'.linkedin'),
            'nom_prenom'  => trans('team.team.'.$name.'.nom_prenom'),
            'email'       => trans('team.team.'.$name.'.email'),
            'role'        => trans('team.team.'.$name.'.role'),
            'name'		  => trans('team.team.'.$name.'.name'),
    	];

    	return view('zullamaFront.team.detail',compact('team'));
    }

    public function edit($id){

    }

    public function store($id){

    }
}