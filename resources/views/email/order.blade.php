@extends('email.layouts.mail')

@section('content')
    @if ($data['flag'] == true)
        <p>Hello!</p>
        <p style="font-weight:bold ;font-size:20px">{{ $data['order']->name }}</p>
        <p>Greetings From {{ config('app.name') }}</p>
        <p>Your Account has been created successfully the following are your login credentials.</p>

        <p style="font-size:25px ;font-bold ;margin-bottom:20px;text-align:center;color:black">Account Details</p>
        <div class="body-table">
            <table>
                <tbody>
                    <tr>
                        <td style="border: 2px solid black;">Email</td>
                        <td style="border: 2px solid black;">{{ $data['order']->email ?? '-' }}</td>
                    </tr>

                    <tr>
                        <td style="border: 2px solid black;">Password</td>
                        <td style="border: 2px solid black;">{{ $data['password'] ?? '-' }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="login-now" style="text-align:center">
            <a href="{{ route('login') }}" target="_blank" 
                style="margin-top:2% ;display:inline-block;padding:10px 20px;text-decoration:none;text-align:center;color:#fff;background-color:#be8672;border-radius:4px;font-size:16px;">
                <span style="display:block;line-height:120%;">Login</span>
            </a>
        </div>
    @endif

    <div class="body-text">
        <p style="font-size:25px ;font-bold ;margin-bottom:20px;text-align:center;color:black">Order Details</p>
        This email is to confirm your order details. We will send you another email as soon as it is complete.
    </div>

    <div class="body-table">
        <table>
            <tbody>
                <tr class="item">
                    <th colspan="2" style="text-align: left;">Client’s Information:</th>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{ $data['order']->name ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $data['order']->email ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{ $data['order']->phone ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Country</td>
                    <td>{{ $data['order']->country ?? '-' }}</td>
                </tr>
            </tbody>
        </table>
        <table>
            <tbody class="order-form">
                <tr class="item">
                    <th colspan="2" style="text-align: left;">Order’s Information:</th>
                </tr>
                <tr>
                    <td>Order ID</td>
                    <td>{{ '#' . $data['order']->id }}</td>
                </tr>
                <tr>
                    <td>Paper Topic</td>
                    <td>{{ $data['order']->paper_topic ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Deadline</td>
                    <td>{{ $data['order']->deadlineOrder->name ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Details</td>
                    <td>{{ $data['order']->detail ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Academic Level</td>
                    <td>{{ $data['order']->careerLevel->name ?? '-' }}</td>
                </tr>
                <tr>
                    <td>Number of Pages</td>
                    <td>{{ $data['order']->number_of_pages . ' Pages' }}</td>
                </tr>
                <tr>
                    <td>Reference Style</td>
                    <td>{{ $data['order']->reference_style ?? '-' }}</td>
                </tr>

                <tr class="total">
                    <th>Total</th>
                    <th>{{ addCurrency($data['order']->total_price) ?? '-' }}</th>
                </tr>
            </tbody>
        </table>
        <br>
        <div class="pay-now" style="text-align:center">
            <a href="{{ route('invoice', ['reference' => $data['invoice']->ref_no]) }}" target="_blank"
                style="margin-top:1% ;display:inline-block;padding:10px 20px;text-decoration:none;text-align:center;color:#fff;background-color:#be8672;border-radius:4px;font-size:16px;">
                <span style="display:block;line-height:120%;">Pay Now</span>
            </a>
        </div>
    </div>

    <div class="body-text bottom-text">
        Thank You for giving us the opportunity to work with you.  
        If you have any questions in the meantime, you can contact us at <br /> 
        Whatsapp <a href="https://api.whatsapp.com/send?phone=447403663991" target="_blank">+447403663991</a>.
    </div>
@endsection
