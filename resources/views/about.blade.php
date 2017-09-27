@section ('about')

<div id="about">
            <div class="container content-lg">
                <div class="row">
                    <div class="col-sm-2 sm-margin-b-30">
                        <div class="text-right sm-text-left">
                            <h2 class="margin-b-0">Intro</h2>
                            <p>Acerca de mi</p>
                        </div>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                        <div class="margin-b-80">
                            <p>Desarrollador web junior, con conocimientos de programacion y diseño grafico facil adaptacion a distintas areas de trabajo y facilidad
                            de aprendizaje.</p>
                            <p></p>
                        </div>

                        <!-- Progress Box -->
                        @foreach ($about as $about)
                        <div class="progress-box">
                            <h5>{{ $about->skill}} <span class="color-heading pull-right">{{ $about->nivel}}%</span></h5>
                            <div class="progress">
                                <div class="progress-bar bg-color-base" role="progressbar" data-width="{{ $about->nivel}}"></div>
                            </div>
                        </div>
                        @endforeach
                        
                       
                        <!-- End Progress Box -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>

@endsection