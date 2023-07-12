<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // show all listings
    public function index() {
        // dd(request('tag'));
        return view('listings.index',[
            'listings' => Listing::latest()->filter(request(['tag','search']))->paginate()
        ]);
    }

    // show single listing
    public function show(Listing $listing) {
        return view('listings.show',[
            'listing' => $listing
        ]);
    }

    // create new listing
    public function create(){
        return view('listings.create');
    }

    // store listing
    public function store(Request $request){
        // dd($request->file('logo'));
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            // 'email' => ['required', Rule::unique('listings', 'email')],
            // this unique method above is to ensure that this field is unique and not to accept duplicate values
            'email' => ['required','email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

        // dd(auth()->id());

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        // Session::flash('message', 'listing created succesfully');
        // above is the one way of showing flasg messages, but we can pass the message with the redirect aslo

        return redirect('/')->with('message', 'listing created succesfully');
    }

    // show edit listing form
    public function edit(Listing $listing){
        // dd($listing->company);
        return view('listings.edit', [
            'listing' => $listing
        ]);
    }

    // update edited listing
    public function update(Request $request, Listing $listing){
        // dd($request);
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            // 'email' => ['required', Rule::unique('listings', 'email')],
            // this unique method above is to ensure that this field is unique and not to accept duplicate values
            'email' => ['required','email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
        }

        $listing->update($formFields);

        // $id = $request->id;

        // Session::flash('message', 'listing created succesfully');
        // above is the one way of showing flasg messages, but we can pass the message with the redirect aslo

        return back()->with('message', 'listing updated succesfully');
    }

    // to delete a listing
    public function delete(Listing $listing){
        $listing->delete();
        return redirect('/')->with('message', 'Listing Deleted Succesfully');
    }

    public function manage(){
        return view('listings.manage',[
            'listings'=>auth()->user()->listings()->get()
        ]);
    }

}


