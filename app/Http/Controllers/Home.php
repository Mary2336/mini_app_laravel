<?php

namespace App\Http\Controllers;

use App\Models\Home as HomeModel;
use Illuminate\Http\Request;



class Home extends Controller
{
    public function index()
    {
        $data = HomeModel::select('*')->paginate(3);
        return view("test.index", ['data' => $data]);
    }

    public function create()
    {
        return view('test.create');
    }

    public function edit($id)
    {
        $info = HomeModel::find($id);
        return view('test.edit', compact('info'));
    }

    public function store(Request $request)
    {
        $datainsert['name'] = $request->namep;
        $datainsert['age'] = $request->agep;
        $datainsert['sexe'] = $request->sexep;
        $datainsert['created_at'] = date('Y-m-d H:i:s');
        HomeModel::create($datainsert);
        return redirect()->route('index');
       
    }

    public function update($id, Request $request)
    {

        $dataupdate['name'] = $request->namep;
        $dataupdate['age'] = $request->agep;
        $dataupdate['sexe'] = $request->sexep;
        $dataupdate['updated_at'] = date('Y-m-d H:i:s');
        HomeModel::where(['id' => $id])->update($dataupdate);
        return redirect()->route('index');
    }

    public function destroy($id)
    {
        HomeModel::find($id)->delete();
        return redirect()->route('index');
    }
}
