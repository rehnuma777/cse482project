<?php

namespace App\Http\Controllers\Admin;
use App\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services;
use Carbon\Carbon;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('admin.item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services = Services::all();
        return view('admin.item.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'services'=> 'required',
            'name'=> 'required',
        'description'=> 'required',
        'appointment'=> 'required',
        'image'=>'required|mimes:jpeg,jpg,bmp,png'
    ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/Doctors'))
            {
                mkdir('uploads/Doctors',0777,true);
            }
            $image->move('uploads/Doctors',$imagename);
        }
        else{
            $imagename = "default.png";
        }
        $item = new Item();
        $item->service_id = $request->services;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->appointment = $request->appointment;
        $item->image = $imagename;
        $item->save();  
        return redirect()->route('item.index')->with('successMsg','Doctor Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::find($id);
        $services = Services::all();
        return view('admin.item.edit',compact('item','services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
        'description'=> 'required',
        'appointment'=> 'required',
        'image'=>'required|mimes:jpeg,jpg,bmp,png'
    ]);
        $item = Item::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if(isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if(!file_exists('uploads/Doctors'))
            {
                mkdir('uploads/Doctors',0777,true);
            }
            unlink('uploads/Doctors/'.$item->image);
            $image->move('uploads/Doctors',$imagename);
        }
        else{
            $imagename = $item->image;
        }
        
        
        $item->description = $request->description;
        $item->appointment = $request->appointment;
        $item->image = $imagename;
        $item->save();  
        return redirect()->route('item.index')->with('successMsg','Doctor Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        if(file_exists('uploads/Doctors/'.$item->image)){
            unlink('uploads/Doctors/'.$item->image);
        }
        $item->delete();
        return redirect()->back()->with('successMsg','Doctor Successfully Deleted');
    }
}
