@php
    $category = \App\Models\category::all();
@endphp

<div class="navbar_section">
    <div class="top_header px-5 pt-5">
        <div class="left_section">
            <button class="navbar-toggler mobilenavbar_toggle" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="social_icon">
                <a href="https://www.facebook.com/campaign/landing.php?campaign_id=14884913640&extra_1=s%7Cc%7C550525804944%7Cb%7Cfacebook%20%27%7C&placement=&creative=550525804944&keyword=facebook%20%27&partner_id=googlesem&extra_2=campaignid%3D14884913640%26adgroupid%3D128696220912%26matchtype%3Db%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-327195741349%26loc_physical_ms%3D9061770%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=CjwKCAjw_aemBhBLEiwAT98FMuwclvv4cuYWuu_cjvpaYG_lc8JBFaVLWjJajD1Ea2busyHInYhiSxoC6eAQAvD_BwE"
                    target="blank"><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a target="blank" href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
        <div class="center_section">
            <h3>Blog Site</h3>
        </div>
        <div class="right_section">
            <a data-toggle="modal" data-target="#exampleModal" href="" class="lgpartmodal_view">SEARCH <span
                    class="ml-2"><i class="fa-solid fa-magnifying-glass"></i></span></a>

            <span data-toggle="modal" data-target="#exampleModal" class="modalOpen_serching"><i
                    class="fa-solid fa-magnifying-glass"></i></span>

            <span class="mobile_view_fillter sidebarclose"><i class="fa-solid fa-filter mt-1 "></i></span>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light px-5 mt-3 ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="row w-100 mt-1 mobile_closingpart">
            <div class="col-md-12">
                <span class=" closenavbarbtn mobilenavbar_toggle"><i class="fa-solid fa-xmark"></i></span>
            </div>
            <div class="col-md-12 closeviewpart">
                <h5>Close Menu</h5>
            </div>
        </div>
        <div class="collapse navbar-collapse pt-2" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('welcome') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="categories_list">
                    <a class="nav-link " href="#" id="categories_lists">Categories <span><i
                                class="fa-solid fa-angle-down"></i></span></a>

                    <div class="Catergory_dropdown " id="Catergory_dropdown">

                        <ul>

                            @if (!empty($category))
                                @foreach ($category as $key => $item)
                                    <li class="mt-2"><a
                                            href="{{ route('categories', $item->id) }}">{{ $item->category }}</a></li>
                                @endforeach
                            @endif
                            {{-- <li class="mt-2"><a href="{{ route('Categories.lifestyle') }}">Lifestyle</a></li>
                            <li><a href="{{ route('Categories.health') }}">Health</a></li>
                            <li><a href="{{ route('Categories.Family') }}">Family</a></li>
                            <li><a href="{{ route('Categories.manegment') }}">Mangement</a></li>
                            <li><a href="{{ route('Categories.travel') }}">Travel</a></li>
                            <li><a href="{{ route('Categories.work') }}">Work</a></li> --}}
                        </ul>
                    </div>
                </li>

                {{-- <li class="categories_list">
                    <a class="nav-link" href="#">Blog <span><i class="fa-solid fa-angle-down"></i></span></a>
                    <div class="Catergory_dropdown " style="width: 140px" id="Catergory_dropdown">
                        <ul>
                            <li class="mt-2"><a href="{{route('blog.videopost')}}">Video Post</a></li>
                            <li><a href="{{route('blog.audio')}}">Audio Post</a></li>
                            <li><a href="{{route('blog.gallery')}}">Gellery Post</a></li>
                            <li><a href="{{route('blog.standered')}}">Standard Post</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('style')}}">Style</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('contect') }}">Contact</a>
                </li>
                <li class="sidebarclose mobile_view">
                    <button class="btn">Fillter <span><i class="fa-solid fa-filter"></i></span></button>
                </li>
            </ul>
        </div>
    </nav>
</div>
{{-- This is Searching modal  --}}
<div class="container-fluid">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> --}}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h6>Search for:</h6>
                        </div>
                        <form action="/search" class="w-100">
                            <div class="col-md-12">
                                <input type="search" name="search" class="form-control">
                            </div>
                            <div class="col-md-12 mt-3">
                                <button class="btn btn-primary w-100" style="visibility: hidden"
                                    type="submit">Search</button>
                            </div>
                        </form>
                        <div class="col-md-12 text-center text-secondary mt-2">
                            <h5>Please Enter to being your search</h5>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> --}}
            </div>
        </div>
    </div>
</div>

<div class="container-fluid fillter_sidebar">
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4">
            <div class="card fillter_sidebar_card">
                <div class="card-top p-3">
                    <div class="row fillter_section_top">
                        <div class="col-md-9 d-flex align-items-center">
                            <h5>Fillter & sort <span><i class="fa-solid fa-filter"></i></span></h5>
                        </div>
                        <div class="col-md-3 d-flex align-items-center justify-content-center">
                            <button type="button" class="close sidebarclose" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true" style="color: #000">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 border-bottom border-top">
                            <form action="/search" class="w-100 mt-2 d-flex">
                                <div class="col-md-8 px-0">
                                    <input type="search" name="search" class="form-control"
                                        placeholder="Fillter Your Blog" required>
                                </div>
                                <div class="col-md-4 px-0">
                                    <button class="btn Fillter_serchbutton" type="submit"><span><i
                                                class="fa-solid fa-magnifying-glass"></i></span></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-12 checkbox_fillter_scroll">
                            <form action="{{ url('/fillter') }}" class="w-100">
                                <div class="row mr-0">
                                    <div class="col-md-12 border-bottom">
                                        <div class="form-check py-2">
                                            <h5>Newest Blog</h5>
                                        </div>
                                    </div>
                                    @if (!empty($category))

                                        @foreach ($category as $key => $items)
                                            <div class="col-md-12 mt-3 border-bottom">
                                                <div class="form-check py-2">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            name="fillter[]" id=""
                                                            value="{{ $items->id }}">
                                                        {{ $items->category }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach

                                    @endif

                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary w-100">Apply</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('.sidebarclose').click(function() {
            // alert('hello');
            $('.fillter_sidebar').toggleClass('fillter_sidebar_active');
            $('.fillter_sidebar_card').toggleClass('fillter_sidebar_active');
        });
    });
    // mobile view navbar toggle button 
    $(document).ready(function() {
        $('.mobilenavbar_toggle').click(function() {
            $('.navbar').toggleClass('mobileView_show');
        });
    });

    // mobile view category toggle 

    $(document).ready(function() {
        $('#categories_lists').click(function() {
            $('#Catergory_dropdown').toggle();
            $('.fa-angle-down').toggleClass('category_dropdown_icon');
            // alert('hello');
        });
    });
</script>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap');

    .mobile_view_fillter i {
        display: none;
    }

    .mobilenavbar_toggle {
        display: none;
    }

    .closenavbarbtn {
        display: none;
    }

    .closeviewpart {
        display: none;
    }

    .mobile_closingpart {
        display: none;
    }

    .modalOpen_serching {
        display: none;
    }

    /* Fillter sidebar css start  */
    .Fillter_serchbutton:focus {
        box-shadow: none;
    }

    .Fillter_serchbutton span {
        font-size: 25px;
        color: #959595;
    }

    .fillter_sidebar {
        position: fixed;
        z-index: 1;
        top: 0;
        background: #0003;
        width: 100%;
        height: 100%;
        display: none;
        transition: all 0.8s ease-in-out;
    }

    .sidebarclose span {
        margin: 0px 10px !important;
        font-size: 35px !important;
    }

    .fillter_sidebar_card {
        position: fixed;
        top: 0px;
        left: 100%;
        transition: all 0.8s ease-in-out;
        height: 100%;
    }

    .fillter_sidebar_active {
        left: 70%;
        display: block;
        transition: all 0.8s ease-in-out;
    }


    /* Fillter sidebar css end  */
    /* modal css start  */
    #exampleModal {
        background-color: #000;
    }

    .modal-content {
        background: none;
    }

    .modal-header {
        border: none;
    }

    .close span {
        margin: 0px 215px;
        font-size: 30px;
        color: #fff;
    }

    .sidebarclose button {
        color: #cac9c9;
        font-weight: 501;
        padding: 0px 0px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .sidebarclose button:hover {
        color: #cac9c9;
        padding: 0px 0px;
    }

    .sidebarclose button:focus {
        box-shadow: none;
    }

    .modal-body h6 {
        font-size: 15px;
        color: #FFFF;
        font-weight: bold
    }

    .modal-body input {
        padding: 40px 0px;
        background: none;
        border: none;
        border-bottom: 3px solid rgb(59, 58, 58);
    }

    .modal-body input:focus {
        color: #fff;
        font-size: 25px;
        box-shadow: none;
        border: none;
        border-bottom: 3px solid rgb(59, 58, 58);
        background: none;
    }

    .modal-body input::placeholder {
        font-size: 2rem;
        color: #fff;
    }

    /* modal css end  */
    .navbar_section {
        height: 200px;
        background-color: #19191b;
    }

    .top_header {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    #navbarSupportedContent {
        display: flex;
        justify-content: center;
        align-items: center;
        border-top: 0.5px solid #373737;
    }

    #navbarSupportedContent ul {
        display: flex;
        justify-content: space-evenly !important;
        align-items: center;
        width: 100%;
    }

    #navbarSupportedContent ul li a {
        color: #cac9c9;
        font-weight: 501;
    }

    #navbarSupportedContent ul .active a {
        color: #FFFF !important;
    }

    .social_icon a {
        padding-right: 15px;
    }

    .social_icon a i {
        font-size: 20px;
        color: #FFFF;
    }

    .center_section h3 {
        font-family: 'Abril Fatface', cursive;
        font-size: 35px;
        color: #FFFF;
    }

    .right_section a {
        color: #FFFF;
        text-decoration: none;
        font-family: 'Abril Fatface', cursive;
        font-size: 20px;
        font-weight: 501px;
        text-transform: capitalize;
    }

    .Catergory_dropdown {
        display: none;
        z-index: 1;
        position: absolute;
        transition: all 0.8s ease-in-out;
    }

    .category_dropdown_icon {
        transition: all 0.5s ease-in-out;
        transform: rotate(180deg);
    }

    .Catergory_dropdown {
        position: absolute;
        left: 0%;
        top: 100%;
        background-color: #000;
        z-index: 1;
        width: 130px;
        transition: all 0.8s ease-in-out;

    }

    .Catergory_dropdown ul {
        display: block !important;
        list-style: none;
        padding-left: 0px;
        line-height: 25px;
    }

    .Catergory_dropdown ul li {
        text-align: center;
        margin-bottom: 12px;

    }

    .Catergory_dropdown ul li a {
        text-decoration: none;
        letter-spacing: 2px;
    }

    .categories_list {
        position: relative;
    }
</style>
