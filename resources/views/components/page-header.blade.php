
    <!--PAGE TITLE-->
    <section class="page_header" style="background-image: url({{$pagebg }}); background-size: cover;">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
             <p>{{ $title }}</p>
             <h1 class="text-uppercase">{{ $page }}</h1>
            </div>
          </div>
        </div>
    </section>
      <div class="page_linker">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center">
             <ul class="breadcrumb">
              <li><a href="{{ route('home') }}"><i class="icon-home6"></i>Home</a></li>
              <li class="active">{{ $page }}</li>
            </ul>
            </div>
          </div>
        </div>
      </div>
      <!--PAGE TITLE ends-->