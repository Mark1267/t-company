<li>
    <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="mdi mdi-align-vertical-bottom"></i>
        <span>Plans</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        @foreach ($plans() as $plan)
            <li><a href="{{ route('user.plans', ['type' => 0]) }}">{{ $plan->name }}</a></li>  
        @endforeach
    </ul>
</li>
<li>
   <a href="javascript: void(0);" class="has-arrow waves-effect">
        <i class="mdi mdi-align-vertical-bottom"></i>
        <span>Compound Plans</span>
    </a>
    <ul class="sub-menu" aria-expanded="false">
        @foreach ($compoundPlans() as $cPlan)
            <li><a href="{{ route('user.plans', ['type' => 1]) }}">{{ $cPlan->name }}</a></li>  
        @endforeach
    </ul>
</li>