<style>
    .fixedi {
        left: 20px left: 20px !important;
        color: #25D366 !important;
        background: white !important;
        border-radius: 1000px;
        bottom: 35px;
        position: fixed;
        text-align: center;
        width: 60px;
        height: 60px;
        padding: 1px;
        font-size: 40px;
        z-index: 999;
        scale: .8;
    }

    .fixedi i {
        font-size: 50px;
    }
    .alert-c {
        position: fixed;
        padding: 5px;
        z-index: 900;
        bottom: 20px;
        font-size: 11px;
        left: 5px;
        font-family: sans-serif;
        color: #110242;
        background-color: white;
    }

    .fadeOuth {
        animation: fader 3s
    }

    @keyframes fader {
        0% {
            opacity: .9;
        }

        25% {
            opacity: .7;
        }

        50% {
            opacity: .5;
        }

        75% {
            opacity: .3;
        }

        100% {
            opacity: .1;
        }
    }
</style>
<script>
    const transactions = {!! $transaction() !!};
        let counter = 1;
        let counter2 = -1;
        var repater = setInterval(function(){
            var state = counter%2;
            if(counter2 == transactions.length){
                counter2 = -1;
            }
            if(state){
                counter2++;
                $('.keyban').remove()
                $('body').after('<div id="alert' + transactions[counter2][0] + '" class="keyban alert alert-c show darkblue alert-dismissible fadeIn" role="alert"><strong id="name">' + transactions[counter2][0] + '</strong> from <strong id="counrty">' + transactions[counter2][1] + '</strong> just ' + transactions[counter2][3] + ' $<strong id="amount">' + transactions[counter2][2] + '</strong>.</div>');
                counter--;
            }else{
                $('.keyban').addClass('fadeOuth');
                counter++;
            }
        }, 3000);
</script>