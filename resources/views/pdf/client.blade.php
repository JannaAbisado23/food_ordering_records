<!DOCTYPE html>
<html>

<head>
    <title>One Prince Garden Cafe
    </title>
</head>
<style>
    *{
        margin: 0;
    }
</style>
<body style="font-family: 'Croissant One', cursive;">
    <div style="">
        <div style="text-align: center; color: black; padding: 25px">
            <h1>One Prince Garden Cafe</h1>
            <h2>Cagayan, Inabanga, Bohol</h2>
            <h2>Tel 09606765143</h2>

        </div>
    </div>

    <div style="margin: 20px; font-size: 30px; text-align: center">
        <div style="margin-bottom: 20px">
            <b>Email:</b> {{$client->email }}
        </div>
        <div style="margin-bottom: 20px">
            <b>Customer:</b> {{$client->customer }}
        </div>
        <div style="margin-bottom: 20px">
            <b>Address:</b> {{$client->address}}
        </div>
        <div style="margin-bottom: 20px">
            <b>Foods:</b> {{$client->foods}}
        </div>
        <div style="margin-bottom: 20px">
            <b>Drinks:</b> {{$client->drinks}}
        </div>
        <div style="margin-bottom: 20px">
            <b>Price:</b> {{$client->price}}
        </div>

        <br> <br>

        Dear valued customer, <br> <br>

        We hope this email finds you well. We wanted to take a moment to review your order details to ensure everything is correct. If you spot any discrepancies or have any changes you'd like to make, please don't hesitate to reply to this email, and our team will be more than happy to assist you.

        Thank you for choosing us, and we look forward to serving you!

        Best regards,
        <div style="color: orange; font-size: 40px; margin-top: 20px">
            One Prince Garden Cafe
        </div>

    </div>

    {{-- <p style="background-color: rgb(214, 214, 214); padding: 10px; border-radius: 10px; text-align: center; margin-bottom: 18pt; font-size: 20px;">

        <b>Billing System <br>
            Boheco Tubigon Bohol <br>
            Tel: 09606765143</b>

    </p> <br> <hr> <br>

    <h1 style="">Customer Details</h1>
    <h1 style="font-size: 20px;">Name: {{$client->name}}</h1>
    <h1 style="font-size: 20px;">Email: {{$client->email}}</h1>
    <h1 style="font-size: 20px;">Address: {{$client->address}}</h1>
    <h1 style="font-size: 20px;">Phone: {{$client->phone}}</h1>

    <br> <hr> <br>
    <h1 style="">Balance Information</h1>
    <h1 style="font-size: 20px;">Balance: {{$client->balance}}</h1>
    <h1 style="font-size: 20px;">Credit Limit: {{$client->credit_limit}}</h1>
    <br>

    <h1 style="">Subscription Details</h1>
    <h1 style="font-size: 20px;">Subscription Expiry Date: {{$client->subscription_expiry_date}}</h1>
    <h1 style="font-size: 40px;">Total Price: {{$client->subscription_plan}}</h1>
 <br>
 Notes:
 <h1 style="font-size: 20px;">{{$client->notes}}</h1>


 <br> <hr> <br>
 Boheco is dedicated to providing top-notch service to all our valued customers. If you have any inquiries or require assistance with your account, please don't hesitate to contact our support team using the provided contact information above.

 We appreciate your continued patronage and look forward to serving you again in the future.

 Sincerely,

Kristine Dupa
Officer
Boheco --}}

</body>
</html>
