

@section ('experience')
<div id="experience">
            <div class="bg-color-sky-light" data-auto-height="true">
                <div class="container content-lg">
                    <div class="row">
                        <div class="col-sm-3 sm-margin-b-30">
                            <div class="text-right sm-text-left">
                                <h2 class="margin-b-0">Experiencias</h2>
                                <p></p>
                            </div>
                        </div>
                        <div class="col-sm-8 col-sm-offset-1">
                            <div class="row row-space-2 margin-b-4">
                               
                                @foreach($experiences as $experiences)
                                <div class="col-md-4 md-margin-b-4">
                                    <div class="service {{ $experiences->fondo}} wow zoomIn" data-height="height" data-wow-duration=".3" data-wow-delay=".1s">
                                        <div class="service-element">
                                            <i class="service-icon {{ $experiences->color}} fa fa-{{ $experiences->img }}" aria-hidden="true"></i>
                                        </div>
                                        <div class="service-info">
                                            <h3 class="{{ $experiences->color}}">{{ $experiences->titulo}}</h3>
                                            <p class="{{ $experiences->color}} margin-b-5">{{ $experiences->descripcion}}</p>
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
@endsection