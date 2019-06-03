<?php 
namespace Zullama\Http\Controllers\Zullama;

use Zullama\Models\Activites;
use Illuminate\Http\Request;
use Zullama\Http\Requests;
use Zullama\Http\Controllers\Controller;

class ServicesController extends Controller
{
	public function show($id){
    	return view('zullamaFront.service.detail');
    }

    public function edit($id){

    }

    public function store($id){
    	
    }
}