@extends('email.layouts.mail')

@section('content')
    <div class="body-text">
        <div class="body-greeting" style="font-weight:bold ;font-size:20px; margin-bottom: 10px; margin-top: 10px; color:#3d151e; text-align:center;">Hi, {{ $contact->name }}</div>
        <span style="color:black; text-align:center;">
            Thank you for reaching out! We have successfully received your query. Please make sure the following details are
            correct.
        </span>
    </div>

    <div class="body-table" style="margin-bottom: 10px; margin-top: 10px;">
        <table style="width:100%">
            <tbody>
                <tr class="item">
                    <th colspan="2" style="text-align:left;padding:10px;border-bottom:1px solid rgba(0,0,0,0.2); ">Client’s Information:</th>
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

    <div class="body-text bottom-text" style="text-align:center; padding:10px; color:#3d151e;">
        Thank You for giving us the opportunity to work with you.
    </div>
@endsection
