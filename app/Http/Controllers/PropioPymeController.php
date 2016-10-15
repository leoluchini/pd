<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Entity;

class PropioPymeController extends Controller
{
		/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $entityId, $objectId = null, $programId = null)
    {
        if($request->ajax()){
	        do{	
	        	$entity = Entity::findOrFail($entityId);
	        	$response = false;
	        	if($programId ){
	        		$item = $entity->itemExpeditures()->where('id', $objectId)->first();
        			$organization = $item->organizations()->where('id', $programId)->first();
        			return response()->json([
				    	'html' => view('propio_pyme.panel-organization-show')
				    		->withOrganization($organization)
				    		->render()
				    ]);
	        		break;
	        	}
	        	if($objectId){
	        		$item = $entity->itemExpeditures()->where('id', $objectId)->first();
	        		return response()->json([
				    	'html' => view('propio_pyme.panel-organization')->with(['entity' => $entity,'item' => $item])->render()
				    ]);
				    break;
	        	}
	        	return response()->json([
				    'html' => view('propio_pyme.panel-item')->withEntity($entity)->render()
				]); 
			} while (0);
        }
    }
}
