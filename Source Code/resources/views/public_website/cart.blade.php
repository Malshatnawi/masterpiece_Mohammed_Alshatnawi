@extends ('layouts.index_layout')

@section('content')


<!-- Cart Section Start -->
            <div class="rs-cart orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="cart-wrap">
                        <form>
                            <table class="cart-table">
                                <thead>
                                    <tr>
                                        <th class="product-remove"></th>
                                        <th class="product-thumbnail">Course Thumbnail</th>
                                        <th class="product-name">Course Name</th>
                                        <th class="product-price">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                @if(Session::has('cart'))
                                    @foreach($cartedCourses as $key => $value)
                                   
                                    <tr>
                                    
                                    
                                    
                                    <td class="product-remove">
                                    
                                    
                                    <!-- <form method="post" action="{{ route('deleteFromCart', [$key]) }}">
                                    @method('DELETE')
                                    @csrf -->
                                    
                                    <a href="cart/{{$key}}/delete">
                                        <i class="fa fa-close"></i>
                                    </a>
                                    <!-- </form> -->
                                    </td>
                                   
                                    
                                        <!-- {{$item = $value['item']}} -->
                                        <td class="product-thumbnail"><a href="#"><img  src='{{asset("images/courses/$item->course_image")}}' alt=""></a></td>
                                        <td class="product-name"><a href="#">{{$value['item']->course_name}}</a></td>
                                        <td class="product-price">{{$value['item']->course_price}}<span> Jd</span></td>
                                    </tr>

                                    @endforeach

                                @else
                                    <tr>
                                    <td colspan="4">Your Cart is Empty</td>
                                    </tr>

                                @endif
                                    <!-- <tr>
                                        <td class="product-remove"><a href="#"><i class="fa fa-close"></i></a></td>
                                        <td class="product-thumbnail"><a href="#"><img src="assets/images/shop/4.jpg" alt=""></a></td>
                                        <td class="product-name"><a href="#">Medicine Bottle</a></td>
                                        <td class="product-price"><span>$</span>30.00</td>
                                        <td class="product-quantity"><input type="text" class="input-text" value="1" pattern="[0-9]*"></td>
                                        <td class="subtotal"><span class="amount"><span class="symbol">$</span>30.00</span></td>
                                    </tr>
                                    <tr>
                                        <td class="product-remove"><a href="#"><i class="fa fa-close"></i></a></td>
                                        <td class="product-thumbnail"><a href="#"><img src="assets/images/shop/5.jpg" alt=""></a></td>
                                        <td class="product-name"><a href="#">Medicine Bottle</a></td>
                                        <td class="product-price"><span>$</span>30.00</td>
                                        <td class="product-quantity"><input type="text" class="input-text" value="1" pattern="[0-9]*"></td>
                                        <td class="subtotal"><span class="amount"><span class="symbol">$</span>30.00</span></td>
                                    </tr>
                                    <tr>
                                        <td colspan="6" class="action text-right">
                                            <div class="coupon">
                                                <input type="text" name="text" placeholder="Coupon code" required="">
                                                <button type="submit" class="btn-shop apply-btn orange-color">apply coupon</button>
                                            </div>
                                            <div class="update-cart">
                                                <button class="btn-shop orange-color">Update cart</button>
                                            </div>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals pt-70 md-pt-50">
                            <div class="cart-totals">
                                <h5 class="title mb-25">Cart totals</h5>
                                <table class="cart-total-table">
                                    <tbody>
                                        <!-- <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="amount"><span>$</span>60.00</span></td>
                                        </tr> -->
                                        <tr class="order-total">
                                            <th>Total</th>
                                            
                                            @if(Session::has('cart'))
                                            <td><strong><span class="amount">{{$The_Total_Price}}</span><span> Jd</span></strong></td>
                                            @else
                                            <td><strong><span class="amount">0</span><span> Jd</span></strong></td>
                                            @endif

                                        </tr>
                                    </tbody>
                                </table>
                                @if(Session::has('cart'))
                                <div class="wc-proceed-to-checkout">
                                <a href='/checkout'>
                                    <button class="btn-shop orange-color"> Proceed to checkout</button>
                                </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- Cart Section End --> 




@endsection