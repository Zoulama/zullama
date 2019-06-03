<?php 
namespace Zullama\Http\Controllers\Zullama;

use Illuminate\Http\Request;
use Zullama\Http\Requests;
use Zullama\Models\PortFolio;
use Zullama\Http\Controllers\Controller;

class PortFolioController extends Controller
{
	public function show($id){
    	return view('zullamaFront.portfolio.detail');
    }

    public function edit($id){

    }

    public function store($id){
    	
    }
}