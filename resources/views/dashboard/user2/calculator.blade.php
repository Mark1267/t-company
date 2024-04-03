
<html>
    <head>
        <title>Calculator</title>
        <style>
            form {	margin-top: 0px;margin-bottom: 0px;margin-left: 0px;margin-right: 0px;}
            .toptable {
                background-color: FF8D00;
            }

            a.toplink, a.toplink:hover, a.toplink:visited, a.toplink:active {
                color: white;
                text-decoration: none;
            }
            .forCopyright {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 10px;
                color: #EDD1D7;
                text-align: center;
                background-color: ff8d00;
            }

            body, td, .forTexts {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 12px;
                color: #000000;
            }
            a.menutxt, a.menutxt:hover, a.menutxt:visited, a.menutxt:active {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 11px;
                color: #666699;
            }
            .menutxt {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 11px;
                color: #000000;
            }
            th {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 11px;
                color: #000000;
            }

            .title {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 11px;
                color: #FFFFFF;
                background-color: #FF8D00;
            }

            .inpts {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 10px;
                color: #000000;
                background-color: #FFFFF2;
                border: 1px inset #FEE498;
                border-color: #FF8D00;
                border-style: solid;
            }
            .sbmt {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 10px;
                color: #000000;
                background-color: #FFECB0;
                border: 1px outset #FFFFE1;
            }
            a.hlp, a.hlp:active, a.hlp:visited, a.hlp:hover { font-family: verdana; font-size: 12px; color: black; text-decoration: none; cursor: help;}

            .line {
                background-color: ff8d00;
            }
            .bgcolorleft {
                background-color: white;
            }
            .bgcolormain {
                background-color: white;
            }
            .bgcolorright {
                background-color: white;
            }
            div.framebody {
                text-align: left;
            }
            td.inheader {
                background-color: FFEA00;
                font-weight: bold;
                text-align: center; 
                    padding-left: 2px;
                    padding-right: 2px;
                    padding-top: 2px;
                    padding-bottom: 2px;
            }
            td.item {
                background-color: FFF9B3;	
            }
            h3 {
                font-weight: bold;
                font-size: 12px;
            }
            .calendartable {
                background-color: ff8d00;
                text-align: center;
            }
            .calendartablebg {
                background-color: white;
            }
            .calendarweek {
                background-color: ff8d00;
                text-align: center;
                
            }
            td.gray {
                    color: gray;
            }
        </style>
    
        <script>
            var percents = new Array;
            
            percents[0] = new Array({{ $plan->min }}, {{ $plan->max }}, {{ $plan->rate }});
            
            var maxdays = {{ $plan->time * $plan->planTime->hours }};
            var Amount = {{ $plan->min }};
            var returnprofit = 1;
            var returnprofit_percent = 0.00;
            function CalculatePercent()
            {
                Percent = 0;
                var LastPercent = percents[0][2];
                for (var i = 0; i < percents.length; i++)
                {
                    if (Amount < percents[i][0])
                    {
                        Percent = LastPercent;
                    }
                    else
                    {
                        LastPercent = percents[i][2];
                    if ((Amount >= percents[i][0]) && ((Amount <= percents[i][1]) || (percents[i][1] == 0)))
                    {
                        Percent = percents[i][2];
                    }
                    }
                }
            }
            
            function CalculateProfit() 
            {
                Amount = new Number(document.data.amount.value);
                CalculatePercent();
            
                if (Percent == 0)
                {
                    if (Amount < percents[0][0])
                    {
                        alert('Provided amount is too small. ' + percents[0][0] + ' is minimal!');
                        document.data.amount.value = percents[0][0];
                        CalculateProfit();
                    }
                    else if (percents[percents.length-1][1] != 0 && Amount > percents[percents.length-1][1])
                    {
                        alert('Provided amount is too big. ' + percents[percents.length-1][1] + ' is miximum!');
                        document.data.amount.value = percents[percents.length-1][1];
                        CalculateProfit();
                    }
                    else
                    {
                        alert('Provided amount do not meet any range');
                    }
                    return;
                }
                
                document.getElementById('percent').childNodes[0].data = Percent + '%';
                
                Profit = Math.round(Amount * Percent) / 100;
                if (returnprofit)
                {
                    Profit += Amount*((100-returnprofit_percent)/100);
                }
                document.getElementById('profit').childNodes[0].data = Profit;
            }
            function Spend()
            {
            if (opener && opener.spendform && opener.spendform.amount)
            {
                opener.spendform.amount.value = document.data.amount.value;
                window.close();
            }
            else
            {
                alert('Please, return to Make Deposit Page to Spend!');
            }
            }
        </script>
        
    </head>
    <body>
        <form name="data" onsubmit="CalculateProfit(); return false;">
            @csrf
            <table>
                <tr>
                    <td>From:</td><td><b>{{ \Carbon\Carbon::now() }}</b></td>
                </tr>
                <tr>
                    <td>To:</td><td><b>{{ \Carbon\Carbon::now()->addHours($plan->time*$plan->planTime->hours) }}</b></td>
                </tr>
                </tr>
                    <td>Amount:</td><td nowrap>$ <input type="text" name="amount" value="{{ $plan->min }}" size="5" class="inpts">
                    <input type="button" value="Calculate" onclick="CalculateProfit()" class=sbmt></td>
                </tr>
                <tr>
                    <td>Percent:</td><td><b><span id="percent">N/A</span></b></td>
                </tr>
                <tr>
                    <td>Profit $:</td><td><b><span id="profit">N/A</span></b></td>
                </tr>
            </table>
            <script>
                CalculatePercent();
                CalculateProfit();
            </script>
        </form>
    </body>
</html>