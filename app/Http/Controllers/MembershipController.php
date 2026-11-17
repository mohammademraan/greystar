<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateMembershipRequest;
use App\Models\Membership;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memberships = Membership::all();

        return view('admin.memberships', compact('memberships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-membership');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'membership' => 'required|string|max:255',
            'order_limit' => 'required|integer|min:1',
            'commission' => 'required|numeric|min:0|max:100',
        ]);

        Membership::create([
            'level_name' => $validated['membership'],
            'order_limit' => $validated['order_limit'],
            'commission' => $validated['commission'],
        ]);

        return redirect('memberships')->with('success', 'Membership created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Membership $membership)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $membership = Membership::findOrFail($id);

        return view('admin.edit-membership', compact('membership'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'membership' => 'required|string|max:255',
            'order_limit' => 'required|integer|min:1',
            'commission' => 'required|numeric|min:0|max:100',
        ]);

        $membership = Membership::findOrFail($id);
        $membership->level_name = $validated['membership'];
        $membership->order_limit = $validated['order_limit'];
        $membership->commission = $validated['commission'];
        $membership->save();

        return redirect('memberships')->with('success', 'Membership updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $membership = Membership::findOrFail($id);
        $membership->delete();

        return redirect('memberships')->with('success', 'Membership deleted successfully.');
    }
}
