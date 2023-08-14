<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

@extends('layout.app')

@section('content')


    <div class="container blog_homeContent">
        <div class="row ">
            <div class="col-md-12 mb-4 text-center category">

                <h1>{{ $category_name->category ?? '' }}</h1>
            </div>

            @if (!empty($data))


                @foreach ($data as $key => $item)
                    <div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="col-md-4 mb-5">
                        <div class="card border-0 shadow-lg h-100">
                            <div class="card-top content_img">
                                <img src="{{ 'http://127.0.0.1:8000/' }}/{{ $item->file }}" alt="">
                                <div class="content_background">
                                    <h1>...</h1>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row blog_backgroundbody">
                                    <a href="{{ route('viewpost', $item->id) }}" class="w-100 text-decoration-none">
                                        <div class="profile_pic">
                                            <div class="col-md-2">
                                                <img src="{{ 'http://127.0.0.1:8000/' }}/{{ $item->userImage }}"
                                                    alt="" width="40px" height="40px"
                                                    style="border-radius: 50%;">
                                            </div>
                                            <div class="col-md-8 px-1">

                                                <span>{{ $item->name }}</span>

                                            </div>
                                        </div>
                                    </a>
                                    <?php
                                    $dateString = $item->created_at;
                                    $date = new \Carbon\Carbon($dateString);
                                    $hindi = $date->locale('fr')->formatLocalized('%B %e, %Y');
                                    ?>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8 px-1">
                                        {{-- <p class="mb-2">December 29, 2017</p> --}}
                                        <p class="mb-2">{{ $hindi }}</p>
                                    </div>
                                    <div class="col-md-12 mb-3" style="height: 60px;">
                                        <h4>
                                            <p class="text-borderspan">{{ $item->title }}</p>
                                        </h4>
                                    </div>
                                    <div class="col-md-12">
                                        <span>{!! $item->discription !!}</span>
                                    </div>
                                    <div class="col-md-12">
                                        <a href="{{ route('viewpost', $item->id) }}">View Post</a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>


    <style>
        .category h1 {
            font-size: 50px;
            font-weight: bold;
            letter-spacing: 5;
        }

        .adminName {
            font-size: 15px;
            color: #747272;
        }

        .page-item.active .page-link {
            background: #19191b;
            border-color: #19191b;
        }

        .page-link {
            color: #939393;
        }

        .page-link:hover {
            color: #19191b;
        }

        .page-link:focus {
            box-shadow: 0 0 0 .2rem rgba(0, 0, 0, 0);
        }

        .blog_homeContent {
            margin-top: 8%;
        }

        .blog_text {
            height: 150px;
            overflow: hidden;
        }

        .blog_images {
            width: 100%;
            height: 500px;
        }

        .blogside.showcontent .blog_text {
            overflow: visible;
            height: auto;
        }

        .blogside.showcontent a.readmore-btn {
            background-color: red !important;
        }

        .blog_section {
            background-color: #19191b;
            margin-top: -5%;
        }

        .blog_background {
            background-color: rgba(0, 0, 0, 0.651);
            width: 100%;
            height: 100%;
            transition: all 0.8s ease-in-out;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .content_background {
            background: #0000;
            width: 100%;
            height: 400px;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            transition: all 0.8s ease-in-out;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content_background h1 {
            opacity: 0;
            color: #fff;
            font: 18px;
            font-weight: bold;
            transition: all 0.8s ease-in-out;
        }

        .content_img:hover .content_background h1 {
            opacity: 1;
            transition: all 0.8s ease-in-out;
            transform: scale(1);

        }

        .content_img img {
            width: 100%;
            height: 400px;
            background-position: center;
            object-fit: cover;
            background-size: cover;
            transition: all 0.8s ease-in-out;
        }

        .content_img:hover .content_background {
            background: #0000008c;
        }

        .content_img {
            overflow: hidden;
        }

        .content_img:hover img {
            transform: scale(1.1)
        }

        .blog-btn {
            background-color: #44d725 !important;
            border: 0px;
            padding: 2px 15px;
            font-size: 11px;
            font-weight: 501;
            color: #fff;
            cursor: pointer;
        }

        .blog_background button {
            background-color: #2ed2d2;
            border: 0px;
            padding: 2px 15px;
            font-size: 11px;
            font-weight: 501;
            color: #fff;
            cursor: pointer;
        }

        .blog_background h4 span {
            font-size: 45px;
            color: #fff;
            cursor: pointer;
        }

        .blog_backgroundbody h4 {
            font-size: 30px;
            color: #000000;
            cursor: pointer;
            font-family: 'Roboto Mono', monospace;
            font-weight: bold;
        }

        .blog_background h5 span {
            font-size: 23px;
            color: #fff;
            cursor: pointer;
            font-weight: bold;
        }

        .blog_background h5:hover .text-borderspan {
            border-bottom: 0.5px solid rgb(95, 95, 95);
        }

        .blog_background h4:hover .text-borderspan {
            border-bottom: 0.5px solid rgb(95, 95, 95);
        }

        .blog_backgroundbody h4:hover .text-borderspan {
            border-bottom: 0.5px solid rgba(95, 95, 95, 0.24);
            transition: all 1.8s ease-in-out;
        }

        .text-borderspan {
            transition: all 1.8s ease-in-out;
        }

        .blog_background span {
            font-size: 15px;
            color: #747272;
            font-weight: bold;
        }

        .blog_backgroundbody p {
            display: inline;
        }

        .blog_backgroundbody span {
            font-size: 15px;
            color: #747272;
            line-height: 2;
            letter-spacing: 1px;
            font-weight: 501;
            overflow: hidden;
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 7;
        }

        .blog_backgroundbody table {
            display: none;
        }

        .blog_background p span:hover {
            color: #fff;
        }

        .blog_background p span {
            cursor: pointer;
            transition: all 0.5s ease-in-out;
        }

        .blog_background:hover {
            background-color: rgba(0, 0, 0, 0.84);

        }

        .blog_background img {
            cursor: pointer;
        }

        .blog_cardsection h1 {
            font-size: 70px;
            color: #a4a4a4;
        }

        .blog_cardsection p {
            font-size: 31px;
            color: black;
            font-weight: bold;
            font-family: 'Roboto Mono', monospace;
        }

        .profile_pic {
            width: 100%;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .profile_pic span {
            font-size: 14px;
            font-weight: 601;
            font-family: 'Roboto Mono', monospace;
            color: #747272;
            transition: all 0.8s ease-in-out;
        }

        .profile_pic span:hover {
            color: black;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('.readmore-btn').click(function(e) {
                e.preventDefault();
                $(this).parent().toggleClass('showcontent');

                let replacetext = $(this).parent().hasClass("showcontent") ? "Read Less" : "Read More";
                $(this).text(replacetext);
            })
        });

        // $(document).ready(function(){
        //     $('.seepost').click(function(e){
        //         e.preventDefault();
        //        let name =  $('#discrption').text();
        //         alert(name);
        //     });

        // });

        let text1 = document.getElementById('discrption');
        let text = document.querySelectorAll(".seepost");
        for (let i = 0; i < text.length; i++) {
            text[i].addEventListener("click", function() {
                alert(text1.innerText);
            });
        }
    </script>

    <script>
        $('#summernote').summernote({
            placeholder: 'Hello Bootstrap 5',
            tabsize: 2,
            height: 100
        });
    </script>
@stop
