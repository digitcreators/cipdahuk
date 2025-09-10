@extends('email.layouts.base')

@section('content')

    <div class="body-text">
        <div class="body-greeting">Order Details</div>
    </div>

    <div class="body-table">
        <table>
            <tbody>
                <tr class="item">
                    <th colspan="2" style="text-align: left;">Client’s Information:</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{ $order->name ?? '-' }}</td>
                </tr>                
                <tr>
                    <td>Email</td>
                    <td>{{ $order->email ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{ $order->phone ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>{{ $order->country ?? '-' }}</td>
                </tr>
            </tbody>
        </table>

        <table>
            <tbody class="order-form">
                <tr class="item">
                    <th colspan="2" style="text-align: left;">Order’s Information:</th>
                </tr>
                <tr>
                    <td>Paper Topic</td>
                    <td>{{ $order->paper_topic ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Deadline</td>
                    <td>{{ $order->deadlineOrder->name ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Details</td>
                    <td>{{ $order->detail ?? '-' }}</td>
                </tr>

                <tr>
                    <td>Academic Level</td>
                    <td>{{ $order->careerLevel->name ?? '-' }}</td>
                </tr>

                </tr>
                <tr>
                    <td>Number of Pages</td>
                    <td>{{ $order->number_of_pages . ' Pages' }}</td>
                </tr>
                <tr>
                    <td>Reference Style</td>
                    <td>{{ $order->reference_style ?? '-' }}</td>
                </tr>
                <tr class="total">
                    <th>Total</th>
                    <th>{{ isset($order->total_price) ? addCurrency($order->total_price) : '-' }}</th>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
