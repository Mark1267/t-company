                    <li class="menu-title">Plans</li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-cable-data"></i>
                            <span>All Plans</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            @foreach ($categories() as $category)
                                <li><a href="{{ route('admin.pricing.plan.all', ['catID' => $category->id]) }}">{{ $category->title }}</a></li>  
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('admin.pricing.plan.add') }}" class=" waves-effect">
                            <i class="mdi mdi-animation-outline"></i>
                            <span>Add Plans</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-bank-check"></i>
                            <span>Update Plans</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            @foreach ($plans() as $plan)
                                <li><a href="{{ route('admin.pricing.plan.edit', ['plan_id' => $plan->id]) }}">{{ $plan->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    {{-- <li class="menu-title">Compound Plans</li>
                    <li>
                        <a href="{{ route('admin.pricing.plan.compound.add') }}" class=" waves-effect">
                            <i class="mdi mdi-animation-outline"></i>
                            <span>Add Compound Plans</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-bank-check"></i>
                            <span>Update Compound Plans</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            @foreach ($compoundPlans() as $cplan)
                                <li><a href="{{ route('admin.pricing.plan.compound.edit', ['plan_id' => $cplan->id]) }}">{{ $cplan->name }}</a></li>
                            @endforeach
                        </ul>
                    </li> --}}
                    <li class="menu-title">Categories</li>
                    <li>
                        <a href="{{ route('admin.pricing.category.add') }}" class=" waves-effect">
                            <i class="mdi mdi-animation-outline"></i>
                            <span>Add Category</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.pricing.category.all') }}" class=" waves-effect">
                            <i class="mdi mdi-animation-outline"></i>
                            <span>All Category</span>
                        </a>
                    </li>
                    <li class="menu-title">Timing</li>
                    <li>
                        <a href="{{ route('admin.pricing.time.add') }}" class="waves-effect">
                            <i class="mdi mdi-align-vertical-bottom"></i>
                            <span>Add</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.pricing.time.all') }}" class="waves-effect">
                            <i class="mdi mdi-align-vertical-bottom"></i>
                            <span>All</span>
                        </a>
                    </li>