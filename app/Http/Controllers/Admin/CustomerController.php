<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
class CustomerController extends Controller
{
   public function index()
    {
        $customers = User::withCount('orders')
            ->withSum('orders','total_amount')
            ->where('is_admin', 0)
            ->latest()
            ->paginate(10);

        return view('admin.customers.index', compact('customers'));
    }

    public function show($id)
    {
        $customer = User::with('orders')->findOrFail($id);
        return view('admin.customers.show', compact('customer'));
    }

    public function toggleBlock($id)
    {
        $customer = User::findOrFail($id);
        $customer->is_blocked = !$customer->is_blocked;
        $customer->save();

        return back()->with('success', 'Customer status updated');
    }
}
