<style>
    .pricing {
        display: -webkit-flex;
        display: flex;
        -webkit-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-justify-content: center;
        justify-content: center;
        width: 100%;
        margin: 0 auto 3em;
    }
    .pricing-item {
        position: relative;
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: column;
        flex-direction: column;
        -webkit-align-items: stretch;
        align-items: stretch;
        text-align: center;
        -webkit-flex: 0 1 330px;
        flex: 0 1 330px;
    }
    .pricing-action {
        color: inherit;
        border: none;
        background: none;
    }
    .pricing-action:focus {
        outline: none;
    }

    .pricing-feature-list {
        text-align: left;
    }

    .pricing-palden .pricing-item {
        font-family: 'Open Sans', sans-serif;
        cursor: default;
        color: #84697c;
        background: #fff;
        box-shadow: 0 0 10px rgba(46, 59, 125, 0.23);
        border-radius: 20px 20px 10px 10px;
        margin: 1em;
    }

@media screen and (min-width: 66.25em) {
    .pricing-palden .pricing-item {
        margin: 1em 0.5em;
    }

    .pricing-palden .pricing__item--featured {
        margin: 0;
        z-index: 10;
        box-shadow: 0 0 20px rgba(46, 59, 125, 0.23);
    }
}
.pricing-palden .pricing-deco {
    border-radius: 10px 10px 0 0;
    background: rgb(3 23 67);
    padding: 4em 0 9em;
    position: relative;
}
.pricing-palden .pricing-deco-img {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 160px;
}
.pricing-palden .pricing-title {
    font-size: 0.95em;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 5px;
    color: #fff;
}
.pricing-palden .deco-layer {
    -webkit-transition: -webkit-transform 0.5s;
    transition: transform 0.5s;
}
.pricing-palden .pricing-item:hover .deco-layer--1 {
    -webkit-transform: translate3d(15px, 0, 0);
    transform: translate3d(15px, 0, 0);
}
.pricing-palden .pricing-item:hover .deco-layer--2 {
    -webkit-transform: translate3d(-15px, 0, 0);
    transform: translate3d(-15px, 0, 0);
}
.pricing-palden .icon {
    font-size: 2.5em;
}
.pricing-palden .pricing-price {
    font-size: 3em;
    font-weight: bold;
    padding: 0;
    color: #fff;
    margin: 0 0 0.25em 0;
    line-height: 0.75;
}
.pricing-palden .pricing-currency {
    font-size: 0.15em;
    vertical-align: top;
}
.pricing-palden .pricing-period {
font-size: 0.15em;
padding: 0 0 0 0.5em;
font-style: italic;
}
.pricing-palden .pricing__sentence {
font-weight: bold;
margin: 0 0 1em 0;
padding: 0 0 0.5em;
}
.pricing-palden .pricing-feature-list {
margin: 0;
padding: 0.25em 0 2.5em;
list-style: none;
text-align: center;
}
.pricing-palden .pricing-feature {
padding: 1em 0;
}
.pricing-palden .pricing-action {
font-weight: bold;
margin: auto 3em 2em 3em;
padding: 1em 2em;
color: #fff;
border-radius: 30px;
background: rgb(3 23 67);
-webkit-transition: background-color 0.3s;
transition: background-color 0.3s;
}
.pricing-palden .pricing-action:hover, .pricing-palden .pricing-action:focus {
background-color: #100A13;
}

.pricing-palden .pricing-item--featured .pricing-deco {
padding: 5em 0 8.885em 0;
}
</style>
{{-- <div class="pricing pricing-palden ">
    @foreach($plans() as $plan)
        <div class="pricing-item">
            <div class="pricing-deco">
                @include('layouts.svg.princing')
                <div class="pricing-price ">
                    {{-- {{ $plan->dailyProfit }}% --}
                    {{ $plan->rate }}%
                </div>
                <h3 class="pricing-title">Daily Profit</h3>
                <h3 class="pricing-title">{{ $plan->name }} </h3>
            </div>
            <ul class="pricing-feature-list " style="padding-top: -100px !important;">
                <li class="pricing-feature">Min. Investment: ${{ $plan->min }}</li>
                <li class="pricing-feature"> Max. Investment: ${{ ($plan->max >1000000) ? 'Unlimited' : $plan->max }} </li>
                <li class="pricing-feature"> ROI after {{ $plan->time }} / {{ $plan->planTime->suffix }}</li>
                <li class="pricing-feature"> Total Interest of {{ $plan->rate }}%</li>
                <li class="pricing-feature">10% Referral Bonus</li>
                <li class="pricing-feature">24/7 Customer Care</li>
            </ul>
            @guest
                <button style="cursor: pointer;" onclick="window.location.href = 'register'" class="pricing-action">Get Started</button>
            @endguest
            @auth
                @can('admin')
                    @if($plan->type)
                        <a style="cursor: pointer;" href="{{ route('admin.pricing.plan.compound.edit', ['plan_id' => $plan->id]) }}" class="pricing-action">Update</a>
                        <a style="cursor: pointer;" href="{{ route('admin.pricing.plan.compound.delete', ['plan_id' => $plan->id]) }}" class="pricing-action">Delete</a>
                    @else
                        <a style="cursor: pointer;" href="{{ route('admin.pricing.plan.edit', ['plan_id' => $plan->id]) }}" class="pricing-action">Update</a>
                        <a style="cursor: pointer;" href="{{ route('admin.pricing.plan.delete', ['plan_id' => $plan->id]) }}" class="pricing-action">Delete</a>
                    @endif
                @endcan
                @cannot('admin')
                    @if($plan->type)
                        <a style="cursor: pointer;" href = "{{ route('user.transaction.compound.deposit.plan', ['plan_id' => $plan->id]) }}" class="pricing-action">Get Started</a>  
                    @else 
                        <a style="cursor: pointer;" href = "{{ route('user.transaction.deposit.plan', ['plan_id' => $plan->id, 'type' => 0]) }}" class="pricing-action">Get Started</a>
                    @endif
                @endcannot
            @endauth
        </div>
    @endforeach
</div> --}}



@foreach ($categories() as $category)
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center wow fadeInDown animated" data-wow-delay="500ms">
            <h2 class="bottom10 text-capitalize">{{ $category->title }}</h2>
            <p class="heading_space">{!! $category->body !!}</p>
        </div>
    </div>
</div>
<div class="pricing pricing-palden">
    @foreach ($category->plans as $key => $plan)
        <div class="pricing-item me-sm-2">
            <div class="pricing-deco">
                <svg class="pricing-deco-img" enable-background="new 0 0 300 50" height="50px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 50" width="400px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
                    <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                        c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                    <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                        c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                    <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                        H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                    <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                        c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
                </svg>
                <div class="pricing-price ">
                    {{ $plan->rate }}%
                </div>
                <h3 class="pricing-title">Profit</h3>
                <h3 class="pricing-title">{{ $plan->name }}</h3>
            </div>
            <ul class="pricing-feature-list " style="padding-top: -100px !important;">
                <li class="pricing-feature">Min. Investment: ${{ $plan->min }}</li>
                <li class="pricing-feature"> Max. Investment: ${{ $plan->max }}</li>
                <li class="pricing-feature"> ROI after {{ $plan->time . ' ' . $plan->planTime->suffix }} </li>
                <li class="pricing-feature">Type : {{ $plan->type ? 'Premier' : 'Standard' }} Plan</li>
                @if($plan->type)
                    <li class="pricing-feature">Interval : Every 1 {{ $plan->intervals->suffix }}</li>
                @endif
                <li class="pricing-feature">10% Referral Bonus</li>
                <li class="pricing-feature">24/7 Customer Care</li>
            </ul>
            @guest
            <button style="cursor: pointer;" onclick="window.location.href = 'register'" class="pricing-action">Get Started</button>
        @endguest
        @auth
            @can('admin')
                @if($plan->type)
                    <a style="cursor: pointer;" href="{{ route('admin.pricing.plan.compound.edit', ['plan_id' => $plan->id]) }}" class="pricing-action">Update</a>
                    <a style="cursor: pointer;" href="{{ route('admin.pricing.plan.compound.delete', ['plan_id' => $plan->id]) }}" class="pricing-action">Delete</a>
                @else
                    <a style="cursor: pointer;" href="{{ route('admin.pricing.plan.edit', ['plan_id' => $plan->id]) }}" class="pricing-action">Update</a>
                    <a style="cursor: pointer;" href="{{ route('admin.pricing.plan.delete', ['plan_id' => $plan->id]) }}" class="pricing-action">Delete</a>
                @endif
            @endcan
            @cannot('admin')
                @if($plan->type)
                    <a style="cursor: pointer;" href = "{{ route('user.transaction.compound.deposit.plan', ['plan_id' => $plan->id]) }}" class="pricing-action">Get Started</a>  
                @else 
                    <a style="cursor: pointer;" href = "{{ route('user.transaction.deposit.plan', ['plan_id' => $plan->id, 'type' => 0]) }}" class="pricing-action">Get Started</a>
                @endif
            @endcannot
        @endauth        </div>
    @endforeach
</div>
@endforeach