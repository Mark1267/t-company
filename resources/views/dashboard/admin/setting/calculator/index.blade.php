@extends('layouts.dashboard.app', ['title' => 'Plan Calculator'])
@section('css')
    <style>
        .blink_me {
        animation: blinker 1s linear infinite;
      }
      @keyframes blinker {
      50% {
        opacity: 0;
      }
    }
    </style>
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-6 mx-auto">
            <div class="card">
                <div class="card-body p-4">
                    <form id="calculate">
                        <div class="row">
                            @csrf
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label" for="amount">Amount</label>
                                        <input type="number" class="form-control" name="amount" id="amount" placeholder="Amount" value="{{ old('amount') }}">
                                        @error('amount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Select Plan</label>
                                    <select class="form-select" name="plan_id">
                                        <option></option>
                                        @foreach($plans as $plan)
                                            <option {{ ($plan->id == (old('plan_id'))) ? 'selected' : '' }} value="{{ $plan->id }}">{{ $plan->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('plan_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mx-auto text-center col-12 mb-2">
                                <button class="btn btn-primary mx-auto" id="calculateBtn" type="submit">Calculate</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->   
@endsection

@section('srcipts')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
       $("#calculate").on('submit', function(event){
            event.preventDefault();
                $.ajax({
                    url:"{{ route('api.calculate') }}",
                    method:"POST",
                    data:$(this).serialize(),
                    beforeSend:function(){
                        $('#calculateBtn').attr('disabled','disabled');
                        $('#calculateBtn').addClass('blink_me');
                        $('#calculateBtn').html('Calculating...');
                    },
                    success:function(data){
                        console.log(data)
                        $('#calculateBtn').removeClass('blink_me');
                        $('#calculateBtn').attr('disabled',false);
                        $('#calculateBtn').html('Calculated');
                        // data = data.toString();
                        // data.replace( /(<([^>"]+)>)/ig, '');
                        // data = JSON.parse(data)
                        if(data.status){
                            $('#calculate')[0].reset();
                            swal({
                                title: data.message.title,
                                text: data.message.text,
                                icon: 'success'
                            });
                        }
                    }
                });
    });
    </script>
@endsection