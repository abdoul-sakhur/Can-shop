<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('admin.slider',['sliders'=>Slider::orderBy('created_at','desc')->paginate(4)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $slider= new Slider();
        return view('admin.sliderForm',['slider'=>$slider]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        $slider=Slider::create($request->validated());
        if($image=$request->validated('image')){
            $imagePath=$image->store('UploadedImage','public');
             $slider->image=$imagePath;
             $slider->save();
        }
        return to_route('admin.slider.index')->with('success','Le slider a ete ajoute avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        return view('admin.sliderForm',['slider'=>$slider]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SliderRequest $request, Slider $slider)
    {
        $slider->update($request->validated());
        if($slider->image){
            Storage::disk('public')->delete($slider->image);
        }
        if($image=$request->validated('image')){
            $imagePath=$image->store('UploadedImage','public');
             $slider->image=$imagePath;
             $slider->save();
        }
      return to_route('admin.slider.index')->with('success','le slider a ete modifie');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return to_route('admin.slider.index')->with('success','le slider a ete supprime');
    }
}
