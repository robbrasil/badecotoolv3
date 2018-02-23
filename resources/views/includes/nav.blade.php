 <!-- Navigation -->
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

            <ul class="nav navbar-top-links navbar-right">

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
                <li>
                    <a href="/login">Login</a>
                </li>
                <li>
                    <a href="/register">Register</a>
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

        </nav>
