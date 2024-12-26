<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AudiTho</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        <link rel="stylesheet" href="bookingForm.css">


    </head>
    <body class="antialiased">
        <div id="_next">
            <div id="header">
                <div class="inner">
                    <h1 class="logo">
                        <a title="AudiTho" href="/">
                            <img src="{{ asset('images/AudiTho.png') }}" alt="AudiTho">
                        </a>
                    </h1>
                    @if (Route::has('login'))
                    <ul class="gnb" id="gnb">
                        <li>
                            <a href="/" class="nav-link" >HOME</a>
                        </li>
                        <li>
                            <a href="{{route('about')}}" class="nav-link" > ABOUT</a>
                        </li>
                        <li>
                            <a href="{{route('faq')}}" class="nav-link">FAQ</a>
                        </li>

                        @auth
                        <li>
                            <a href="{{ url('/dashboard') }}" class="nav-link" >DASHBOARD</a>
                        </li>
                        @else
                        <li>
                            <a href="{{ route('login') }}" class="nav-link" >LOG IN</a>
                        </li>
                            @if (Route::has('register'))
                            <li>
                                <a href="{{ route('register') }}" class="nav-link">REGISTER</a>
                            </li>
                            @endif
                        @endauth
                    </ul>
                    @endif
                </div>
            </div>

            <div class="booking-box">
                <div class="column">

                    <div class="audi-detail">
                        <h2>
                            MEDICINE AUDITORIUM
                        </h2>

                        <form>

                            <div class="form-group">
                                <label for="datePicker" class="col-sm-2 col-form-label">
                                    Desired Date
                                </label>
                                <div >
                                    <input class="form-control" id="datePicker" placeholder="Desired Date"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datePicker" class="col-sm-2 col-form-label">
                                    Time Start
                                </label>
                                <div >
                                    <input class="form-control" id="datePicker" placeholder="Time Start"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="datePicker" class="col-sm-2 col-form-label">
                                    Time End
                                </label>
                                <div >
                                    <input class="form-control" id="datePicker" placeholder="Time End"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAudi" class="col-sm-2 col-form-label">
                                    Type of Event
                                </label>
                              <div>
                                <input  type="text" class="form-control" id="inputTOE" placeholder="Type of Event">
                              </div>
                            </div>

                            <div class="form-group">
                                <label for="inputAudi" class="col-sm-2 col-form-label">
                                    Notes
                                </label>
                              <div>
                                <textarea readonly type="text" rows="7" class="form-control" id="inputNotes" placeholder="Notes" ></textarea>
                              </div>
                            </div>

                            <div class="form-group-button">
                                <div>
                                    <a href="" type="submit" class="request-booking">
                                        Request Booking
                                    </a>
                                </div>
                              <div>
                                <a href="{{ route('bookAudi') }}" type="submit" class="back">
                                    Back
                                </a>
                              </div>
                            </div>
                          </form>

                    </div>
                </div>

            </div>
        </div>



        <footer class="footer">
            <p>
                <strong>☎ Contact Us:</strong> (02) 8786-1611 loc. 8556 / 8692 / 8829      
             </p>
             <p>
                <strong>  ⏱ Office Hours: </strong> Monday to Friday : 9:00 AM to 6:00 PM
            </p>
          <p>
           <strong> ⚲ Visit Us:  </strong> Espana Blvd., Sampaloc, Manila, Philippines 1008                                  
          </p>
          <br> </br> 
          <p> 
            © 2024. University of Santo Tomas. Powered by Santo Tomas e-Service Providers.
          </p>
        
        </footer>
    </body>
</html>
