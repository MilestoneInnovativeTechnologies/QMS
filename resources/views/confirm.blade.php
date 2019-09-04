<!doctype html>
<html>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>comfirm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="font/fontawesome-free-5.10.2-web/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<section>
    <div class="col-lg-12 ">

        <div class="raw">
            <div class="heading">
                <h1>Milestone Que system</h1>
            </div>
        </div>
        <div class="bg">
            <div class="raw">



                <div class="cofirm-messge"> Booked Successfully </div>
            </div>

            <div class="ykn"> Your Token NO:<span class="Number">@php
            use Milestone\QMS\Helper\Customer;use Milestone\QMS\Model\Token;$customer = Customer::create(request('name'),request('phone'),request('email'));
                    $token = new Token(); $token->category = request('category'); $token->customer = $customer->id; $token->save();
            @endphp {{ $token->code }}</span></div>
            <div class="raw bk_button">
                <a class="button button7" href="{{ route('booking') }}">Book another</a>
            </div>

        </div>
    </div>
</section>
</body>
</html>
