

@section ('works')

	<div id="work">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-2 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0">Trabajos</h2>
                            <p>Portafolio</p>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                        <!-- Masonry Grid -->
                        <div class="masonry-grid row row-space-2">
                            <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                            @foreach ($works as $works)
                            <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-4">
                                <!-- Work -->
                                <div class="work work-popup-trigger">
                                    <div class="work-overlay">
                                        <img class="full-width img-responsive" src="{{ asset('imagenes/'.$works->imagen) }}" alt="Portfolio Image">
                                    </div>
                                    <div class="work-popup-overlay">
                                        <div class="work-popup-content">
                                            <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                            <div class="margin-b-30">
                                                <h3 class="margin-b-5">{{ $works->titulo}}</h3>
                                                <span>{{ $works->subtitulo}}</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p>{{ $works->descripcion}}</p>
                                                        <ul class="list-inline work-popup-tag">
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">{{ $works->tag1}}</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">{{ $works->tag2}}</a></li>
                                                            <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">{{ $works->tag3}}</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="margin-t-10 sm-margin-t-0">
                                                        <p class="margin-b-5"><strong>Lider de proyecto:</strong> {{ $works->nombre1}}</p>
                                                        <p class="margin-b-5"><strong>Diseñador:</strong> {{ $works->nombre2}}</p>
                                                        <p class="margin-b-5"><strong>Desarrollador:</strong> {{ $works->nombre3}}</p>
                                                        <p class="margin-b-5"><strong>Cliente:</strong> {{ $works->cliente}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Work -->
                            </div>
                            @endforeach
                        </div>
                        <!-- End Masonry Grid -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>

@endsection