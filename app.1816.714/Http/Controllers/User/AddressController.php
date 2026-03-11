<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerAddress;
class AddressController extends Controller
{
     public function setDefault($id)
    {
        $userId = auth()->id();

        // Remove previous default
        CustomerAddress::where('user_id', $userId)->update(['is_default' => false]);

        // Set selected as default
        CustomerAddress::where('id', $id)
            ->where('user_id', $userId)
            ->update(['is_default' => true]);

        return back()->with('success', 'Default address updated');
    }
    
    public function store(Request $request)
    {
        CustomerAddress::create([
            'user_id' => auth()->id(),
            'type' => $request->type,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'pincode' => $request->pincode,
            'is_default' => false,
        ]);

        return back()->with('success','Address added');
    }
}
