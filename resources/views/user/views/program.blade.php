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
                <h1>Programs</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{asset('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Programs</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="schedule-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="sec-title wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <div class="row clearfix">
                            <div class="col-lg-6 pull-left">
                                <h2>All Programs</h2>
                            </div>
                        </div>
                    </div>
                    <div class="sec-text wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                        <p>The Program is organized for Practicing Plant breeders, Industry leaders, Crop Science Researchers, Academic faculty and leaders, Farmers/Agriculturists, Opinion leaders and Policy experts, Government officials/Administrators, Marketing & Extension professionals and Students.</p>
                    </div>
                </div>
            </div>
            <div class="schedule-box clearfix wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                
                <ul class="tab-buttons clearfix">
                    @foreach($programs as $program)
                        <li class="tab-btn" data-id="#{{$program->id}}" onclick="getProgramDetail({{$program->id}});"><span class="day">Day {{$program->day }}</span><span class="date">{{$program->program_date}}</span><span class="curve"></span></li>
                    @endforeach
                </ul>
                <div class="tabs-box" id="ProgramDetails"></div>
                
            </div>
        </div>
    </section>

    @include('user.includes.footer')

    @include('user.includes.script')
</body>

</html>

<script type='text/javascript'>
    function getProgramDetail(ProgramID) {
        var ProgramDetails = '<div class="tab current" id="ProgramID">';
        $.ajax({
            url: 'getProgramDetails/' + ProgramID,
            type: 'get',
            dataType: 'json',
            success: function(result) {
                
                $.each(result, function(i,d){                                        
                    
                    ProgramDetails +=   '<div class="hour-box active-box">'+
                                        '<div class="hour">'+d.starttime+'</div>'+
                                        '<div class="img-circle circle"><span></span></div>'+
                                        '<div class="toggle-btn" onclick="onCollapsed('+d.id+');"><h3 class="new-section-gap">'+d.title+'</h3><br></div>'+
                                        '<div class="content-box" id="'+d.id+'"><div class="content">'+
                                        '<p>'+d.description+'</p></div><br>'+
                                        '<div class="row professional clearfix"><div class="row professional clearfix" id="ProgramSpeaker'+d.id+'"></div></div></div></div>';
                    
                });
                
                
                ProgramDetails += '</div>';
                $('#ProgramDetails').html(ProgramDetails);
            }
        });
    }
    
    
    function onCollapsed(id){        
        $(".content-box").removeClass('collapsed');
        $('#'+id).addClass('collapsed');
        var html = '';
        $.ajax({
            url: 'getProgramSpeaker/'+id,
            type: 'get',
            dataType: 'json',
            success: function(result){
                
                $.each(result, function(i,d){                                                            
                   html += '<div class="col-md-12 col-sm-12 col-xs-12 info" ><div class="mt-3">'+
                    '<figure class="img-circle image"><img class="img-circle" src="images/resource/'+d.avatar+'" alt=""></figure>'+
                    '<h5 class="prof-title">'+d.name+'</h5><h6 class="prof-occup">'+d.designation+'</h6></div></div>';
                     
                });
                console.log(html);
               $('#ProgramSpeaker'+id+'').html(html);
            }
        });
        
    }
</script>
