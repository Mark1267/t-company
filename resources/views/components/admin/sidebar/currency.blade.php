<li class="menu-title">Currency</li>
                    <li>
                        <a href="{{ route('admin.currency.add') }}" class=" waves-effect">
                            <i class="mdi mdi-bank-plus"></i>
                            <span>Add Currency</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-bank-check"></i>
                            <span>All Currency</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            @foreach ($currencies() as $currency)
                                <li><a href="{{ route('admin.currency.edit', ['currency_id' => $currency->id]) }}">{{ $currency->name }} ({{ $currency->network }})</a></li>
                            @endforeach
                        </ul>
                    </li>