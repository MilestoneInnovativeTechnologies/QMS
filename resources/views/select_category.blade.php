<!doctype html>
<html>
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>catg</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script>
        function setCategory(category){
            document.querySelector(".button12.button.active").setAttribute('class','button button12');
            document.querySelector("#Get"+category).setAttribute('class','button button12 active');
            document.querySelector("#link").setAttribute('href',document.querySelector("#link").getAttribute('href')+'&category='+category);
        }
    </script>
</head>

<body>
<section>
    <div class="col-lg-12">
        <div class="raw">
            <div class="heading">
                <h1>Milestone Que system</h1>
            </div>
        </div>
        <div class="buttons">
            <div class="container">

                <div class="row  client_icons">

@foreach(Milestone\QMS\Model\Category::all() as $category)
                        <div class="col-lg-6" onclick="setCategory('{{ $category->id }}')"><input type="submit" class="button button12{{ $loop->first ? ' active':'' }}" value="{{ $category->name }}" id="Get{{ $category->id }}"></div>
@endforeach
                    <div class="col-lg-6" style="visibility: hidden"><input type="submit " class="button button12" value="MAC" id=""></div>
                    <div class="col-lg-6" style="visibility: hidden"><input type="submit" class="button button12"  value="IOS" id=""></div>
                </div>


                <div class="row client_iconss">
                    <div class="col-lg-12"> <button type="submit" class="button button13">

                            <a id="link" href="{{ route('confirm',['name'=>request('name'),'phone'=>request('mobile'),'email'=>request('email'),'category' => Milestone\QMS\Model\Category::first()->id]) }}">GET <span style="color:#211213">TOKEN</span></a></button>

                        <!--/*<input type="submit" class="button button13"  value="" id="Get5" ><a href="conirmation.html">NEXT</a>*/--></div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
