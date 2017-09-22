@section ('index')
@foreach ($index as $index)
 <div class="promo-block parallax-window" data-parallax="scroll" data-image-src="{{ asset('imagenes/'.$index->imagen) }}">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="promo-block-divider">
                            <h1 class="promo-block-title">{{ $index->nombre}}</h1>
                            <p class="promo-block-text">{{ $index->descripcion}}</p>
                        </div>
                        <ul class="list-inline">
                            <li><a href="#" class="social-icons"><i class="icon-social-facebook"></i></a></li>
                            <li><a href="#" class="social-icons"><i class="icon-social-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/luis152288/" class="social-icons"><i class="icon-social-instagram"></i></a></li>
                            <li><a href="https://github.com/luis152288" class="social-icons"><i class="icon-social-github"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/luis-muñoz-95b597120/" class="social-icons"><i class="icon-social-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
        @endforeach
@endsection