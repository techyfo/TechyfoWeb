<section id="team" class="section">
    <div class="container">
        <div class="title-block mx-auto">
            <div class="section_title mb-4 text-center">
                <p class="section_subtitle mx-auto">Our expert team</p>
                <h2>Meet The Team</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="single-team text-center mt-4 wow fadeIn" data-wow-duration=".1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="team-image">
                        @if(getSetting('ceo_image'))
                            <img src="{{asset('uploads/'.getSetting('ceo_image'))}}" alt="{{getSetting('ceo_name')}}">
                        @else
                            <img src="{{asset('website')}}/images/team.png" alt="{{getSetting('ceo_name')}}">
                        @endif
                        <div class="social">
                            <ul>
                                <li><a href="{{getSetting('ceo_facebook')}}"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="{{getSetting('ceo_twitter')}}"><i class="lni lni-twitter-filled"></i></a></li>
                                <li><a href="{{getSetting('ceo_instagram')}}"><i class="lni lni-instagram-filled"></i></a></li>
                                <li><a href="{{getSetting('ceo_linkedin')}}"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h5 class="holder-name"><a href="#">{{getSetting('ceo_name')}}</a></h5>
                        <p class="text">{{getSetting('ceo_title')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="single-team text-center mt-4 wow fadeIn" data-wow-duration=".1s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="team-image">
                        @if(getSetting('bda_image'))
                            <img src="{{asset('uploads/'.getSetting('bda_image'))}}" alt="{{getSetting('bda_name')}}">
                        @else
                            <img src="{{asset('website')}}/images/team.png" alt="{{getSetting('bda_name')}}">
                        @endif
                        <div class="social">
                            <ul>
                                <li><a href="{{getSetting('bda_facebook')}}"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="{{getSetting('bda_twitter')}}"><i class="lni lni-twitter-filled"></i></a></li>
                                <li><a href="{{getSetting('bda_instagram')}}"><i class="lni lni-instagram-filled"></i></a></li>
                                <li><a href="{{getSetting('bda_linkedin')}}"><i class="lni lni-linkedin-original"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-content">
                        <h5 class="holder-name"><a href="#">{{getSetting('bda_name')}}</a></h5>
                        <p class="text">{{getSetting('bda_title')}}</p>
                    </div>
                </div>
            </div>

        </div>
        <div class="row justify-content-center">
            @foreach(getTeamMembers() as $team)
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="single-team text-center mt-4 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
                        <div class="team-image">
                            @if($team->image)
                            <img src="{{asset('uploads/'.$team->image)}}" alt="{{$team->name}}">
                            @else
                                <img src="{{asset('website')}}/images/team.png" alt="{{$team->name}}">
                            @endif
                            <div class="social">
                                <ul>
                                    @if($team->facebook)
                                        <li><a href="{{$team->facebook}}"><i class="lni lni-facebook-filled"></i></a></li>
                                    @endif
                                    @if($team->twitter)
                                        <li><a href="{{$team->twitter}}"><i class="lni lni-twitter-filled"></i></a></li>
                                    @endif
                                    @if($team->instagram)
                                        <li><a href="{{$team->instagram}}"><i class="lni lni-instagram-filled"></i></a></li>
                                    @endif
                                    @if($team->linkedin)
                                        <li><a href="{{$team->linkedin}}"><i class="lni lni-linkedin-original"></i></a></li>
                                    @endif

                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h5 class="holder-name"><a href="#">{!! $team->name !!}</a></h5>
                            <p class="text">{!! $team->title !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
