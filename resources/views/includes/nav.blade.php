<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      @if (Auth::check())
           @if(Auth::user()->company_logo())
              <ul class="nav navbar-nav navbar-left">
                <li>
                  <img src="{{Auth::user()->company_logo()}}" class="headerLogo" height="45px" width="auto" alt="{{Auth::user()->company_name()}}">
                </li>
              </ul>
            @endif
      @endif
      {{-- <a class="navbar-brand" href="#">WebSiteName</a> --}}
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        @if( Auth::check())
         <li class="{{ Request::is('company/entries') ? "active" : '' }}">
             <a href="/company/entries">Installations</a>
         </li>
         <li class="{{ Request::is('company/archived') ? "active" : '' }}">
             <a href="/company/archived">Load Archive</a>
         </li>
         <li class="{{ Request::is('entries/create') ? "active" : '' }}">
             <a href="/entries/create">Add New</a>
         </li>
         <li class="dropdown">
           <a class="dropdown-toggle" data-toggle="dropdown" href="#">Welcome {{ Auth::user()->name }} <span class="caret"></span></a>
           <ul class="dropdown-menu">
             <li><a href="/profile"><i class="fa fa-user fa-fw"></i> Profile</a></li>
             <li><a href="/company"><i class="fa fa-truck fa-fw"></i></i> Company</a></li>
              <li><a href="/entries"><i class="fa fa-list fa-fw" aria-hidden="true"></i> My Assignments</a></li>
             <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
           </ul>
         </li>
         @else
           <li>
             <a href="/login">Login</a>
         </li>
         <li>
             <a href="/register">Register</a>
         </li>
         @endif
      </ul>
    </div>
  </div>
</nav>
<div id="background">
  <p id="bg-text">Badeco Tool v3</p>
</div>



{{-- ///////////////////////////////////////////////// --}}
{{-- <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      @if( Auth::check() )
        @if (Auth::user()->company_name() === "KW")
      <img src="https://badecotool.neocities.org/assets/img/2017-01-13-PHOTO-00000817.jpg" height="45px" width="190px" alt="WL">
      <img src="https://badecotool.neocities.org/assets/img/2017-01-13-PHOTO-00000816.jpg" height="45px" width="190px" alt="WL">
        @endif
      @endif
    </div>

    @if (Auth::check())
         @if(Auth::user()->company_logo())
            <ul class="nav navbar-nav navbar-left">
              <li>
                <img src="{{Auth::user()->company_logo()}}" height="45px" width="auto" alt="{{Auth::user()->company_name()}}">
              </li>
            </ul>
          @endif
    @endif

    <a class="navbar-brand" style="color:#636363" href="#">BadecoTool V3.0 <br>@if(Auth::check())<span>{{Auth::user()->company_name()}}</span>@endif</a>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      @if( Auth::check())
         <li>
             <a href="/entries"><button type="button" id="tgBtn" class="btn btn-sm btn-info" >Show Entries</button></a>
         </li>
         <li>
             <a href="/entries/create"><button type="button" id="tgBtn" class="btn btn-sm btn-success">Show Entry Form</button></a>
         </li>
         <li>
             <a href="/profile"><button type="button" id="tgBtn" class="btn btn-sm btn-default">{{ Auth::user()->name }}</button></a>
         </li>
         <li>
           <a href="/logout"><button type="button" id="tgBtn" class="btn btn-sm btn-danger"><i class="fa fa-sign-out fa-fw"></i>Logout</button></a>
         </li>
      @else
         <li>
             <a href="/login">Login</a>
         </li>
         <li>
             <a href="/register">Register</a>
         </li>
      @endif
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> --}}

{{-- ////////////////////////////////////////////////////////////////////////////// --}}
 {{-- <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Badeco Tool v3.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right" id="bs-example-navbar-collapse-1">

                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->

               @if( Auth::check())
                <li>
                    <a href="/entries"><button type="button" id="tgBtn" class="btn btn-sm btn-info" >Show Entries</button></a>
                </li>
                <li>
                    <a href="/entries/create"><button type="button" id="tgBtn" class="btn btn-sm btn-success">Show Entry Form</button></a>
                </li>
                <li>
                    <a href="/profile">{{ Auth::user()->name }}</a>
                </li>
                 <li>
                    <a href="/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>

                @else
                  <li>
                    <a href="/login">Login</a>
                </li>
                <li>
                    <a href="/register">Register</a>
                </li>

                @endif
            </ul>
            <!-- /.navbar-top-links -->

            <!-- //Uncomment to have sidenav and edit css to add margin to pagewrapper -->
            <!-- include ('includes.sidenav') -->

        </nav> --}}
