<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TreeWb</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            body, html {
                height: 100%;
                background: linear-gradient(
                rgba(0, 0, 0, 0.4), 
                rgba(0, 0, 0, 0.1)
                ),url("{{asset('/')}}imgs/bg2.png");
                color:#fff;
                background-size:cover;
            }
            #flex-container {
                /* display: -webkit-box;       
                display: -moz-box;         
                display: -webkit-flex;      
                display: flex;              
                -webkit-box-flex-direction: row;
                -moz-box-flex-direction: row;
                -webkit-flex-direction: row;
                flex-direction: row;
                height:100%;   */ 
                display: -webkit-box;      /* OLD - iOS 6-, Safari 3.1-6 */
                display: -moz-box;         /* OLD - Firefox 19- (buggy but mostly works) */
                display: -webkit-flex;     /* NEW - Chrome */
                display: flex;             /* NEW, Spec - Opera 12.1, Firefox 20+ */
                -webkit-box-flex-direction: row;
                -moz-box-flex-direction: row;
                -webkit-flex-direction: row;
                flex-direction: row;
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                width: 100%;
                height: 100%;
                overflow:auto;
            }  
            .btncus:hover{
                color: #fff;
                background-color: #66bb2c;
            }
            .btncus:active{
                color: #fff !important;
                background-color: #66bb2c !important;
                border-color:#56a72d !important;
                
            }
            .btncus{
                background:#56a72d;
                color:#fff;
                font-size:15px;
                border-color:#56a72d !important;
            }
            .btncus:focus{
                box-shadow:inherit !important;
                border-color:#56a72d !important;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body> 
        
        <div id="flex-container">
        
            @yield('content')
        </div>
    </body>
</html>
