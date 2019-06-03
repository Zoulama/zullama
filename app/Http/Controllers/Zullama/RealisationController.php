<?php 
namespace Zullama\Http\Controllers\Zullama;

use Illuminate\Http\Request;
use Zullama\Http\Requests;
use Zullama\Models\Realisations;
use Zullama\Http\Controllers\Controller;

class RealisationsController extends Controller
{
	public function show($id){
		$detail = Realisations::find($id);
    	return view('zullamaFront.portfolio.detail',compact('detail'));
    }

    public function edit($id){

    }

    public function store($id){
    	
    }
}