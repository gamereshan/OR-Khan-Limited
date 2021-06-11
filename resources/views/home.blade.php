@extends('layouts.app')

@section('content')
    <br>
    <section class="background"></section>
    <p class="text-center" style="font-family: 'Palatino Linotype'; font-size: 60px; font-weight: bolder;">O.R. Khan Hospital</p>
    <br>
    <section class="jumbotron" id="fclass">
        <div class="card-deck embed-responsive">
            <div class="card1" id="card">
                <img class="card-img-top" src="{{asset('images/jbackground.jpg')}}">
                <div class="card-body text-center">
                    <h3 class="card-title" style="font-weight: bold; font-size: 20px">Operation Theather</h3>
                </div>
            </div>
            <div class="card1" id="card">
                <img class="card-img-top" src="{{asset('images/jbackground.jpg')}}">
                <div class="card-body text-center">
                    <h3 class="card-title" style="font-weight: bold; font-size: 20px">Treatment at low cost</h3>
                </div>
            </div>
            <div class="card1" id="card">
                <img class="card-img-top" src="{{asset('images/jbackground.jpg')}}">
                <div class="card-body text-center">
                    <h3 class="card-title" style="font-weight: bold; font-size: 20px">Advanced treatment</h3>
                </div>
            </div>
            <div class="card1" id="card">
                <img class="card-img-top" src="{{asset('images/jbackground.jpg')}}">
                <div class="card-body text-center">
                    <h3 class="card-title" style="font-weight: bold; font-size: 20px">Specialized Doctor</h3>
                </div>
            </div>
        </div>
    </section>
    <br>
    <p class="text-center" style="font-family: Nunito;font-size: 40px; padding-top: 10px; font-weight: bold">Our Service</p>
    <section class="jumbotron">
        <div class="row">
            <div class="col-sm-3">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="{{asset('images/jbackground.jpg')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">24 Hours Open</h4>
                        <p class="card-text">This hospital is 24 hours open. Medical shops are also open in night</p>
                        <a href="#" class="btn btn-dark">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="{{asset('images/jbackground.jpg')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title"> 24 Hours Nonstop Service</h4>
                        <p class="card-text">Separate doctors are in duty in day and night shift. Nurse is also take care patients.</p>
                        <a href="#" class="btn btn-dark">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="{{asset('images/jbackground.jpg')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title" >Free For Second Time</h4>
                        <p class="card-text" >Cost will be free when meet the doctor at the second time. No visiting charge will be appiled.</p>
                        <a href="#" class="btn btn-dark">See More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card" style="width:400px">
                    <img class="card-img-top" src="{{asset('images/jbackground.jpg')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Assistant For Every Room</h4>
                        <p class="card-text" >Every single room have twich bed and an assistant for patient</p>
                        <a href="#" class="btn btn-dark">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <center><p1 style="font-family: Nunito;font-weight: bolder; font-size: 40px;  color: black">Features</p1></center>
    <br>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
    <p class="text-center" style="font-family: Nunito;font-size: 40px; padding-top: 10px; font-weight: bold">Employee</p>
    <section class="container-fluid" style="max-width: 80%">
        <br>
        <br>
        <div class="row text-center">
            <div class="col-md-2 counter-box">
                <div class="iconbox">
                    <iframe class="fa" src="{{asset('svg/doctor.svg')}}" frameborder="0" height="100px" width="100px"></iframe>
                </div>
                <br>
                <p class="counter text-center">150</p>
                <p class="text-center">Doctors</p>
            </div>
            <div class="col-md-2 counter-box">
                <div class="iconbox">
                    <iframe class="fa" src="{{asset('svg/nurse.svg')}}" frameborder="0" height="100px" width="100px"></iframe>
                </div>
                <br>
                <p class="counter text-center">140</p>
                <p class="text-center">Nurse</p>
            </div>
            <div class="col-md-2 counter-box">
                <div class="iconbox" >
                    <iframe class="fa" src="{{asset('svg/bed.svg')}}" frameborder="0" height="100px" width="100px"></iframe>
                </div>
                <br>
                <p class="counter text-center">5</p>
                <p class="text-center">O.T.</p>
            </div>
            <div class="col-md-2 counter-box">
                <div class="iconbox">
                    <iframe class="fa" src="{{asset('svg/room.svg')}}" frameborder="0" height="100px" width="100px"></iframe>
                </div>
                <br>
                <p class="counter text-center">500</p>
                <p class="text-center">Rooms</p>
            </div>
            <div class="col-md-2 counter-box">
                <div class="iconbox">
                    <iframe class="fa" src="{{asset('svg/features.svg')}}" frameborder="0" height="100px" width="100px"></iframe>
                </div>
                <br>
                <p class="counter text-center">50</p>
                <p class="text-center">Feature</p>
            </div>
            <div class="col-md-2 counter-box">
                <div class="iconbox">
                    <iframe class="fa" src="{{asset('svg/24.svg')}}" frameborder="0" height="100px" width="100px"></iframe>
                </div>
                <br>
                <div class="row">
                    <div class="col">
                        <p class="counter text-center">24</p>
                    </div>
                    <div class="col">
                        <p style="font-size: 45px; font-weight:normal; padding-top: 4px">Hours</p>
                    </div>
                </div>
                <p class="text-center">Service</p>
            </div>
        </div>

    </section>
    <br>
    <br>
    <p class="text-center" style="font-family: Nunito;font-size: 40px; padding-top: 10px; font-weight: bold">Contact us</p>
    <footer class="container-fluid" id="contact">
        <div class="row">
            <div class="col-4 text-center">
                <div class="jumbotron">
                    <h2 class="text-center" style="font-weight: bold">O.R. Khan Hospital</h2>
                    <br>
                    <p class="text-left" style="font-weight: bold; font-size: 18px">
                        Bangladesh Specialized Hospital has all the characteristics of a <br>world-class hospital with wide range of services and  specialists,<br> equipments and technology, ambience and service quality.
                    </p>
                    <h2 style="color: red; font-weight: bold; padding-top: 5px">Hotline: 2020202</h2>
                </div>
            </div>
            <div class="col-4 text-center">
                <div class="jumbotron">
                    <h2 class="text-center" style="font-weight: bold">Your Emergengy is here</h2>
                    <br>
                    <p class="text-left" style="font-weight: bold; font-size: 16px">Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jonail Bazar, Natore, Rajshahi, Bangladesh.</p>
                    <p class="text-left" style="font-weight: bold; font-size: 16px">Cell Number: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;01784086002, 01784086002, 01784086002.</p>
                    <p class="text-left" style="font-weight: bold; font-size: 16px">Telephone Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +88000000000.</p>
                    <p class="text-left" style="font-weight: bold; font-size: 16px">E-mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eshan35-268@diu.edu.bd</p>
                    <p class="text-left" style="font-weight: bold; font-size: 16px">Fax: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;012345</p>
                </div>
            </div>

            <div class="col-4 text-center">
                <div class="jumbotron text-center" >
                    <h2 class="" style="font-weight: bold">Social</h2>
                    <br>
                    <div class="row">
                        <div class="col"  id="social">
                            <h1><i class="fab fa-facebook"></i></h1>
                            <h3>Facebook</h3>
                        </div>
                        <div class="col"   id="social">
                            <h1><i class="fab fa-twitter-square"></i></h1>
                            <h3 class="social">Twitter</h3>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col" id="social">
                            <h1><i class="fab fa-instagram"></i></h1>
                            <h3 class="social">Instragram</h3>
                        </div>
                        <div class="col" id="social" >
                            <h1><i class="fab fa-telegram"></i></h1>
                            <h3 class="social">Telegram</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center" style="font-size: 13px; font-weight: bold"> This Website Is Made By R Rafiou Khan Eshan</p>
        <p class="text-center" style="font-size: 13px; font-weight: bold"> © O.R Khan Limited</p>
    </footer>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script>
        jQuery(document).ready(function ( $ ) {
            $('.counter').counterUp({
                delay: 10,
                time:1000
            })
        })
    </script>


    <style>
        body{
            background: linear-gradient(-45deg, #EE7752, #E73C4e, #23A6D5, #23D5AB);
            background-size: 100%;
        }
        #card{
            transition-duration: 0.9s;
            position: relative;
            border-radius: 25px;
            height: 400px;
            width: 400px;
            border: none;
            align-items: center;
        }
        .card-body{
            text-align: center;
            background: transparent;
            color: black;
        }
        .card-deck{
            display: flex;
            justify-content: space-evenly;
        }
        .jumbotron {
            max-height: 500px;
            background: transparent;
        }
        #card:hover{
            transition-duration: 0.9s;
            display: inline;
            height: 450px;
            width: 450px;
            border: none;
            align-items: center;
        }
        .image{
            transition-duration: 0.9s;
            display: inline;
            height: 410px;
            width: 410px;
            border: none;
            align-items: center;
        }
        .image:hover{
            transition-duration: 0.9s;
            display: inline;
            height: 450px;
            width: 450px;
            border: none;
            align-items: center;
        }
        .iconbox{
            border: 1px solid red;
            border-style: dashed;
            height: 150px;
            width: 150px;
            margin: 20px auto;
            transform: rotate(45deg);
        }
        .iconbox .fa{
            font-size: 40px;
            margin: 25px auto;
            transform: rotate(-45deg);
        }
        .counter-box p{
            font-size:50px ;
        }
        section{
            color: white;
        }
        p{
            color: black;
        }
        #fclass{
            display: inline;
        }
        #social:hover{
            color: blueviolet;
        }
        .btn-dark{
            background-color: rgba(0,0,0,0.3);
        }
        .btn-dark:hover{
            background-color: rgba(0,0,0,0.6);
        }
        .card-title, .card-text{
            font-weight: bold;
        }
    </style>

@endsection
