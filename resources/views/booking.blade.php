<!doctype html>
<html>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet"
          href=
          "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<section>
    <div class="col-lg-12">
        <div class="raw">
            <div class="heading">
                <h1>Milestone Queue system</h1>
            </div>
        </div>
        <div class="lgform">
            <form action="{{ route('select_category') }}" method="get">
                <div class="form-group">

                    <div class="input-icons">
                        <i class="fa fa-user icon" style="color:#4F4F4F; font-size: 25px;">
                        </i>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name"   style="background-color: transparent;">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icons">
                        <i class="fa fa-mobile icon"  style="color:#4F4F4F;  font-size: 25px;"></i>

                        <input type="text" class="form-control" id="mobile" placeholder="Mobile Number" name="mobile" style="background-color: transparent;">
                    </div>

                </div>
                <div class="form-group">

                    <div class="input-icons">
                        <i class="fa fa-envelope icon"  style="color:#4F4F4F; font-size: 25px;">
                        </i>


                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" style="background-color: transparent;">
                    </div>

                </div>
                <button type="submit" class="button button1"><a>Continue</a></button>
            </form>
        </div>
    </div>
</section>
</body>
</html>
