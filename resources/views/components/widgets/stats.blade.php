              <!--call to action new section start-->
<section class="ptb-60 primary-bg">
  <div class="container">
      <div class="row align-items-center justify-content-between">
          <div class="col-lg-3 col-6 col-sm-6">
              <div class="single-funfacts funfact-style-two wow fadeInLeft" data-wow-delay=".3s"
                  style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                  <i class="bx bx-smile"></i>
                  <h3>
                      <span class="odometer odometer-auto-theme">{{ $stats()->days }}</span>
                  </h3>
                  <p>Running Days</p>
              </div>
          </div>
          <!-- <div class="col-lg-3 col-6 col-sm-6">
<div class="single-funfacts funfact-style-two wow fadeInLeft" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
<i class="bx bxs-star"></i>
<h3>
<span class="odometer odometer-auto-theme">$ 3560.00</span>
</h3>
<p>Today's Deposit</p>
</div>
</div> -->
          <div class="col-lg-3 col-6 col-sm-6">
              <div class="single-funfacts funfact-style-two wow fadeInLeft" data-wow-delay=".4s"
                  style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                  <i class="bx bx-time-five"></i>
                  <h3>
                      <span class="odometer odometer-auto-theme">${{ $stats()->deposits }}</span>
                  </h3>
                  <p>Total Deposited</p>
              </div>
          </div>
          <div class="col-lg-3 col-6 col-sm-6 wow fadeInLeft" data-wow-delay=".5s"
              style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
              <div class="single-funfacts funfact-style-two">
                  <i class="bx bx-data"></i>
                  <h3>
                      <span class="odometer odometer-auto-theme">${{ $stats()->withdrawals }}</span>
                  </h3>
                  <p>Total withdraw</p>
              </div>
          </div>
      </div>
  </div>
</section>
<!--call to action new section end-->