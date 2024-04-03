@extends('layouts.dashboard2.app', ['title' => 'New Deposit'])

@section('content')
<div class="insidebanner_wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12"></div>
        </div>
    </div>
</div>
<div class="member_wrap">
    <div class="member_inside">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md12 col-sm-12 col-xs-12">
                    <div class="mem_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="member-container">
                                    <div class="member-right">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <script language="javascript">
                                                <!--
                                                    function openCalculator(id)
                                                    {
                                                        w = 225; h = 400;
                                                        t = (screen.height-h-30)/2;
                                                        l = (screen.width-w-30)/2;
                                                        window.open("{{ route('home') }}/user/transaction/deposit/calculate/" + id, 'calculator' + id, "top="+t+",left="+l+",width="+w+",height="+h+",resizable=1,scrollbars=0");
                                                        
                                                        
                                                        
                                                        for (i = 0; i < document.spendform.h_id.length; i++)
                                                        {
                                                            if (document.spendform.h_id[i].value == id)
                                                            {
                                                            document.spendform.h_id[i].checked = true;
                                                            }
                                                        }
                                                    }
                                                    
                                                    function updateCompound() {
                                                        var id = 0;
                                                        var tt = document.spendform.h_id.type;
                                                        if (tt && tt.toLowerCase() == 'hidden') {
                                                            id = document.spendform.h_id.value;
                                                        } else {
                                                            for (i = 0; i < document.spendform.h_id.length; i++) {
                                                            if (document.spendform.h_id[i].checked) {
                                                                id = document.spendform.h_id[i].value;
                                                            }
                                                            }
                                                        }
                                                        
                                                        var cpObj = document.getElementById('compound_percents');
                                                        if (cpObj) {
                                                            while (cpObj.options.length != 0) {
                                                            cpObj.options[0] = null;
                                                            }
                                                        }
                                                        
                                                        if (cps[id] && cps[id].length > 0) {
                                                            document.getElementById('coumpond_block').style.display = '';
                                                        
                                                            for (i in cps[id]) {
                                                            cpObj.options[cpObj.options.length] = new Option(cps[id][i]);
                                                            }
                                                        } else {
                                                            document.getElementById('coumpond_block').style.display = 'none';
                                                        }
                                                    }
                                                    var cps = {};
                                                -->
                                                </script>
                                                <br>
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                                <form method="post" name="spendform" action="{{ route('user.transaction.deposit.new.save') }}">
                                                    @csrf
                                                    <input type="hidden" name="a" value="deposit">
                                                    <br>
                                                    @foreach($plans as $plan)
                                                        <table cellspacing="1" cellpadding="2" border="0" width="100%" class="tab">
                                                            <tbody>
                                                                <tr>
                                                                    <th colspan="3">
                                                                        <input type="radio" name="h_id" value="{{ $plan->id }}" checked="" onclick="updateCompound()"> 
                                                                        <!--	<input type=radio name=h_id value='{{ $plan->id }}'  checked  > -->
                                                                        <b>KEY PLAN {{ $plan->rate }} % AFTER {{ $plan->time }} {{ $plan->planTime->suffix }}</b>
                                                                    </th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="inheader">Plan</td>
                                                                    <td class="inheader" width="200">Spent Amount ($)</td>
                                                                    <td class="inheader" width="100" nowrap=""><nobr> Profit (%)</nobr></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="item">{{ $plan->name }}</td>
                                                                    <td class="item" align="right">${{ $plan->min }} - ${{ $plan->max }}</td>
                                                                    <td class="item" align="right">{{ $plan->rate }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3" align="right"><a href="javascript:openCalculator(&#39;{{ $plan->id }}&#39;)">Calculate your profit &gt;&gt;</a></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br><br>
                                                        <script>
                                                            cps[{{ $plan->id }}] = [];
                                                        </script>
                                                    @endforeach
                                                    <table cellspacing="0" cellpadding="2" border="0" class="blank">
                                                        <tbody>
                                                            <tr>
                                                                <td>Your account balance ($):</td>
                                                                <td align="right">${{ Auth::user()->balance }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;</td>
                                                                <td align="right">
                                                                <small></small>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Amount to Spend ($):</td>
                                                                <td align="right">
                                                                    <input type="text" name="amount" value="{{ old('amount') }}" class="inpts" size="15" style="width: 30%; text-align:right;">
                                                                </td>
                                                            </tr>
                                                            <tr id="coumpond_block" style="display:none">
                                                                <td>Compounding(%):</td>
                                                                <td align="right">
                                                                    <select name="compound" class="inpts" id="compound_percents"></select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <table cellspacing="0" cellpadding="2" border="0">
                                                                        <tbody>
                                                                            @foreach ($currencies as $currency)
                                                                                <tr>
                                                                                    <td><input type="radio" name="type" value="{{ $currency->id }}"></td>
                                                                                    <td>Spend funds from {{ $currency->name }}</td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><input type="submit" value="Spend" class="sbmt"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </form>
                                                
                                                <script language="javascript">
                                                    for (i = 0; i<document.spendform.type.length; i++) {
                                                        if ((document.spendform.type[i].value.match(/^process_/))) {
                                                            document.spendform.type[i].checked = true;
                                                            break;
                                                        }
                                                    }
                                                    updateCompound();
                                                </script>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
