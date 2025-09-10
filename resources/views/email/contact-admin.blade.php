@extends('email.layouts.mail')

@section('content')
    <div class="body-text">
        <div class="body-greeting" style="font-weight:bold ;font-size:20px; text-align:center; margin-bottom: 10px; margin-top: 10px;">Contact Details</div>
    </div>
    <div class="body-table">
        <table>
            <tbody>
                <tr class="item">
                    <th colspan="2" style="text-align:left;padding:10px;border-bottom:1px solid rgba(0,0,0,0.2)">Client’s Information:</th>
                </tr>
                <tr>
                    <td style="padding:7px">Name</td>
                    <td style="padding:7px">{{ $contact->name ?? '-' }}</td>
                </tr>
                <tr>
                    <td style="padding:7px">Subject</td>
                    <td style="padding:7px">{{ $contact->subject ?? '-' }}</td>
                </tr>
                <tr>
                    <td style="padding:7px">Email</td>
                    <td style="padding:7px">{{ $contact->email ?? '-' }}</td>
                </tr>
                <tr>
                    <td style="padding:7px">Phone</td>
                    <td style="padding:7px">{{ $contact->phone ?? '-' }}</td>
                </tr>
                <tr class="">
                    <td style="padding:7px">Details</td>
                    <td style="padding:7px">{{ $contact->details ?? '-' }}</td>
                </tr>
                <tr class="">
                    <td style="padding:7px">Country</td>
                    <td style="padding:7px">{{ $contact->country ?? '-' }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
