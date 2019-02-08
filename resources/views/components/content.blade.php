
<div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="row">
            11
          </div>
        </div>
        <div class="col-md-9">
          <p class="content-title">პროდუქცია</p>
            <div class="row">

           @foreach($printers as $printer)
            <div class="col-lg-4 col-md-6 text product">
                  <div>
                      <a href="details/{{$printer->id}}" target="blank">
                        <img class='img-fluid'  src="/storage/{{$printer->Photos['0']->path}}" alt="{{$printer->keywords}}" >
                      </a>
                  </div>
                <p class="text-center title"><b>{{$printer->Brand->name}} {{$printer->model}} </b></p>
                <p class="text-center type">{{$printer->Category->name}}</p>
                <h4 class="text-center">
                  <button class="btn">
                    Add to cart
                  </button>
                  <button class="btn btn-primary lari" style="">
                     <b> } {{$printer->price}}</b>
                  </button>
                </h4>
                </div>
           @endforeach
                <div class="col-lg-4 col-md-6 text product">
                  <div>
                      <img class='img-fluid'  src="{{ asset('images/hpm1005.png') }}" alt="myrint.ge" >
                  </div>
                <p class="text-center title"><b>hp laserjet M1120</b></p>
                <p class="text-center type">მულტიფუნქციური პრინტერი</p>
                <h4 class="text-center">
                  <button class="btn">
                    Add to cart
                  </button>
                  <button class="btn btn-primary lari" style="">
                     <b> } 200</b>
                  </button>
                </h4>
                </div>

                 <div class="col-lg-4 col-md-6 text product">
                  <div>
                      <img class='img-fluid'  src="{{ asset('images/hpm1005.png') }}" alt="myrint.ge " >
                  </div>
                <p class="text-center title"><b>hp laserjet M1120</b></p>
                <p class="text-center type">მულტიფუნქციური პრინტერი</p>
                <h4 class="text-center">
                  <button class="btn">
                    Add to cart
                  </button>
                  <button class="btn btn-primary lari" style="">
                     <b> } 200</b>
                  </button>
                </h4>
                </div>

                 <div class="col-lg-4 col-md-6 text product">
                  <div>
                      <img class='img-fluid'  src="{{ asset('images/hpm1005.png') }}" alt="myrint.ge " >
                  </div>
                <p class="text-center title"><b>hp laserjet M1120</b></p>
                <p class="text-center type">მულტიფუნქციური პრინტერი</p>
                <h4 class="text-center">
                  <button class="btn">
                    Add to cart
                  </button>
                  <button class="btn btn-primary lari" style="">
                     <b> } 200</b>
                  </button>
                </h4>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
