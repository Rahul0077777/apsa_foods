<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partnership;

class PartnershipController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'business_name'        => 'required|string|max:255',
            'contact_person'       => 'required|string|max:255',
            'mobile'               => 'required|string|max:20',
            'email'                => 'required|email',
            'city_state'           => 'required|string|max:255',

            'partnership_type'     => 'required|array',

            'years_in_business'    => 'nullable|string|max:50',
            'categories_handled'   => 'nullable|string|max:255',
            'area_of_operation'    => 'nullable|string|max:255',

            'storage_facility'     => 'nullable|string',
            'delivery_setup'       => 'nullable|string',
            'sales_team_strength'  => 'nullable|string',

            'expected_volume'      => 'nullable|string',
            'preferred_products'   => 'nullable|array',
            'message'              => 'nullable|string',
        ]);

        Partnership::create($data);

        return back()->with('success', 'Thank you! Your partnership request has been submitted.');
    }
}
