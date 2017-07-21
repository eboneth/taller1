<ul class="nav nav-pills nav-stacked col-md-3">
  <li class="active"><a href="#tab_a" data-toggle="pill">Estatuto General</a></li>
  <li><a href="#tab_b" data-toggle="pill">Estructura Interna</a></li>
  <li><a href="#tab_c" data-toggle="pill">Estatuto Docente</a></li>
  <li><a href="#tab_d" data-toggle="pill">Estatuto Empleado Publico</a></li>
</ul>
<div class="tab-content col-md-9">
    
        <div class="tab-pane active" id="tab_a">
        	@foreach($nor as $normas)
        	@if($normas->fk_id_tip_normat == 1)
            <table>
                <tr>
                    <td width="100%">{{$normas->nombre_pdf}}</td>
                    <td><a href="pdf/normatividad/{{$normas->url_pdf}}" download="pdf/normatividad/{{$normas->url_pdf}}"><img src="{{asset('img/bajar_pdf.png')}}" alt=""></a></td>
                </tr>
            </table>
            @endif
            @endforeach
            
        </div>
        <div class="tab-pane" id="tab_b">
            @foreach($nor as $normas)
            @if($normas->fk_id_tip_normat == 2)
            <table class="table table-bordered">
                <tr>
                    <td width="100%">{{$normas->nombre_pdf}}</td>
                    <td><a href="pdf/normatividad/{{$normas->url_pdf}}" download="pdf/normatividad/{{$normas->url_pdf}}"><img src="{{asset('img/bajar_pdf.png')}}" alt=""></a></td>
                </tr>
            </table>
            @endif
            @endforeach
        </div>
        <div class="tab-pane" id="tab_c">
            @foreach($nor as $normas)
            @if($normas->fk_id_tip_normat == 3)
            <table>
                <tr>
                    <td width="100%">{{$normas->nombre_pdf}}</td>
                    <td><a href="pdf/normatividad/{{$normas->url_pdf}}" download="pdf/normatividad/{{$normas->url_pdf}}"><img src="{{asset('img/bajar_pdf.png')}}" alt=""></a></td>
                </tr>
            </table>
            @endif
            @endforeach
        </div>
        <div class="tab-pane" id="tab_d">
            @foreach($nor as $normas)
            @if($normas->fk_id_tip_normat == 4)
            <table>
                <tr>
                    <td width="100%">{{$normas->nombre_pdf}}</td>
                    <td><a href="pdf/normatividad/{{$normas->url_pdf}}" download="pdf/normatividad/{{$normas->url_pdf}}"><img src="{{asset('img/bajar_pdf.png')}}" alt=""></a></td>
                </tr>
            </table>
            @endif
            @endforeach
        </div>
        
</div><!-- tab content -->