<!-- Profit Calculation Section Starts Here -->
  <section class="profit-calculation padding-bottom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="section__thumb profit__calculation__thumb rtl me-5">
                    <img src="{{ asset('assets/open') }}/images/calculate-profit/thumb.png" alt="profit-calculation">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="profit__calculation__content">
                    <div class="section__header">
                        <h2 class="section__header-title mt-2">Calculate Your Investment</h2>
                        <p>You must know the calculation before investing in any plan, so you never make mistakes.</p>
                         {{-- Check the calculation and you will get as our calculator says.</p> --}}
                      </div>
                    <form class="profit__calculation__form">
                        <div class="row g-4">
                            <div class="col-md-6 col-lg-12 col-xl-6 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Plan</label>
                                    <select class="nice-select w-100 h-50" id="plan_id" name="plan_id">
                                      <option>Select Plan</option>
                                      @foreach ($plans() as $plan)
                                        <option value="{{ $plan->id }}">{{ $plan->name }}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="col-md-6 col-lg-12 col-xl-6 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Compounding</label>
                                    <select class="nice-select w-100 h-50">
                                        <option>05%</option>
                                        <option>15%</option>
                                        <option>20%</option>
                                        <option>25%</option>
                                    </select>
                                </div>
                            </div> --}}
                            <div class="col-md-6 col-lg-12 col-xl-6 col-sm-6">
                                <div class="form-group">
                                    <label class="form-label">Invest Amount</label>
                                    <input onkeyup="handleChange(this )" type="number" name="invest_amount" id="invest_amount" class="form-control form--control" placeholder="$60,000">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12">
                                <div class="form-group">
                                    <label class="form-label">Total Returns</label>
                                    <input type="text" name="profit_amount" id="profit_amount" class="form-control form--control" placeholder="$0">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Profit Calculation Section Ends Here -->
{{-- <!-- profit calculator section start -->
<section class="pt-120 pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title"><span class="font-weight-normal">Profit</span> <b class="base--color">Calculator</b></h2>
            <p>You must know the calculation before investing in any plan, so you never make mistakes. Check the calculation and you will get as our calculator says.</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-xl-8">
          <div class="profit-calculator-wrapper">
            <form class="profit-calculator">
              <div class="row mb-none-30">
                <div class="col-lg-6 mb-30">
                  <label>Choose Plan</label>
                  <select class="base--bg" id="plan_id" name="plan_id">
                    @foreach ($plans() as $plan)
                        <option value="{{ $plan->id }}">{{ $plan->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-lg-6 mb-30">
                  <label>Invest Amount</label>
                  <input onkeyup="handleChange(this )" type="number" name="invest_amount" id="invest_amount" placeholder="0.00" class="form-control base--bg">
                </div>
                <div class="col-lg-12 mb-30">
                  <label>Profit Amount</label>
                  <input type="text" name="profit_amount" id="profit_amount" placeholder="0.00" class="form-control base--bg" disabled>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- profit calculator section end --> --}}