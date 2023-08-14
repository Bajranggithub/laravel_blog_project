<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap css.css') }}">
    <link rel="stylesheet" href="{{asset('mobileview/mobileview.css')}}">
    <script src="{{ asset('css/jquery ajex.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>

    @include('layout.header')

    <div class="content">
        @yield('content')
    </div>

    @include('layout.footer')

    <button id="scroll_Top" class="btn scroll_Top"> <i class="fa-solid fa-arrow-up"></i> </button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('css/jquery v3.3.1.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('css/javaScript.js') }}"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
    <script src="{{ asset('css/javaScript jquery.js') }}"></script>

</body>
<script>
    AOS.init();
</script>

<script>
    const scrolBtn = document.querySelector('#scroll_Top')
        window.addEventListener('scroll',  () => {
            if(window.pageYOffset > 300){
                scrolBtn.style.display = "block";
            }else{
                scrolBtn.style.display = "none";
            }
        });
        scrolBtn.addEventListener('click',() => {
            window.scrollTo({
                top : 0,
                behavior : "smooth"
            })
        })
</script>
<style>
    .content {
        margin-top: 5%;
        min-height: 519px;
    }

    .scroll_Top {
        position: fixed;
        bottom: 2%;
        right: 2%;
        border-radius: 50%;
        background: #171717;
        width: 50px;
       height: 50px;
       display: none;
    }
    .scroll_Top:focus {
       border: none;
       box-shadow: none;
       width: 50px;
       height: 50px;
       outline: none;
    }
    .scroll_Top i{
        font-size: 25px;
        color: #fff;
    }
</style>

</html>
