<?php 
namespace Zullama\Http\Controllers\Zullama;

use Zullama\Models\Teams;
use Illuminate\Http\Request;
use Zullama\Http\Requests;
use Zullama\Models\Activites;
use Zullama\Models\Realisations;
use Zullama\Http\Controllers\Controller;

class ZullamaInitController extends Controller
{
    public function index(){
    	return view('zullamaFront.index');
    }

    public function realisation(){
        $portfolios = Realisations::all();

        foreach ($portfolios as $value) {
            $realisations [] = [
                'name'          => $value->name,
                'url'           => $value->url,
                'secteur'       => $value->secteur,
                'description'   => $value->description,
                'technologies'  => $value->technologies,
                'id'            => $value->id,
            ];
        }

        $realisations = isset($realisations) ? $realisations : [];

    	return view('zullamaFront.realisation.index',compact('realisations'));
    }

    public function service(){
        $services = Activites::where('types','=','services')->get();
        $services = isset($services[0]) ? $services[0] : $services;
        foreach ($services as $value) {
           $z_services [] = [
                'name'          => $value->name,
                'description'   => $value->description,
                'id'            => $value->id,
           ];
        }

        $services = isset($z_services) ? $z_services : [];
    	return view('zullamaFront.services.index',compact('services'));
    }

    public function secteur(){
        $secteurs = Activites::where('types','=','secteurs')->get();
        return view('zullamaFront.secteurs.index');
    }

    public function technologie(){
    	return view('zullamaFront.portfolio.index');
    }

    public function about(){
        $teams = Teams::all();

        foreach ($teams as $value) {
            $z_teams [] = [
                'first_name'    => $value->first_name,
                'last_name'     => $value->last_name,
                'role'          => $value->role,
                'linkedin'      => $value->linkedin,
                'parcours'      => $value->parcours,
                'id'            => $value->id,
            ];
        }

        $teams = isset($z_teams) ? $z_teams : [];
    	return view('zullamaFront.about',compact('teams'));
    }

    public function team(){
        $teams = Teams::all();

        foreach ($teams as $value) {
            $z_teams [] = [
                'first_name'    => $value->first_name,
                'last_name'     => $value->last_name,
                'role'          => $value->role,
                'linkedin'      => $value->linkedin,
                'parcours'      => $value->parcours,
                'id'            => $value->id,
            ];
        }
        return view('zullamaFront.team.index',compact('teams'));
    }

    public function getsubMenuById($id){

    }

}
