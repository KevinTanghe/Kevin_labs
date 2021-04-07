<!-- Team Section -->
<div id="team"></div>
<div class="team-section spad">
    <div class="overlay"></div>
    <div class="container">
        <div class="section-title">
            <h2>{!! App\Helpers\myReplace::black($title[3]->title) !!}</h2>
        </div>
        <div class="row">
            <!-- single member -->  
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{asset('storage/'.$team[0]->photo)}}" alt="">
                    <h2>{{$team[0]->lastname}} {{$team[0]->firstname}}</h2>
                    <h3>{{$team[0]->fonction->fonction}}</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{asset('storage/'.$patron->photo)}}" alt="">
                    <h2>{{$patron->lastname}} {{$patron->firstname}}</h2>
                    <h3>{{$patron->fonction->fonction}}</h3>
                </div>
            </div>
            <!-- single member -->
            <div class="col-sm-4">
                <div class="member">
                    <img src="{{asset('storage/'.$team[1]->photo)}}" alt="">
                    <h2>{{$team[1]->lastname}} {{$team[1]->firstname}}</h2>
                    <h3>{{$team[1]->fonction->fonction}}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Section end-->