<?php
namespace Ktran\Priapi\Controllers;

use App\Http\Controllers\Controller;
use Ktran\Priapi\Models\Request;

class PriapiController extends Controller
{
    function index(\Illuminate\Http\Request $request){
        $_secretKey = config("priapi.secret_key");
        $_clientKey = config("priapi.client_key");
        $_token = ($_clientKey == $request->clientKey) ? genToken(['role'=>"editor"], $_secretKey): "";
        return view("priapi::index", compact('_secretKey', '_token', 'request'));
    }

    function getRequest(\Illuminate\Http\Request $rq){
        if($rq->has('id')){
            $requests = Request::find($rq->id);
        }else{
            $requests = Request::orderBy('parent', 'asc')->orderBy('sort', 'asc')->get();
        }

        return response()->json($requests);
    }

    function addRequest(\Illuminate\Http\Request $rq){
        $data = $rq->all();
        $data['request_header'] = json_encode([]);
        $data['request_params'] = json_encode([]);
        $data['request_body'] = json_encode([]);
        Request::create($data);
        return response()->json(true);
    }

    function updateRequest(\Illuminate\Http\Request $rq){
        $data = $rq->only(["name", "description",  "request_type", "uri"]);
        if(empty($rq->name))
            return response()->json(false, 422);
        if($rq->has('request_header')){
            $data['request_header'] = str_replace(":null", ":\"\"", json_encode($rq->request_header));
        }
        if($rq->has('request_params')){
            $data['request_params'] = str_replace(":null", ":\"\"", json_encode($rq->request_params));
        }
        if($rq->has('request_body')){
            $data['request_body'] = str_replace(":null", ":\"\"", str_replace(":[]", ":\"\"", json_encode($rq->request_body)));
        }
        Request::where('id', $rq->id)->update($data);
        return response()->json(true);
    }

    function deleteRequest(\Illuminate\Http\Request $rq){
        Request::where('id', $rq->id)->delete();
        return response()->json(true);
    }

    function test(\Illuminate\Http\Request $request){
        return response()->json($request->all());
    }
}
