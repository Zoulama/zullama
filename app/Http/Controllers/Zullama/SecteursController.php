<?php 
namespace Zullama\Http\Controllers\Zullama;

use Zullama\Models\Activites;
use Illuminate\Http\Request;
use Zullama\Http\Requests;
use Zullama\Http\Controllers\Controller;

class SecteursController extends Controller
{
	public function show($id){
		$secteur = Services::find($id);
    	return view('zullamaFront.secteurs.detail',compact('secteur'));
    }

    public function edit($id){
    	$secteur = Services::find($id);
    	return view('zullamaFront.secteurs.edit',compact('secteur'));
    }

    public function store($id){
    	$secteur = Services::find($id);
    	return view('zullamaFront.secteurs.detail',compact('secteur'));
    }
}