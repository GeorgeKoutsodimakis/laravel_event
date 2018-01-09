<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Category;

class EventController extends Controller
{
    //
    public function index(Event $event,Request $request){
        $event = Event::with(array('category'))->get();

         $event = $request->all();
        return view('events.index',compact('event'));
    }

    public function create(Category $category){
        $category = Category::all()
        ->pluck('title','id');

        $eventCategory = [];
        $category = Category::with(array('title'))->get();

        return view('events.create', [
            'category' => $category,
            'eventCategory'=>$eventCategory
        ]);
    }

    public function store(Event $event,Request $request)
    {
        //

        $this->validate($request,[
            'name'=>'required |min:2|max:10',
            'category'=>'required',
            'price'=>'required',
            'country'=>'required',
            'city'=>'required',
            'date_from'=>'required',
            'date_to'=>'required'
        ]);

        $event = Event::create([
            'user_id'=>auth()->id(),
            'name'=>request('name'),
            'category'=>request('category'),
            'price'=>request('price'),
            'country'=>request('country'),
            'city'=>request('city'),
            'date_from'=>request('date_from'),
            'date_to'=>request('date_to')
            ]);

        return redirect()->route('home');

    }

    public function show($id)
    {
        //
        $event=Event::find($id);
        return view('events.show',compact('event'));
    }

    public function edit(Event $event)
    {

        $category = Category::all()
            ->pluck('title', 'id');

        $eventCategory = $event->category;

        return view('events.edit', [
            'event' => $event,
            'category' => $category,
            'eventCategory' => $eventCategory,
        ]);
    }

    public function update(Event $event,Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:2|max:10',
            'category'=>'required',
            'price'=>'required',
            'country'=>'required',
            'city'=>'required',
            'date_from'=>'required',
            'date_to'=>'required'
        ]);

        // $telephone->phone = $request->get('phone');
        // $telephone->save();

        $event->update($request->all());

        return redirect()->route('home');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('home');
        
    }
}
