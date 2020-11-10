<div class="memberImage bgImage jumbotron jumbotron-fluid d-flex align-items-center" style="background-image: url({{ asset('statics/bg.jpg') }});" id="member">
    <div class="transImage"></div>
    <div class="memberSection container-fluid text-center">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center">
                <h1 class="Title text-white">
                    Band Members
                </h1>
                <div class="vLine" style="background-color: white;"></div>
            </div>
        </div>
        <div id="f3members" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
@foreach ($members as $member)
                <li data-target="#f3members" data-slide-to="{{ $member->id - 1}}"{{ $member->id == '1' ? ' class=active' : '' }}></li>
@endforeach
            </ol>
            <div class="carousel-inner">
@foreach ($members as $member)
                <div class="carousel-item{{ $member->id == '1' ? ' active' : '' }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="d-block w-100" src="{{ asset('statics/members/' . $member->image . '.png') }}" alt="{{ $member->name }}">
                                <div class="carousel-caption mt-3 shadowText">
                                    <h1>{{ $member->name }}</h1>
                                    @isset($member->nickname)
                                        <h3>({{ $member->nickname }})</h3>
                                    @endisset
                                    <p>{{ $member->designation }}</p>
                                </div>
                            </div>
                            <div class="col-md-7 text-white">
                                <div class="jumbotron d-flex align-items-center justify-content-center" style="background-color:transparent !important; height : 100%;">
                                    <div class="lead">
                                        {!! $member->bio !!}
                                        <div class="container-fluid">
                                            <div class="row justify-content-center">
                                                <div class="col-md-12 memberfoot">
                                        @isset($member->facebook)
                                            <a href="{{ $member->facebook }}" class="fa fa-facebook"></a>
                                        @endisset
                                        @isset($member->youtube)
                                            <a href="{{ $member->youtube }}" class="fa fa-youtube"></a>
                                        @endisset
                                        @isset($member->instagram)
                                            <a href="{{ $member->instagram }}" class="fa fa-instagram"></a>
                                        @endisset
                                        @isset($member->email)
                                            <a href="mailto:{{ $member->email }}" class="fa fa-envelope"></a>
                                        @endisset
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endforeach
            </div>
        </div>
            <a class="carousel-control-prev" href="#f3members" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#f3members" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
</div>
