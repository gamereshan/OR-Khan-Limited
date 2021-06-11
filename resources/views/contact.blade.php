@extends('layouts.app')
@section('content')
    <section class="jumbotron">
        <div class="container" id="form">
            <br>
            <h2 class="text-center font-weight-bold">Contact Us</h2>
            <form action="/action_page.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name...">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name...">

                <label for="message">Your Review</label>
                <input type="text" id="message" name="message" placeholder="Type your message...">

                <input id="submit" type="submit" value="Submit">
                <br>
                <label></label>
            </form>
        </div>
    </section>

    <style>
        body{
            background: linear-gradient(-45deg, #EE7752, #E73C4e, #23A6D5, #23D5AB);
            background-size: 100%;
            padding: 20px;
            height: 100vh;
        }
        .jumbotron {
            padding-top: 10%;
            max-height: 500px;
            background: transparent;
        }
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 2px solid rgba(21, 19, 19, 0.55);
            border-radius: 10px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: transparent;
        }
        label{
            font-weight: bold;
        }
        #form{
            max-width: 700px;
            background-color: rgba(0, 0, 0, 0.3);
        }
        #submit{
            background-color: rgba(255, 126, 126, 0.1);
            color: black;
            font-weight: bold;
        }
        #submit:hover{
            background-color: rgba(126, 180, 95, 0.4);
            color: black;
            font-weight: bold;
        }
        #fname{
            background-color: transparent;
            color: black;
        }
        #lname{
            background-color: transparent;
        }
        #message{
            background-color: transparent;
        }
        ::placeholder{
            color: white;
        }
        label{
            color: white;
        }
    </style>
@endsection