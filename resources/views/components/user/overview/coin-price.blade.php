<div class="card-body border-top">
    <div class="text-muted text-center">
        <div class="row">
            <div class="col-4 border-end">
                <div>
                    <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-info me-1"></i> Bitcoin</p>
                    <h5 class="font-size-16 mb-0">$ {{ $price()->btc }} <span class="text-success font-size-12"><i class="mdi mdi-menu-up font-size-14 me-1"></i>1.2 %</span></h5>
                </div>
            </div>
            <div class="col-4 border-end">
                <div>
                    <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-primary me-1"></i> Ethereum</p>
                    <h5 class="font-size-16 mb-0">$ {{ $price()->eth }} <span class="text-success font-size-12"><i class="mdi mdi-menu-up font-size-14 me-1"></i>2.0 %</span></h5>
                </div>
            </div>
            <div class="col-4">
                <div>
                    <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-warning me-1"></i> Doge</p>
                    <h5 class="font-size-16 mb-0">$ {{ $price()->doge }} <span class="text-success font-size-12"><i class="mdi mdi-menu-up font-size-14 me-1"></i>0.4 %</span></h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end card-body -->