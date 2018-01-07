<nav id="nino-navbar" class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">
                        <img src="{{ asset('images/gatestack.png') }}" alt="GateStack - Discussion for GATE CSE" id="site-logo" class="logo-big">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="nino-menuItem pull-right">
                        <div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a></li>
                                <li class=""><a href="#nino-story">About</a></li>
                                <li><a href="https://gatestack.in" target="_blank">Discuss-GATE</a></li>
                                <li><a href="#nino-latestBlog">Blog</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                        <ul class="nino-iconsGroup nav navbar-nav">
                            <li><a href="#"><i class="mdi mdi-cart-outline nino-icon"></i></a></li>
                            <li><a href="#" class="nino-search"><i class="mdi mdi-magnify nino-icon"></i></a></li>
                        </ul>
                    </div>
                </div><!-- /.container-fluid -->
            </nav>
