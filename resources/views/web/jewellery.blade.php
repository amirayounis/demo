@extends("templete")
@section("body")
  <!-- item section -->
{{--
  <div class="item_section layout_padding2">
    <div class="container">
      <div class="item_container">
        <div class="box">
          <div class="price">
            <h6>
              Best PRICE
            </h6>
          </div>
          <div class="img-box">
            <img src="images/i-1.png" alt="">
          </div>
          <div class="name">
            <h5>
              Bracelet
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="price">
            <h6>
              Best PRICE
            </h6>
          </div>
          <div class="img-box">
            <img src="images/i-2.png" alt="">
          </div>
          <div class="name">
            <h5>
              Ring
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="price">
            <h6>
              Best PRICE
            </h6>
          </div>
          <div class="img-box">
            <img src="images/i-3.png" alt="">
          </div>
          <div class="name">
            <h5>
              Earings
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  <!-- end item section -->


  <!-- price section -->

  <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Jewellery Price
        </h2>
      </div>
      <div class="price_container">
        @foreach ($data as $item )
        <div class="box">
            <div class="name">
              <h6>
                {{$item["name"]}}
              </h6>
            </div>
            <div class="img-box">
              <img src="/storage/imgs/{{$item["img"]}}" alt="">
            </div>
            <div class="detail-box">
              <h5>
                $<span>{{$item["price"]}}$</span>
              </h5>
              @auth
              <form action="{{route("cart.store")}}" method="post">
                @csrf
                <input type="text" name="item_id" value="{{$item["id"]}}" hidden>
                <input type="text" name="user_id" value="{{Auth::id()}}" hidden>
                <input name="quantity" type="number">
                <input type="submit" value="add to cart" >
              </form>
              @endauth

            </div>
          </div>
        @endforeach


      </div>
      <div class="d-flex justify-content-center">
        <a href="" class="price_btn">
          See More
        </a>
      </div>
    </div>
  </section>

  <!-- end price section -->
@endsection




