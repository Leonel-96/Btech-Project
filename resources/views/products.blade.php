
<link rel="stylesheet" href="{{asset('style/css/products.css')}}">
{{-- <script src="{{asset('js/filter.js')}}"></script> --}}
@extends('layouts.master')
@section('content')


        <div class="middle-representation">
            <div class="main-board">
                <div class="vrt-navbar">
                    <div class="sidebar-section-one">
                        <div class="prdt-header">
                            <h2>categories</h2>
                        </div>
                        <div class="prdt-link">
                            <ul>
                                <?php $counter = 0; ?>
                              @if (!empty($cat))
                                @foreach ($cat as $c)
                                    <li class="custom-control custom-checkbox">
                                        <input type="checkbox" {{($counter == 0 ? 'checked' : '')}} at class="custom-control-input category_checkbox" id="{{$c->id}}">
                                        <label for="{{$c->id}}" class="custom-control-label">{{ucfirst($c->name)}}</label>
                                    </li>
                                    <?php $counter++; ?>
                                @endforeach
                              @endif
                            </ul>
                        </div>
                        <div class="prdt-header">
                            <h2>Sub categories</h2>
                        </div>
                        <div class="prdt-link">
                            <ul>
                               @foreach ($subcat as $subc)
                                    <li class="custom-control custom-checkbox"><input type="checkbox" class="custom-control-input" id="{{$subc->id}}"><label for="{{$subc->id}}" class="custom-control-label">{{$subc->name}}</label></li>
                               @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="menu-product">
                    <div class="prdt-title">
                        <h2>Shop</h2>
                    </div>
                    <div class="prdt-result">
                        <p class="_t-item">  {{__('product found')}}</p>
                        <div id="catFilters"></div>
                    </div>
                    <div class="prdt-store causes_div">
                        
                            @foreach ($product as $pro)
                            <div class="product-c">
                               
                                <div class="img-c">
                                    <a href=""><img src="{{URL::to($pro->image)}}" alt="" class="img"/></a>
                                </div>
                                <div class="name-c">
                                    <p class="prdt-name">{{$pro->name}}</p>
                                </div>
                                <div class="price-c">
                                    <p class="price">{{$pro->price}} {{__('FCFA')}}</p>
                                </div>
                                <div class="star-c">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>

                                </div>
                            <form action="/products/{{$pro->id}}" method="POST">
                                <div class="btn-c">
                                    <button type="button" class="btn-buy">ADD TO CART</button>
                                </div>
                            </form>
                              
                            </div>
                            
                            <div class="mdl">
                                <div class="mdl-content">
                                    <div class="mdl-header">
                                        <h2>Add to cart !</h2><span class="closeBtn">&times</span>
                                    </div>
                                    <div class="mdl-middle">
                                        <p>{{$pro->name}}</p>
                                    </div>
                                    <div class="mdl-footer">
                                        <a class="modal-btn" style="background: #fff;color: orange">CONTINUE SHOPPING </a>
                                        <a class="modal-btn">VIEW CART AND CHECKOUT</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        
                        
                       <div style="margin-top:30px;position: absolute; left:50%;top:1950px"> @if ($product->hasPages())
                        <div class="pagination-center">
                            {{$product->links()}}
                        </div>
                    @endif</div>
                    </div>
                </div>
            </div>
        </div>
   
    <script>
        var modal = document.querySelector('.mdl');
        var modalBtn = document.querySelector('.btn-buy');
        var close = document.querySelector('.closeBtn');

        modalBtn.addEventListener('click', openModal);
        close.addEventListener('click', lock);
        window.addEventListener('click', outsidelock)

        function openModal() {
            modal.style.display = "block";
        }

        function lock() {
            modal.style.display = "none";
        }

        function outsidelock(e) {
            if (e.target == modal) {
                modal.style.display = "none";
            }
        }
    </script>
    <script src="{{elixir('js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
    $(document).on('click', '.category_checkbox', function() {
        var ids = [];

        var counter = 0;

        $('#catFilters').empty();
        $('.category_checkbox').each(function() {
            if ($(this).is(":checked")) {
                ids.push($(this).attr('id'));
                $('#catFilters').append(`<div role="alert">${$(this).attr('attr-name')}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">x</span></button></div>`);
                counter++;
            }
        });

        $('._t-item').text('(' + ids.length + ' items)');

        if (counter == 0) {
            $('.causes_div').empty();
            $('.causes_div').append('Not found')
        } else {
            fetchCauseAgainstCategory(ids);
        }
    });
});

function fetchCauseAgainstCategory(id) {
    $('.causes_div').empty();

    $.ajax({
        type: 'GET',
        url: 'get_cause_against_category/' + id,
        success: function(response) {
            var response = JSON.parse(response);
            console.log(response);

            if (response.length == 0) {
                $('.causes_div').append('Not found');
            } else {
                response.array.forEach(element => {
                    $('.causes_div').append(``)
                });
            }
        }
    });
}
    </script>
     @endsection