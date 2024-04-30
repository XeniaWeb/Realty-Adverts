<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreListingRequest;
use App\Http\Requests\UpdateListingRequest;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        $listings = Listing::get()->sortByDesc('id');

        return inertia('Listings/Index', ['listings' => $listings])->with('success', 'That\'s all!');
    }

    public function create()
    {
        return inertia('Listings/Create');
    }

    public function store(StoreListingRequest $request)
    {
        $request->validated();
        $listing = Listing::create($request->validated());
        return redirect()->route('listings.index')->with('success', 'Advert created successfully!');
    }

    public function show(Listing $listing)
    {
        // dd($listing);
        return inertia('Listings/Show', ['listing' => $listing]);
    }

    public function edit(Listing $listing)
    {
        return inertia('Listings/Edit', ['listing' => $listing]);
    }

    public function update(UpdateListingRequest $request, Listing $listing)
    {
        $listing->update($request->validated());

        return redirect()->route('listings.index')->with('success', 'Listing updated successfully!');
    }

    public function destroy(Listing $listing)
    {
        $listing->delete();
    }
}
