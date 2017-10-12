

@section ('testimonials')

 <!--Testimonios-->
         <div id="Testimonios">
            <div class="bg-color" data-auto-height="true">
                <div class="container content-lg">
                    <div class="row">
                        <div class="col-sm-3 sm-margin-b-30">
                            <div class="text-right sm-text-left">
                                <h2 class="margin-b-0">Testimonios</h2>
                                <p>Testimonios reales de clientes y personas con las que eh trabajado</p>
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-1">
                            <div class="row row-space-2 margin-b-4">
                                
                                @foreach ($testimonials as $testimonials)
                                <div class="col-md-4 md-margin-b-4">
                                    <div class="testimonios  wow zoomIn text-center" data-height="height" data-wow-duration=".3" data-wow-delay=".1s">
                                        <div class="testimonios-info">
                                            <p class="margin-b-5">" {{ $testimonials->mensaje}} "</p>
                                            <h6 class="text-right">{{ $testimonials->nombre}}</h6>
                                        </div>
                                        <a href="#" class="content-wrapper-link"></a>    
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!--// end row -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!--end testimonios-->

@endsection