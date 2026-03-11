<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Invoice {{ $order->order_number }}</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; font-size: 12px; color:#333; }
        .header { border-bottom:2px solid #33e633; padding-bottom:10px; margin-bottom:20px; }
        .logo { font-size:22px; font-weight:bold; color:#33e633; }
        .invoice-title { text-align:right; }
        table { width:100%; border-collapse: collapse; margin-top:15px; }
        th, td { border:1px solid #ddd; padding:8px; }
        th { background:#f3f3f3; text-align:left; }
        .total { text-align:right; font-weight:bold; }
        .footer { margin-top:30px; font-size:11px; text-align:center; color:#777; }
    </style>
</head>
<body>

<div class="header">
    <div style="float:left">
       <div class="logo">al’sa</div>
        <div style="font-size:12px;">Vibe of Youth</div>
        <div>Admin Order Invoice</div>
    </div>
    <div class="invoice-title">
        <strong>Invoice #{{ $order->order_number }}</strong><br>
        Date: {{ $order->created_at->format('d M Y') }}
    </div>
    <div style="clear:both"></div>
</div>

<h3>Customer Details</h3>
<p>
    <strong>Name:</strong> {{ $order->customer_name }}<br>
    <strong>Phone:</strong> {{ $order->phone }}<br>
    <strong>Address:</strong> {{ $order->address }}
</p>

<h3>Order Items</h3>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Product</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Subtotal</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order->items as $index => $item)
        <tr>
            <td>{{ $index+1 }}</td>
            <td>{{ $item->product->name }}</td>
            <td>₹{{ $item->price }}</td>
            <td>{{ $item->quantity }}</td>
            <td>₹{{ $item->subtotal }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<table style="margin-top:10px">
    <tr>
        <td class="total">Total Amount:</td>
        <td class="total">₹{{ $order->total_amount }}</td>
    </tr>
    <tr>
        <td class="total">Payment Mode:</td>
        <td class="total">{{ $order->payment_mode }}</td>
    </tr>
    <tr>
        <td class="total">Payment Status:</td>
        <td class="total">{{ $order->payment_status }}</td>
    </tr>
    <tr>
        <td class="total">Order Status:</td>
        <td class="total">{{ ucfirst($order->status) }}</td>
    </tr>
</table>

<div class="footer">
    Thank you for shopping with <strong>Fresh Juice</strong>.<br>
    This is a system generated invoice.
</div>

</body>
</html>
