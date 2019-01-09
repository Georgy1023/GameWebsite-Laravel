@extends('layouts.page')


@section('content')

<style>
/* Style buttons */
    .btn_download {
    margin-top:15px;
    background-color: DodgerBlue;
    border: none;
    color: white;
    padding: 12px 30px;
    cursor: pointer;
    font-size: 20px;
    float:right;
    }

    /* Darker background on mouse-over */
    .btn_download:hover {
    background-color: RoyalBlue;
    }
    #best_player_table tr td,#best_player_table tr th{
        font-size:8px;
    }
    #contribution_points_table tr td,#contribution_points_table tr th{
        font-size:8px;
    }
    #best_player_table tr {
        line-height: 0px;
    }
    #contribution_points_table tr{
        line-height:0px;
    }
</style>
    
    
        <!--
    START: Navbar Mobile

    Additional Classes:
        .nk-navbar-left-side
        .nk-navbar-right-side
        .nk-navbar-lg
        .nk-navbar-overlay-content
-->
<!-- <table id="contribution_points_table" class="nk-table" style="position: fixed;top: 1em;left: 1em; width:200px; margin-top:10%; margin-left:0.5%;z-index:10">

    <thead>
        <tr>
            <th colspan="4">Top 10 Player's Contribution Points          <span  id="btn_close1" style="    margin-top: 3px;background-color: rgb(200,0,0);" class="w3-button w3-large w3-display-topright">&times;</span></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th> # </th>
            <th>Name</th>
            <th>Clan</th>
            <th>CP</th>
        </tr>

        @php
         $rank = 0;
        @endphp
        @foreach($users_table1 as $item)
        @php
            $rank++;
        @endphp
        <tr>
            <td> {{$rank}} </td>
            <td>{{$item->aName}}</td>
            @if($item->aTribe == 0)
            <td>Guanyin</td>
            @endif
            @if($item->aTribe == 1)
            <td>Fujin</td>
            @endif
            @if($item->aTribe == 2)
            <td>Jinong</td>
            @endif
            @if($item->aTribe == 3)
            <td>Sky</td>
            @endif
            <td>{{$item->aKillOtherTribe}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<table id="best_player_table" class="nk-table" style=" position: fixed;top: 1em;right: 1em; width:230px; margin-top:10%; margin-right:3%; z-index:10">
    <thead>
        <tr style="background-color:green;">
            <th colspan="4">Top 10 Best Player's
            <span  id="btn_close2" style="    margin-top: 3px;background-color: rgb(0,200,0);" class="background-color:green; w3-button w3-large w3-display-topright">&times;</span></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th> # </th>
            <th>Name</th>
            <th>Clan</th>
            <th>Level</th>
        </tr>
        @php
         $rank = 0;
        @endphp
        @foreach($users_table2 as $item)
        @php
            $rank++;
        @endphp
        <tr>
            <td> {{$rank}} </td>
            <td>{{$item->aName}}</td>
            @if($item->aTribe == 0)
            <td>Guanyin</td>
            @endif
            @if($item->aTribe == 1)
            <td>Fujin</td>
            @endif
            @if($item->aTribe == 2)
            <td>Jinong</td>
            @endif
            @if($item->aTribe == 3)
            <td>Sky</td>
            @endif
            <td>{{$item->aLevel1}}</td>
        </tr>
        @endforeach
    </tbody>
</table> -->
<div id="nk-nav-mobile" class="nk-navbar nk-navbar-side nk-navbar-right-side nk-navbar-overlay-content d-lg-none">
    <div class="nano">
        <div class="nano-content">
            <a href="{{URL::to('/')}}" class="nk-nav-logo">
                <img src="{{URL::to('/assets')}}/images/logo.png" alt="" width="120">
            </a>
            <div class="nk-navbar-mobile-content">
                <ul class="nk-nav">
                    <!-- Here will be inserted menu from [data-mobile-menu="#nk-nav-mobile"] -->
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- END: Navbar Mobile -->

    

    <div class="nk-main">
        
            <div class="nk-gap-2"></div>
        

        
<div class="container">

    <!-- START: Image Slider -->
    <div class="nk-image-slider" data-autoplay="8000">
        
        
        <div class="nk-image-slider-item">
            <img src="{{URL::to('/assets')}}/added_images/Sliders/slide-1.jpg" alt="" class="nk-image-slider-img" data-thumb="{{URL::to('/assets')}}/added_images/Sliders/slide-1-thumb.jpg">
            
            <div class="nk-image-slider-content">
                
                    <h3 class="h4">CBT TEST ANNOUNCED!</h3>
                    <p class="text-white">Dear V-Sky Players,
                     We are proud to announce the CBT (Closed Beta Test) of V-Sky 2. 
                    Starting on 26th October 2018 and lasting around 2 weeks.
                    Vortex.</p>
                    <br/>
                    <br/>
                    <p  class="text-white" style="float:right;">
                    Vortex.
                    </p>
                    <!--<a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>-->
                
            </div>
            
        </div>
        
        <div class="nk-image-slider-item">
            <img src="{{URL::to('/assets')}}/added_images/Sliders/slide-2.jpg" alt="" class="nk-image-slider-img" data-thumb="{{URL::to('/assets')}}/added_images/Sliders/slide-2-thumb.jpg">
            
            <div class="nk-image-slider-content">
                
                <h3 class="h4">CBT TEST ANNOUNCED!</h3>
                <p class="text-white">Dear V-Sky Players,
                 We are proud to announce the CBT (Closed Beta Test) of V-Sky 2. 
                Starting on 26th October 2018 and lasting around 2 weeks.
                Vortex.</p>
                <br/>
                <br/>
                <p  class="text-white" style="float:right;">
                Vortex.
                </p>
                <!--<a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>-->
            
        </div>
            
        </div>
        
        <div class="nk-image-slider-item">
            <img src="{{URL::to('/assets')}}/added_images/Sliders/slide-3.jpg" alt="" class="nk-image-slider-img" data-thumb="{{URL::to('/assets')}}/added_images/Sliders/slide-3-thumb.jpg">
                    <h3 class="h4">Stay Tuned for CBT Test!</h3>
                    <p class="text-white">Hello guys,
                    We are getting into Closed Beta Test soon!
                    Stay Tuned for client download and date!</p>
                    <br/>
                                        <br/>
                    <p  class="text-white" style="float:right;">
                    Vortex.
                    </p>
                    <!--<a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>-->
                
            </div>
        
        <div class="nk-image-slider-item">
            <img src="{{URL::to('/assets')}}/added_images/Sliders/slide-4.jpg" alt="" class="nk-image-slider-img" data-thumb="{{URL::to('/assets')}}/added_images/Sliders/slide-4-thumb.jpg">
            <div class="nk-image-slider-content">
                
                <h3 class="h4">CBT TEST ANNOUNCED!</h3>
                <p class="text-white">Dear V-Sky Players,
                 We are proud to announce the CBT (Closed Beta Test) of V-Sky 2. 
                Starting on 26th October 2018 and lasting around 2 weeks.
                Vortex.</p>
                <br/>
                <br/>
                <p  class="text-white" style="float:right;">
                Vortex.
                </p>
                <!--<a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>-->
            
        </div>
            
        </div>
        
        <div class="nk-image-slider-item">
            <img src="{{URL::to('/assets')}}/added_images/Sliders/slide-5.jpg" alt="" class="nk-image-slider-img" data-thumb="{{URL::to('/assets')}}/added_images/Sliders/slide-5-thumb.jpg">
            
            <div class="nk-image-slider-content">
                
                <h3 class="h4">CBT TEST ANNOUNCED!</h3>
                <p class="text-white">Dear V-Sky Players,
                 We are proud to announce the CBT (Closed Beta Test) of V-Sky 2. 
                Starting on 26th October 2018 and lasting around 2 weeks.
                Vortex.</p>
                <br/>
                <br/>
                <p  class="text-white" style="float:right;">
                Vortex.
                </p>
                <!--<a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-hover-color-main-1">Read More</a>-->
            
        </div>
            
        </div>
        
    </div>
    <!-- END: Image Slider -->

    <!-- START: Categories -->
    <!-- <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="{{URL::to('/assets')}}/images/icon-mouse.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="#">PC</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="{{URL::to('/assets')}}/images/icon-gamepad.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="#">PS4</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="nk-feature-1">
                <div class="nk-feature-icon">
                    <img src="{{URL::to('/assets')}}/images/icon-gamepad-2.png" alt="">
                </div>
                <div class="nk-feature-cont">
                    <h3 class="nk-feature-title"><a href="#">Xbox</a></h3>
                    <h4 class="nk-feature-title text-main-1"><a href="#">View Games</a></h4>
                </div>
            </div>
        </div>
    </div> -->
    <!-- END: Categories -->

    <!-- START: Latest News -->


    <div class="nk-gap-2"></div>
    <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Latest</span> News</span></h3>
    <div class="nk-gap"></div>

    <div class="nk-news-box">
        <div class="nk-news-box-list">
            <div class="nano">
                <div class="nano-content">
                    
                    
                    <div class="nk-news-box-item nk-news-box-item-active">
                        <div class="nk-news-box-item-img">
                            <img src="{{URL::to('/assets')}}/added_images/News/post-1-sm.jpg" alt="Welcome to V-Sky 2">
                        </div>
                        <img src="{{URL::to('/assets')}}/added_images/News/post-1.jpg" alt="Welcome to V-Sky 2" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">Vortex V-Sky 2 CBT DATE ANNOUNCED!</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-4">MMO</span>
                        </span>
                        
                        <div class="nk-news-box-item-text">
                            <p>Dear V-Sky Players,

                            We are proud to announce the CBT (Closed Beta Test) of V-Sky 2.
                            Starting on 26th October 2018 and lasting around 2 weeks.
                            </p>
                        </div>
                        <!--<a href="blog-article.html" class="nk-news-box-item-url">Read More</a>-->
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Oct 25, 2018</div>
                    </div>
                    
                    
                    <div class="nk-news-box-item">
                        <div class="nk-news-box-item-img">
                            <img src="{{URL::to('/assets')}}/added_images/News/post-2-sm.jpg" alt="What to expect from V-Sky 2">
                        </div>
                        <img src="{{URL::to('/assets')}}/added_images/News/post-2.jpg" alt="What to expect from V-Sky 2" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">VORTEX INFORMATION AND RATES</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-1">Action</span>
                        </span>
                        
                        <div class="nk-news-box-item-text">
                            <p>Hello Sky Warriors!
                                We though you all would like to know some information about the server:
                                
                                Starting Rates: 
                                Level cap: Level 145 (M33).
                                During the week Exp x2 Drop x3.
                                
                                Version: AGE version.
                                
                                **Rates will improve as server evolve.
                            </p>
                        </div>
                        <!--<a href="blog-article.html" class="nk-news-box-item-url">Read More</a>-->
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Oct 9, 2018</div>
                    </div>
                    
                    
                    <div class="nk-news-box-item">
                        <div class="nk-news-box-item-img">
                            <img src="{{URL::to('/assets')}}/added_images/News/post-3-sm.jpg" alt="We found a witch! May we burn her?">
                        </div>
                        <img src="{{URL::to('/assets')}}/added_images/News/post-3.jpg" alt="We found a witch! May we burn her?" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">WHAT TO EXPECT FROM V-SKY 2</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-2">Adventure</span>
                        </span>
                        
                        <div class="nk-news-box-item-text">
                            <p>V-Sky 2 is a massively multiplayer online RPG featuring fast-paced, addictive PVP as well as captivating hack-and-slash PVE. Find yourself thrown into the life of conflict, participating in wars as early as level 10, eventually engaging in greater faction contributions as a higher level warrior in events such as Holy Stone Battle. You will also be able to customize your character with vanity armor pieces and costumes, as well as improving your character’s overall performance with equipment enchanting, mounts, titles, halos, and wings system. For now, V-Sky 2 is starting off at a level cap of m33 (145) with additional levels to come in the future.</p>
                        </div>
                        <!--<a href="blog-article.html" class="nk-news-box-item-url">Read More</a>-->
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Oct 9, 2018</div>
                    </div>
          
                    <div class="nk-news-box-item">
                        <div class="nk-news-box-item-img">
                            <img src="{{URL::to('/assets')}}/added_images/News/post-4-sm.jpg" alt="He made his passenger captain of one">
                        </div>
                        <img src="{{URL::to('/assets')}}/added_images/News/post-4.jpg" alt="He made his passenger captain of one" class="nk-news-box-item-full-img">
                        <h3 class="nk-news-box-item-title">WELCOME TO V-SKY 2</h3>
                        
                        <span class="nk-news-box-item-categories">
                            <span class="bg-main-5">Indie</span>
                        </span>
                        
                        <div class="nk-news-box-item-text">
                            <p>Vortex Gaming is proud to announce the opening of our first game of many, V-Sky 2. It is an old-fashioned MMORPG, taking place in Ancient China during a time of continuous conflicts between 4 ruthless clans. Join the ranks of the original 3 factions: Jinong, Guanyin or Fujin; or turn your back on your brothers iand become a Nangin. Fight for glory and honor in a fast-paced PvP system, or test your strength in a hack-and-slash style PvE environment
                            </p>
                        </div>
                        <!--<a href="blog-article.html" class="nk-news-box-item-url">Read More</a>-->
                        <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Oct 9, 2018</div>
                    </div>
                    
                    
                    <!--<div class="nk-news-box-item">-->
                    <!--    <div class="nk-news-box-item-img">-->
                    <!--        <img src="{{URL::to('/assets')}}/added_images/News/post-6-sm.jpg" alt="At first, for some time, I was not able to answer">-->
                    <!--    </div>-->
                    <!--    <img src="{{URL::to('/assets')}}/added_images/News/post-6.jpg" alt="At first, for some time, I was not able to answer" class="nk-news-box-item-full-img">-->
                    <!--    <h3 class="nk-news-box-item-title">At first, for some time, I was not able to answer</h3>-->
                        
                    <!--    <span class="nk-news-box-item-categories">-->
                    <!--        <span class="bg-main-5">Racing</span>-->
                    <!--    </span>-->
                        
                    <!--    <div class="nk-news-box-item-text">-->
                    <!--        <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>-->
                    <!--    </div>-->
                        <!--<a href="blog-article.html" class="nk-news-box-item-url">Read More</a>-->
                    <!--    <div class="nk-news-box-item-date"><span class="fa fa-calendar"></span> Jul 3, 2018</div>-->
                    <!--</div>-->
                    
                </div>
            </div>
        </div>
        <div class="nk-news-box-each-info">
            <div class="nano">
                <div class="nano-content">
                    There will be inserted info about selected news
                    <div class="nk-news-box-item-image">
                        <img src="{{URL::to('/assets')}}/images/post-1.jpg" alt="">

                    </div>
                    <h3 class="nk-news-box-item-title">Smell magic in the air. Or maybe barbecue</h3>
                    <div class="nk-news-box-item-text">
                        <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
                    </div>
                    <!--<a href="blog-article.html" class="nk-news-box-item-more">Read More</a>-->
                    <div class="nk-news-box-item-date">
                        <span class="fa fa-calendar"></span> Sep 18, 2018
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="nk-gap-2"></div>
    <!-- <div class="nk-blog-grid">
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="nk-blog-post">
                    <a href="blog-article.html" class="nk-post-img">
                        <img src="{{URL::to('/assets')}}/images/post-5-mid.jpg" alt="He made his passenger captain of one">
                        <span class="nk-post-comments-count">13</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-5">Indie</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="blog-article.html">He made his passenger captain of one</a></h2>
                    <div class="nk-post-text">
                        <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                    </div>
                    <div class="nk-gap"></div>
                    <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 23, 2018</div>
                </div>

            </div>
            
            
            <div class="col-md-6 col-lg-3">

                <div class="nk-blog-post">
                    <a href="blog-article.html" class="nk-post-img">
                        <img src="{{URL::to('/assets')}}/images/post-6-mid.jpg" alt="At first, for some time, I was not able to answer">
                        <span class="nk-post-comments-count">0</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-5">Racing</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="blog-article.html">At first, for some time, I was not able to answer</a></h2>
                    <div class="nk-post-text">
                        <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                    </div>
                    <div class="nk-gap"></div>
                    <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                </div>

            </div>
            
            
            <div class="col-md-6 col-lg-3">

                <div class="nk-blog-post">
                    <a href="blog-article.html" class="nk-post-img">
                        <img src="{{URL::to('/assets')}}/images/post-7-mid.jpg" alt="At length one of them called out in a clear">
                        <span class="nk-post-comments-count">0</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-6">MOBA</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="blog-article.html">At length one of them called out in a clear</a></h2>
                    <div class="nk-post-text">
                        <p>TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                    </div>
                    <div class="nk-gap"></div>
                    <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                </div>

            </div>
            
            
            <div class="col-md-6 col-lg-3">

                <div class="nk-blog-post">
                    <a href="blog-article.html" class="nk-post-img">
                        <img src="{{URL::to('/assets')}}/images/post-8-mid.jpg" alt="For good, too though, in consequence">
                        <span class="nk-post-comments-count">0</span>
                        
                        <span class="nk-post-categories">
                                    <span class="bg-main-2">Adventure</span>
                                </span>
                        
                    </a>
                    <div class="nk-gap"></div>
                    <h2 class="nk-post-title h4"><a href="blog-article.html">For good, too though, in consequence</a></h2>
                    <div class="nk-post-text">
                        <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                    </div>
                    <div class="nk-gap"></div>
                    <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                    <div class="nk-post-date float-right"><span class="fa fa-calendar"></span> Jul 3, 2018</div>
                </div>

            </div>
            
        </div>
    </div> -->
    <!-- END: Latest News -->

    <div class="nk-gap-2"></div>
    <div class="row vertical-gap">
        <div class="col-lg-8">

            <!-- START: Latest Posts -->
            <!-- <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Latest</span> Posts</span></h3>
            <div class="nk-gap"></div>
            <div class="nk-blog-grid">
                <div class="row">
                    
                    
                    <div class="col-md-6">

                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="{{URL::to('/assets')}}/images/post-5-mid.jpg" alt="He made his passenger captain of one">
                                <span class="nk-post-comments-count">13</span>
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">He made his passenger captain of one</a></h2>
                            <div class="nk-post-by">
                                <img src="{{URL::to('/assets')}}/images/avatar-3.jpg" alt="Wolfenstein" class="rounded-circle" width="35"> by <a href="https://nkdev.info">Wolfenstein</a> in Jul 23, 2018
                            </div>
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                        </div>

                    </div>
                    
                    
                    <div class="col-md-6">

                        <div class="nk-blog-post">
                            <a href="blog-article.html" class="nk-post-img">
                                <img src="{{URL::to('/assets')}}/images/post-6-mid.jpg" alt="At first, for some time, I was not able to answer">
                                <span class="nk-post-comments-count">0</span>
                            </a>
                            <div class="nk-gap"></div>
                            <h2 class="nk-post-title h4"><a href="blog-article.html">At first, for some time, I was not able to answer</a></h2>
                            <div class="nk-post-by">
                                <img src="{{URL::to('/assets')}}/images/avatar-3.jpg" alt="Wolfenstein" class="rounded-circle" width="35"> by <a href="https://nkdev.info">Wolfenstein</a> in Jul 3, 2018
                            </div>
                            <div class="nk-gap"></div>
                            <div class="nk-post-text">
                                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
                            </div>
                            <div class="nk-gap"></div>
                            <a href="blog-article.html" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Read More</a>
                        </div>

                    </div>
                    
                </div>
            </div> -->
            <!-- END: Latest Posts -->

            <!-- START: Latest Matches -->
            <!-- <div class="nk-gap-2"></div>
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Latest</span> Matches</span></h3>
            <div class="nk-gap"></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="nk-match-score bg-dark-3">
                        Now Playing
                    </div>
                    <div class="nk-gap-2"></div>
                    <div class="nk-widget-match p-0">
                        <div class="nk-widget-match-teams">
                            <div class="nk-widget-match-team-logo">
                                <img src="{{URL::to('/assets')}}/images/team-1.jpg" alt="">
                            </div>
                            <div class="nk-widget-match-vs">VS</div>
                            <div class="nk-widget-match-team-logo">
                                <img src="{{URL::to('/assets')}}/images/team-2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="nk-gap-2"></div>
                    <p>As she said this she looked down at her hands and was surprised to see.</p>
                    <a href="tournaments.html" class="nk-btn nk-btn-rounded nk-btn-color-main-1">Match Details</a>
                </div>
                <div class="col-md-8">
                    <div class="responsive-embed responsive-embed-16x9">
                        <iframe src="https://player.twitch.tv/?channel=eulcs&autoplay=false" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe>
                    </div>
                </div>
            </div>
            <div class="nk-gap"></div>
            <div class="nk-match">
                <div class="nk-match-team-left">
                    <a href="#">
                        <span class="nk-match-team-logo">
                            <img src="{{URL::to('/assets')}}/images/team-1.jpg" alt="">
                        </span>
                        <span class="nk-match-team-name">
                            SK Telecom T1
                        </span>
                    </a>
                </div>
                <div class="nk-match-status">
                    <a href="#">
                        <span class="nk-match-status-vs">VS</span>
                        <span class="nk-match-status-date">Apr 28, 2018 8:00 pm</span>
                        <span class="nk-match-score bg-danger">
                            2 : 17
                        </span>
                    </a>
                </div>
                <div class="nk-match-team-right">
                    <a href="#">
                        <span class="nk-match-team-name">
                            Cloud 9
                        </span>
                        <span class="nk-match-team-logo">
                            <img src="{{URL::to('/assets')}}/images/team-2.jpg" alt="">
                        </span>
                    </a>
                </div>
            </div>

            <div class="nk-match">
                <div class="nk-match-team-left">
                    <a href="#">
                        <span class="nk-match-team-logo">
                            <img src="{{URL::to('/assets')}}/images/team-3.jpg" alt="">
                        </span>
                        <span class="nk-match-team-name">
                            Counted logic gaming
                        </span>
                    </a>
                </div>
                <div class="nk-match-status">
                    <a href="#">
                        <span class="nk-match-status-vs">VS</span>
                        <span class="nk-match-status-date">Apr 15, 2018 9:00 pm</span>
                        <span class="nk-match-score bg-success">
                            28 : 19
                        </span>
                    </a>
                </div>
                <div class="nk-match-team-right">
                    <a href="#">
                        <span class="nk-match-team-name">
                            SK Telecom T1
                        </span>
                        <span class="nk-match-team-logo">
                            <img src="{{URL::to('/assets')}}/images/team-1.jpg" alt="">
                        </span>
                    </a>
                </div>
            </div>

            <div class="nk-match">
                <div class="nk-match-team-left">
                    <a href="#">
                        <span class="nk-match-team-logo">
                            <img src="{{URL::to('/assets')}}/images/team-4.jpg" alt="">
                        </span>
                        <span class="nk-match-team-name">
                            Team SoloMid
                        </span>
                    </a>
                </div>
                <div class="nk-match-status">
                    <a href="#">
                        <span class="nk-match-status-vs">VS</span>
                        <span class="nk-match-status-date">Apr 28, 2018 8:00 pm</span>
                        <span class="nk-match-score bg-dark-1">
                            13 : 13
                        </span>
                    </a>
                </div>
                <div class="nk-match-team-right">
                    <a href="#">
                        <span class="nk-match-team-name">
                            SK Telecom T1
                        </span>
                        <span class="nk-match-team-logo">
                            <img src="{{URL::to('/assets')}}/images/team-1.jpg" alt="">
                        </span>
                    </a>
                </div>
            </div> -->
            <!-- END: Latest Matches -->

            <!-- START: Tabbed News  -->
            <!-- <div class="nk-gap-3"></div>
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Tabbed</span> News</span></h3>
            <div class="nk-gap"></div>
            <div class="nk-tabs">
                
                <ul class="nav nav-tabs nav-tabs-fill" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tabs-1-1" role="tab" data-toggle="tab">Action</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabs-1-2" role="tab" data-toggle="tab">MMO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabs-1-3" role="tab" data-toggle="tab">Strategy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabs-1-4" role="tab" data-toggle="tab">Adventure</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabs-1-5" role="tab" data-toggle="tab">Racing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tabs-1-6" role="tab" data-toggle="tab">Indie</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="tabs-1-1">
                        <div class="nk-gap"></div>

                        

<div class="nk-blog-post nk-blog-post-border-bottom">
    <a href="blog-article.html" class="nk-post-img">
        <img src="{{URL::to('/assets')}}/images/post-2-fw.jpg" alt="Grab your sword and fight the Horde">
        
        <span class="nk-post-categories">
            <span class="bg-main-1">Action</span>
        </span>
        
    </a>
    <div class="nk-gap-1"></div>
    <h2 class="nk-post-title h4"><a href="blog-article.html">Grab your sword and fight the Horde</a></h2>
    <div class="nk-post-date mt-10 mb-10">
        <span class="fa fa-calendar"></span> Sep 5, 2018
        <span class="fa fa-comments"></span> <a href="#">7 comments</a>
    </div>
    <div class="nk-post-text">
        <p>For good, too; though, in consequence of my previous emotions, I was still occasionally seized with a stormy sob . After we had jogged on for some little time, I asked the carrier...</p>
    </div>
</div>



<div class="nk-blog-post nk-blog-post-border-bottom">
    <div class="row vertical-gap">
        <div class="col-lg-3 col-md-5">
            <a href="blog-article.html" class="nk-post-img">
                <img src="{{URL::to('/assets')}}/images/post-7-mid-square.jpg" alt="At length one of them called out in a clear">
                
                <span class="nk-post-categories">
                    <span class="bg-main-1">Action</span>
                </span>
                
            </a>
        </div>
        <div class="col-lg-9 col-md-7">
            <h2 class="nk-post-title h4"><a href="blog-article.html">At length one of them called out in a clear</a></h2>
            <div class="nk-post-date mt-10 mb-10">
                <span class="fa fa-calendar"></span> Jul 3, 2018
                <span class="fa fa-comments"></span> <a href="#">0 comments</a>
            </div>
            <div class="nk-post-text">
                <p>TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
            </div>
        </div>
    </div>
</div>

<div class="nk-blog-post nk-blog-post-border-bottom">
    <div class="row vertical-gap">
        <div class="col-lg-3 col-md-5">
            <a href="blog-article.html" class="nk-post-img">
                <img src="{{URL::to('/assets')}}/images/post-9-mid-square.jpg" alt="He made his passenger captain of one">
                
                <span class="nk-post-categories">
                    <span class="bg-main-1">Action</span>
                </span>
                
            </a>
        </div>
        <div class="col-lg-9 col-md-7">
            <h2 class="nk-post-title h4"><a href="blog-article.html">He made his passenger captain of one</a></h2>
            <div class="nk-post-date mt-10 mb-10">
                <span class="fa fa-calendar"></span> Jul 3, 2018
                <span class="fa fa-comments"></span> <a href="#">0 comments</a>
            </div>
            <div class="nk-post-text">
                <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
            </div>
        </div>
    </div>
</div>




                        <div class="nk-gap"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-2">
                        <div class="nk-gap"></div>

                        

<div class="nk-blog-post nk-blog-post-border-bottom">
    <a href="blog-article.html" class="nk-post-img">
        <img src="{{URL::to('/assets')}}/images/post-1-fw.jpg" alt="Smell magic in the air. Or maybe barbecue">
        
        <span class="nk-post-categories">
            <span class="bg-main-4">MMO</span>
        </span>
        
    </a>
    <div class="nk-gap-1"></div>
    <h2 class="nk-post-title h4"><a href="blog-article.html">Smell magic in the air. Or maybe barbecue</a></h2>
    <div class="nk-post-date mt-10 mb-10">
        <span class="fa fa-calendar"></span> Sep 18, 2018
        <span class="fa fa-comments"></span> <a href="#">4 comments</a>
    </div>
    <div class="nk-post-text">
        <p>With what mingled joy and sorrow do I take up the pen to write to my dearest friend! Oh, what a change between to-day and yesterday! Now I am friendless and alone...</p>
    </div>
</div>



<div class="nk-blog-post nk-blog-post-border-bottom">
    <div class="row vertical-gap">
        <div class="col-lg-3 col-md-5">
            <a href="blog-article.html" class="nk-post-img">
                <img src="{{URL::to('/assets')}}/images/post-5-mid-square.jpg" alt="He made his passenger captain of one">
                
                <span class="nk-post-categories">
                    <span class="bg-main-4">MMO</span>
                </span>
                
            </a>
        </div>
        <div class="col-lg-9 col-md-7">
            <h2 class="nk-post-title h4"><a href="blog-article.html">He made his passenger captain of one</a></h2>
            <div class="nk-post-date mt-10 mb-10">
                <span class="fa fa-calendar"></span> Jul 23, 2018
                <span class="fa fa-comments"></span> <a href="#">13 comments</a>
            </div>
            <div class="nk-post-text">
                <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
            </div>
        </div>
    </div>
</div>



    
                        <div class="nk-gap"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-3">
                        <div class="nk-gap"></div>

                        

<div class="nk-blog-post nk-blog-post-border-bottom">
    <a href="blog-article.html" class="nk-post-img">
        <img src="{{URL::to('/assets')}}/images/post-3-fw.jpg" alt="We found a witch! May we burn her?">
        
        <span class="nk-post-categories">
            <span class="bg-main-3">Strategy</span>
        </span>
        
    </a>
    <div class="nk-gap-1"></div>
    <h2 class="nk-post-title h4"><a href="blog-article.html">We found a witch! May we burn her?</a></h2>
    <div class="nk-post-date mt-10 mb-10">
        <span class="fa fa-calendar"></span> Aug 27, 2018
        <span class="fa fa-comments"></span> <a href="#">7 comments</a>
    </div>
    <div class="nk-post-text">
        <p>And she went on planning to herself how she would manage it. `They must go by the carrier,' she thought; `and how funny it'll seem, sending presents to one's own feet!...</p>
    </div>
</div>



<div class="nk-blog-post nk-blog-post-border-bottom">
    <div class="row vertical-gap">
        <div class="col-lg-3 col-md-5">
            <a href="blog-article.html" class="nk-post-img">
                <img src="{{URL::to('/assets')}}/images/post-4-mid-square.jpg" alt="For good, too though, in consequence">
                
                <span class="nk-post-categories">
                    <span class="bg-main-3">Strategy</span>
                </span>
                
            </a>
        </div>
        <div class="col-lg-9 col-md-7">
            <h2 class="nk-post-title h4"><a href="blog-article.html">For good, too though, in consequence</a></h2>
            <div class="nk-post-date mt-10 mb-10">
                <span class="fa fa-calendar"></span> Aug 14, 2018
                <span class="fa fa-comments"></span> <a href="#">23 comments</a>
            </div>
            <div class="nk-post-text">
                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
            </div>
        </div>
    </div>
</div>




                        <div class="nk-gap"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-4">
                        <div class="nk-gap"></div>

                        

<div class="nk-blog-post nk-blog-post-border-bottom">
    <a href="blog-article.html" class="nk-post-img">
        <img src="{{URL::to('/assets')}}/images/post-6-fw.jpg" alt="At first, for some time, I was not able to answer">
        
        <span class="nk-post-categories">
            <span class="bg-main-2">Adventure</span>
        </span>
        
    </a>
    <div class="nk-gap-1"></div>
    <h2 class="nk-post-title h4"><a href="blog-article.html">At first, for some time, I was not able to answer</a></h2>
    <div class="nk-post-date mt-10 mb-10">
        <span class="fa fa-calendar"></span> Jul 3, 2018
        <span class="fa fa-comments"></span> <a href="#">0 comments</a>
    </div>
    <div class="nk-post-text">
        <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
    </div>
</div>




                        <div class="nk-gap"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-5">
                        <div class="nk-gap"></div>

                        

<div class="nk-blog-post nk-blog-post-border-bottom">
    <a href="blog-article.html" class="nk-post-img">
        <img src="{{URL::to('/assets')}}/images/post-7-fw.jpg" alt="At length one of them called out in a clear">
        
        <span class="nk-post-categories">
            <span class="bg-main-5">Racing</span>
        </span>
        
    </a>
    <div class="nk-gap-1"></div>
    <h2 class="nk-post-title h4"><a href="blog-article.html">At length one of them called out in a clear</a></h2>
    <div class="nk-post-date mt-10 mb-10">
        <span class="fa fa-calendar"></span> Jul 3, 2018
        <span class="fa fa-comments"></span> <a href="#">0 comments</a>
    </div>
    <div class="nk-post-text">
        <p>TJust then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
    </div>
</div>



<div class="nk-blog-post nk-blog-post-border-bottom">
    <div class="row vertical-gap">
        <div class="col-lg-3 col-md-5">
            <a href="blog-article.html" class="nk-post-img">
                <img src="{{URL::to('/assets')}}/images/post-3-mid-square.jpg" alt="We found a witch! May we burn her?">
                
                <span class="nk-post-categories">
                    <span class="bg-main-5">Racing</span>
                </span>
                
            </a>
        </div>
        <div class="col-lg-9 col-md-7">
            <h2 class="nk-post-title h4"><a href="blog-article.html">We found a witch! May we burn her?</a></h2>
            <div class="nk-post-date mt-10 mb-10">
                <span class="fa fa-calendar"></span> Aug 27, 2018
                <span class="fa fa-comments"></span> <a href="#">7 comments</a>
            </div>
            <div class="nk-post-text">
                <p>And she went on planning to herself how she would manage it. `They must go by the carrier,' she thought; `and how funny it'll seem, sending presents to one's own feet!...</p>
            </div>
        </div>
    </div>
</div>

<div class="nk-blog-post nk-blog-post-border-bottom">
    <div class="row vertical-gap">
        <div class="col-lg-3 col-md-5">
            <a href="blog-article.html" class="nk-post-img">
                <img src="{{URL::to('/assets')}}/images/post-4-mid-square.jpg" alt="For good, too though, in consequence">
                
                <span class="nk-post-categories">
                    <span class="bg-main-5">Racing</span>
                </span>
                
            </a>
        </div>
        <div class="col-lg-9 col-md-7">
            <h2 class="nk-post-title h4"><a href="blog-article.html">For good, too though, in consequence</a></h2>
            <div class="nk-post-date mt-10 mb-10">
                <span class="fa fa-calendar"></span> Aug 14, 2018
                <span class="fa fa-comments"></span> <a href="#">23 comments</a>
            </div>
            <div class="nk-post-text">
                <p>This little wandering journey, without settled place of abode, had been so unpleasant to me, that my own house, as I called it to myself, was a perfect settlement to me compared to that...</p>
            </div>
        </div>
    </div>
</div>




                        <div class="nk-gap"></div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tabs-1-6">
                        <div class="nk-gap"></div>
        
                        

<div class="nk-blog-post nk-blog-post-border-bottom">
    <a href="blog-article.html" class="nk-post-img">
        <img src="{{URL::to('/assets')}}/images/post-5-fw.jpg" alt="He made his passenger captain of one">
        
        <span class="nk-post-categories">
            <span class="bg-main-2">Indie</span>
        </span>
        
    </a>
    <div class="nk-gap-1"></div>
    <h2 class="nk-post-title h4"><a href="blog-article.html">He made his passenger captain of one</a></h2>
    <div class="nk-post-date mt-10 mb-10">
        <span class="fa fa-calendar"></span> Jul 23, 2018
        <span class="fa fa-comments"></span> <a href="#">13 comments</a>
    </div>
    <div class="nk-post-text">
        <p>Just then her head struck against the roof of the hall: in fact she was now more than nine feet high, and she at once took up the little golden key and hurried off to the garden door...</p>
    </div>
</div>



                        <div class="nk-gap"></div>
                    </div>
                </div>
            </div> -->
            <!-- END: Tabbed News -->


            <!-- START: Latest Pictures -->
            <!-- <div class="nk-gap"></div>
            <h2 class="nk-decorated-h-2 h3"><span><span class="text-main-1">Latest</span> Pictures</span></h2>
            <div class="nk-gap"></div>
            <div class="nk-popup-gallery">
                <div class="row vertical-gap">
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="{{URL::to('/assets')}}/images/gallery-1.jpg" class="nk-gallery-item" data-size="1016x572">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="{{URL::to('/assets')}}/images/gallery-1-thumb.jpg" alt="">
                            </a>
                            <div class="nk-gallery-item-description">
                                <h4>Called Let</h4>
                                Divided thing, land it evening earth winged whose great after. Were grass night. To Air itself saw bring fly fowl. Fly years behold spirit day greater of wherein winged and form. Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="{{URL::to('/assets')}}/images/gallery-2.jpg" class="nk-gallery-item" data-size="1188x594">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="{{URL::to('/assets')}}/images/gallery-2-thumb.jpg" alt="">
                            </a>
                            <div class="nk-gallery-item-description">
                                Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="{{URL::to('/assets')}}/images/gallery-3.jpg" class="nk-gallery-item" data-size="625x350">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="{{URL::to('/assets')}}/images/gallery-3-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="{{URL::to('/assets')}}/images/gallery-4.jpg" class="nk-gallery-item" data-size="873x567">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="{{URL::to('/assets')}}/images/gallery-4-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="{{URL::to('/assets')}}/images/gallery-5.jpg" class="nk-gallery-item" data-size="471x269">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="{{URL::to('/assets')}}/images/gallery-5-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="nk-gallery-item-box">
                            <a href="{{URL::to('/assets')}}/images/gallery-6.jpg" class="nk-gallery-item" data-size="472x438">
                                <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                                <img src="{{URL::to('/assets')}}/images/gallery-6-thumb.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>



            <div class="nk-gap-3"></div>
            <h3 class="nk-decorated-h-2"><span><span class="text-main-1">Best</span> Selling</span></h3>
            <div class="nk-gap"></div>
            <div class="row vertical-gap">
                
                
                <div class="col-md-6">
                    <div class="nk-product-cat">
                        <a class="nk-product-image" href="store-product.html">
                            <img src="{{URL::to('/assets')}}/images/product-11-xs.jpg" alt="She gave my mother">
                        </a>
                        <div class="nk-product-cont">
                            <h3 class="nk-product-title h5"><a href="store-product.html">She gave my mother</a></h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-rating" data-rating="3"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 14.00</div>
                            <div class="nk-gap-1"></div>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-6">
                    <div class="nk-product-cat">
                        <a class="nk-product-image" href="store-product.html">
                            <img src="{{URL::to('/assets')}}/images/product-12-xs.jpg" alt="A hundred thousand">
                        </a>
                        <div class="nk-product-cont">
                            <h3 class="nk-product-title h5"><a href="store-product.html">A hundred thousand</a></h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-rating" data-rating="4.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 20.00</div>
                            <div class="nk-gap-1"></div>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-6">
                    <div class="nk-product-cat">
                        <a class="nk-product-image" href="store-product.html">
                            <img src="{{URL::to('/assets')}}/images/product-13-xs.jpg" alt="So saying he unbuckled">
                        </a>
                        <div class="nk-product-cont">
                            <h3 class="nk-product-title h5"><a href="store-product.html">So saying he unbuckled</a></h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 23.00</div>
                            <div class="nk-gap-1"></div>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-6">
                    <div class="nk-product-cat">
                        <a class="nk-product-image" href="store-product.html">
                            <img src="{{URL::to('/assets')}}/images/product-14-xs.jpg" alt="However, I have reason">
                        </a>
                        <div class="nk-product-cont">
                            <h3 class="nk-product-title h5"><a href="store-product.html">However, I have reason</a></h3>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-rating" data-rating="1.5"> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                            <div class="nk-gap-1"></div>
                            <div class="nk-product-price">€ 32.00</div>
                            <div class="nk-gap-1"></div>
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-dark-3 nk-btn-hover-color-main-1">Add to Cart</a>
                        </div>
                    </div>
                </div>
                
            </div>

        </div> -->
        <div class="col-lg-4">

            <!-- <aside class="nk-sidebar nk-sidebar-right nk-sidebar-sticky">
                <div class="nk-widget">
    <div class="nk-widget-content">
        <form action="#" class="nk-form nk-form-style-1" novalidate="novalidate">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Type something...">
                <button class="nk-btn nk-btn-color-main-1"><span class="ion-search"></span></button>
            </div>
        </form>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">We</span> Are Social</span></h4>
    <div class="nk-widget-content">

        <ul class="nk-social-links-3 nk-social-links-cols-4">
            <li><a class="nk-social-twitch" href="#"><span class="fab fa-twitch"></span></a></li>
            <li><a class="nk-social-instagram" href="#"><span class="fab fa-instagram"></span></a></li>
            <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
            <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
            <li><a class="nk-social-youtube" href="#"><span class="fab fa-youtube"></span></a></li>
            <li><a class="nk-social-twitter" href="https://twitter.com/nkdevv" target="_blank"><span class="fab fa-twitter"></span></a></li>
            <li><a class="nk-social-pinterest" href="#"><span class="fab fa-pinterest-p"></span></a></li>
            <li><a class="nk-social-rss" href="#"><span class="fa fa-rss"></span></a></li>


        </ul>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Latest</span> Video</span></h4>
    <div class="nk-widget-content">
        <div class="nk-plain-video" data-video="https://www.youtube.com/watch?v=vXy8UBazlO8"></div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Top 3</span> Recent</span></h4>
    <div class="nk-widget-content">
        
            <div class="nk-widget-post">
                <a href="blog-article.html" class="nk-post-image">
                    <img src="{{URL::to('/assets')}}/images/post-1-sm.jpg" alt="">
                </a>
                <h3 class="nk-post-title"><a href="blog-article.html">Smell magic in the air. Or maybe barbecue</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> Sep 18, 2018</div>
            </div>
        
            <div class="nk-widget-post">
                <a href="blog-article.html" class="nk-post-image">
                    <img src="{{URL::to('/assets')}}/images/post-2-sm.jpg" alt="">
                </a>
                <h3 class="nk-post-title"><a href="blog-article.html">Grab your sword and fight the Horde</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> Sep 5, 2018</div>
            </div>
        
            <div class="nk-widget-post">
                <a href="blog-article.html" class="nk-post-image">
                    <img src="{{URL::to('/assets')}}/images/post-3-sm.jpg" alt="">
                </a>
                <h3 class="nk-post-title"><a href="blog-article.html">We found a witch! May we burn her?</a></h3>
                <div class="nk-post-date"><span class="fa fa-calendar"></span> Aug 27, 2018</div>
            </div>
        
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Latest</span> Screenshots</span></h4>
    <div class="nk-widget-content">
        <div class="nk-popup-gallery">
            <div class="row sm-gap vertical-gap">
                <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                        <a href="{{URL::to('/assets')}}/images/gallery-1.jpg" class="nk-gallery-item" data-size="1016x572">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="{{URL::to('/assets')}}/images/gallery-1-thumb.jpg" alt="">
                        </a>
                        <div class="nk-gallery-item-description">
                            <h4>Called Let</h4>
                            Divided thing, land it evening earth winged whose great after. Were grass night. To Air itself saw bring fly fowl. Fly years behold spirit day greater of wherein winged and form. Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                        <a href="{{URL::to('/assets')}}/images/gallery-2.jpg" class="nk-gallery-item" data-size="1188x594">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="{{URL::to('/assets')}}/images/gallery-2-thumb.jpg" alt="">
                        </a>
                        <div class="nk-gallery-item-description">
                            Seed open don't thing midst created dry every greater divided of, be man is. Second Bring stars fourth gathering he hath face morning fill. Living so second darkness. Moveth were male. May creepeth. Be tree fourth.
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                        <a href="{{URL::to('/assets')}}/images/gallery-3.jpg" class="nk-gallery-item" data-size="625x350">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="{{URL::to('/assets')}}/images/gallery-3-thumb.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                        <a href="{{URL::to('/assets')}}/images/gallery-4.jpg" class="nk-gallery-item" data-size="873x567">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="{{URL::to('/assets')}}/images/gallery-4-thumb.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                        <a href="{{URL::to('/assets')}}/images/gallery-5.jpg" class="nk-gallery-item" data-size="471x269">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="{{URL::to('/assets')}}/images/gallery-5-thumb.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="nk-gallery-item-box">
                        <a href="{{URL::to('/assets')}}/images/gallery-6.jpg" class="nk-gallery-item" data-size="472x438">
                            <div class="nk-gallery-item-overlay"><span class="ion-eye"></span></div>
                            <img src="{{URL::to('/assets')}}/images/gallery-6-thumb.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Next</span> Matches</span></h4>
    <div class="nk-widget-content">
        <div class="nk-widget-match">
            <a href="#">
                <span class="nk-widget-match-left">
                    <span class="nk-widget-match-teams">
                        <span class="nk-widget-match-team-logo">
                            <img src="{{URL::to('/assets')}}/images/team-1.jpg" alt="">
                        </span>
                        <span class="nk-widget-match-vs">VS</span>
                        <span class="nk-widget-match-team-logo">
                            <img src="{{URL::to('/assets')}}/images/team-2.jpg" alt="">
                        </span>
                    </span>
                    <span class="nk-widget-match-date">CS:GO - Apr 28, 2018 8:00 pm</span>
                </span>
                <span class="nk-widget-match-right">
                    <span class="nk-match-score">
                        Upcoming
                    </span>
                </span>
            </a>
        </div>

        <div class="nk-widget-match">
            <a href="#">
                <span class="nk-widget-match-left">
                    <span class="nk-widget-match-teams">
                        <span class="nk-widget-match-team-logo">
                            <img src="{{URL::to('/assets')}}/images/team-3.jpg" alt="">
                        </span>
                        <span class="nk-widget-match-vs">VS</span>
                        <span class="nk-widget-match-team-logo">
                            <img src="{{URL::to('/assets')}}/images/team-2.jpg" alt="">
                        </span>
                    </span>
                    <span class="nk-widget-match-date">LoL - Apr 24, 2018 7:20 pm</span>
                </span>
                <span class="nk-widget-match-right">
                    <span class="nk-match-score">
                        Upcoming
                    </span>
                </span>
            </a>
        </div>

        <div class="nk-widget-match">
            <a href="#">
                <span class="nk-widget-match-left">
                    <span class="nk-widget-match-teams">
                        <span class="nk-widget-match-team-logo">
                            <img src="{{URL::to('/assets')}}/images/team-1.jpg" alt="">
                        </span>
                        <span class="nk-widget-match-vs">VS</span>
                        <span class="nk-widget-match-team-logo">
                            <img src="{{URL::to('/assets')}}/images/team-4.jpg" alt="">
                        </span>
                    </span>
                    <span class="nk-widget-match-date">Dota 2 - Apr 12, 2018 6:40 pm</span>
                </span>
                <span class="nk-widget-match-right">
                    <span class="nk-match-score bg-dark-1">
                        0 : 0
                    </span>
                </span>
            </a>
        </div>
    </div>
</div>
<div class="nk-widget nk-widget-highlighted">
    <h4 class="nk-widget-title"><span><span class="text-main-1">Most</span> Popular</span></h4>
    <div class="nk-widget-content">
        
            <div class="nk-widget-post">
                <a href="store-product.html" class="nk-post-image">
                    <img src="{{URL::to('/assets')}}/images/product-1-xs.jpg" alt="So saying he unbuckled">
                </a>
                <h3 class="nk-post-title"><a href="store-product.html">So saying he unbuckled</a></h3>
                <div class="nk-product-rating" data-rating="4"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="far fa-star"></i></div>
                <div class="nk-product-price">€ 23.00</div>
            </div>
        
            <div class="nk-widget-post">
                <a href="store-product.html" class="nk-post-image">
                    <img src="{{URL::to('/assets')}}/images/product-2-xs.jpg" alt="However, I have reason">
                </a>
                <h3 class="nk-post-title"><a href="store-product.html">However, I have reason</a></h3>
                <div class="nk-product-rating" data-rating="2.5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fas fa-star-half"></i> <i class="far fa-star"></i> <i class="far fa-star"></i></div>
                <div class="nk-product-price">€ 32.00</div>
            </div>
        
            <div class="nk-widget-post">
                <a href="store-product.html" class="nk-post-image">
                    <img src="{{URL::to('/assets')}}/images/product-3-xs.jpg" alt="It was some time before">
                </a>
                <h3 class="nk-post-title"><a href="store-product.html">It was some time before</a></h3>
                <div class="nk-product-rating" data-rating="5"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                <div class="nk-product-price">€ 14.00</div>
            </div>
        
    </div>
</div>

            </aside> -->
            <!-- END: Sidebar -->
        </div>
    </div>
</div>

<div class="nk-gap-4"></div>


        
           

        
    </div>

    

    
        <!-- START: Page Background -->

    <img class="nk-page-background-top" src="{{URL::to('/assets')}}/images/bg-top.png" alt="">
    <img class="nk-page-background-bottom" src="{{URL::to('/assets')}}/images/bg-bottom.png" alt="">

<!-- END: Page Background -->

    

    
        <!-- START: Search Modal -->
<div class="nk-modal modal fade" id="modalSearch" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0">Search</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form nk-form-style-1">
                    <input type="text" value="" name="search" class="form-control" placeholder="Type something and press Enter" autofocus>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Search Modal -->


    

<!-- <div class="nk-modal modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-android-close"></span>
                </button>

                <h4 class="mb-0"><span class="text-main-1">Sign</span> In</h4>

                <div class="nk-gap-1"></div>
                <form action="#" class="nk-form text-white">
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            Use email and password:

                            <div class="nk-gap"></div>
                            <input type="email" value="" name="email" class=" form-control" placeholder="Email">

                            <div class="nk-gap"></div>
                            <input type="password" value="" name="password" class="required form-control" placeholder="Password">
                        </div>
                        <div class="col-md-6">
                            Or social account:

                            <div class="nk-gap"></div>

                            <ul class="nk-social-links-2">
                                <li><a class="nk-social-facebook" href="#"><span class="fab fa-facebook"></span></a></li>
                                <li><a class="nk-social-google-plus" href="#"><span class="fab fa-google-plus"></span></a></li>
                                <li><a class="nk-social-twitter" href="#"><span class="fab fa-twitter"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="nk-gap-1"></div>
                    <div class="row vertical-gap">
                        <div class="col-md-6">
                            <a href="#" class="nk-btn nk-btn-rounded nk-btn-color-white nk-btn-block">Sign In</a>
                        </div>
                        <div class="col-md-6">
                            <div class="mnt-5">
                                <small><a href="#">Forgot your password?</a></small>
                            </div>
                            <div class="mnt-5">
                                <small><a href="#">Not a member? Sign up</a></small>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->
<!-- END: Login Modal -->

    
@endsection

@push('footer-script')
<script>
    $(document).ready(function(){
        $('#btn_close1').click(function(){

             $( "#contribution_points_table" ).hide( "fast", function() {
              });

        });
        
        $('#btn_close2').click(function(){
             $( "#best_player_table" ).hide( "fast", function() {
          });
        });
    });
</script>
@endpush