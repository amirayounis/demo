@extends("templete")
@section("body")
  <!-- item section -->
   {{-- {{dd($data)}} --}}
  <div class="item_section layout_padding2">
    <div class="container">
      <div class="item_container">
        @foreach ($data as $cart)

        <div class="box">
            <form action="{{route("cart.destroy",["cart"=>$cart])}}" method="post">
               @method("Delete")
                @csrf
                <input type="submit" value="delete" >
            </form>
            <form action="{{route("cart.update",["cart"=>$cart])}}" method="post">
             @csrf
             @method("put")
            <div class="price">
              <h6>
                {{$cart["quantity"]*$cart->item["price"]}}
              </h6>
            </div>
            <div class="img-box">
              <img src="/storage/imgs/{{$cart->item["img"]}}" alt="">
            </div>
            <div class="name">
              <h5>
                {{$cart->item["name"]}}
              </h5>
              <h5>
               <input name="quantity" type="number" value="{{$cart["quantity"]}}">
              </h5>
            </div>
            <input type="submit" value="edit" >
            </form>
          </div>
        @endforeach

      </div>
    </div>
  </div>

  <!-- end item section -->


  <!-- price section -->


  <!-- end price section -->
@endsection




