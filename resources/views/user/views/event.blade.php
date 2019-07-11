<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.includes.style')
</head>

<body>
    @include('user.includes.header')

    <section class="page-banner" style="background-image:url({{asset('public/user/images/background/small-banner.jpg')}});">
        <div class="overlay">
            <div class="auto-container">
                <h1>Events</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Events</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <?php $events=DB::table('evn_event_master')->get(); ?>

    <div class="section container" style="margin-top:70px; margin-bottom:60px;">
        <h2 class="sec-title h2"> Our Events</h2>
        @foreach ($events as $event)
        @if($event->active == 1)
        <div class="row card-event-padding">
            <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInUp card-event" data-wow-delay="200ms" data-wow-duration="1000ms">
                <div class="col-lg-4 col-md-4 col-sm-12 image-box-custom">
                    @if($event->imagename)
                    <img src="{{asset( 'public/images/'. $event->imagename)}}" style="width:300px;height:250px;text-align:center;" />
                    @else
                    <h3 style="padding-top:40%;">Image Not Available</h3>
                    @endif
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 card-padding">
                    <h3 class="sec-title h2">{{($event->eventname)}}</h3>

                    <p>{{ str_limit($event->description, $limit = 
                        150, $end = '...') }}</p>

                    <label>Start Date:</label>
                    <span>{{($event->startdate)}}</span>
                    <br>

                    <label>End Date:</label>
                    <span>{{($event->enddate)}}</span>


                    <p><label>Venue:</label> {{($event->venue)}}</p>

                    <a href="{{asset('program')}}" type="button" class="btn btn-primary">Know More</a>

                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
    @include('user.includes.footer')

    @include('user.includes.script')

</body>

</html>