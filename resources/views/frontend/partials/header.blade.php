 <header>
    <div id="stuck_container">
        <div class="container">
            <div class="row">
                <div class="grid_12">
                    <h1>
                        <a href="index.html">
                            <img src="{{URL::asset('frontend/images/logo.png')}}" alt="Your Happy Family">
                        </a>
                    </h1>
                    <div class="menu_block">
                        <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                            <ul class="sf-menu">
                                @foreach($menus as $m)
                                <li><a href="{{$m->slug}}">{{ucfirst($m->page_title)}}</a></li>
                                @endforeach
                                
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>