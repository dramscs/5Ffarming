<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.includes.style')
</head>

<body>

    <!--header Starts-->
    @include('user.includes.header')
    <!-- Page Banner	-->
    <section class="page-banner" style="background-image:url({{asset('public/user/images/background/small-banner.jpg')}});">
        <div class="overlay">
            <div class="auto-container">
                <h1>Speakers</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <?php $speakers=DB::table('cmn_speakers')->get(); ?>
    <section class="team-section">
        <div class="auto-container">

            <div class="sec-title customized wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                <h2>Meet Our Speakers</h2>
            </div>

            <div class="row clearfix">
                @foreach ($speakers as $speaker)
                @if($speaker->active == 1)
                <article class="col-lg-3 col-md-4 col-sm-6 col-xs-12 team-member wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner">
                        <div class="card card-inner">
                            @if($speaker->avatar)
                            <img src="{{asset( 'public/images/'. $speaker->avatar ) }}" style="width:300px;height:250px;text-align:center;" />
                            @else
                            Image Not Found
                            @endif
                            <div class="designation-title"><br>
                                <h3>{{($speaker->name)}}</h3>
                                <h3 class="title">{{($speaker->designation)}}</h3>
                            </div>
                            <div style="padding: 35px 0px 15px 0px;">
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </article>
                @endif
                @endforeach
            </div>

        </div>
    </section>
    @include('user.includes.footer')

    @include('user.includes.script')
</body>

</html>