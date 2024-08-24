<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class WorkerController extends Controller
{
    public function index()
    {
        // $md = auth()->user()->getMedia();

        // return $md[0]->getUrl('thumb');
        return view('worker');
    }
    
    protected function create(Request $request)
    {
        // $yourModel = auth()->user();
        //  $yourModel
        // ->addMedia($request->image)
        // ->toMediaCollection();
        $request->validate([
            'work_type' => 'required',
            'work_hour' => 'required|numeric',
            'work_price' => 'required',
            'rating' => 'required'
        ]);

        $worker = auth()->user()->worker()->create([
            'work_type' => $request->work_type,
            'work_hour' => $request->work_hour,
            'work_price' => $request->work_price,
            'rating' => $request->rating,
            // 'user_id'=>Auth::user()->id
        ]);

        $worker
            ->addMedia($request->image)
            ->toMediaCollection();
    }
}
