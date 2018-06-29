
@extends('layouts.app')

@section('content')
@if(count($errors)>0)
	<div class="alert alert-danger" role="alert">
	<ul>
	@foreach($errors->all() as $error)1
4-
718		<li>{{$error}}</li>

	@endforeach
	</ul>
	</div>
@endif
         
	 	 	 @if (count($errors) > 0)
	 	 	 <div class="alert alert-danger">
	 	 	 	 <strong>Error!</strong> Revise los campos obligatorios.<br><br>
	 	 	 	 <ul>
	 	 	 	 	 @foreach ($errors->all() as $error)
	 	 	 	 	 <li>{{ $error }}</li>
	 	 	 	 	 @endforeach
	 	 	 	 </ul>
	 	 	 </div>
	 	 	 @endif
<div class="image-container set-full-height m-0" style="background-image: url('../assets/img/wizard-book.jpg')">

<div class="container-fluid ">
	<div class="row mt-0 justify-content-center align-items-center">
		<div class="col-sm-12 col-md-8" >
		    <div class="wizard-container">
		        <div class="card wizard-card col-md-12" data-color="jade" id="wizard">
		            <form action="{{route('denunciar.store')}}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
		                <div class="wizard-header">
		                    <h3 class="wizard-title">Proceso de Denuncia</h3>
							<h5>Complete los campos obligatorios para que su denuncia sea procesada y visualizada en el mapa.</h5>
		                </div>
						<div class="wizard-navigation">
							<ul>
                               	<li><a href="#captain" data-toggle="tab">Tipo de Delito</a></li>
			                    <li><a href="#details" data-toggle="tab">Detalles</a></li>
			                    <li><a href="#description" data-toggle="tab">Lugar del Hecho</a></li>
			                </ul>
                        </div>
						<!--  Mapa   -->
						<div class="tab-content">
							<div class="tab-pane" id="description">
							    <div class="container">
							    	<div class="row">
							    		<div class="col-sm-8">
							    			<h4 class="info-text">Marque el lugar exacto donde sucedió el inicidente.</h4>
							               <div style="width: 60vw; height: 80vh;">{!! Mapper::render()!!}</div>

    								<input type="number" name="latitud" id="latitud" hidden required>
    									<input type="number" name="longitud" id="longitud" hidden required>
							    		</div>
							    	</div>
							    </div>
					        </div>
							<!--  Descripcion   -->
							<div class="tab-pane" id="details">
							    <div class="container">
							    	<div class="row">
							    		<div class="col-sm-12">
							    			<h4 class="info-text">Los campos con (*) son de caracter obligatorio.</h4>
							                <div class="form-group">
							                    <label for="descripcion" class="control-label" >Descripción (*)</label>
							                    <textarea name="descripcion" id="descripcion" class="form-control" placeholder="Ejemplo: El asalto fue ocurrido a alturas de la noche, el tipo iba armado, era de piel morena,usaba un casaca negra, un jean azul y una gorra roja ." required></textarea>
							                </div>
							                <div class="form-group ">
							                    <label for="fecha">Fecha Del Incidente (*)</label> 	
							                    <input type="date" name="fecha" id="fecha" class="form-control" required>
							                </div>
							                <div class="col-sm-offset-0">
							                    <label for="evidencia" class="control-label">Adjunta una imagen como evidencia</label> 	
							                    <input type="file" id="evidencia" name="evidencia" class="">
							                </div>
							                <br><br><br><br>
							    		</div>
							    	</div>
						    	</div>
				        	</div>

                            <div class="tab-pane" id="captain">
		                        <h4 class="info-text">Indique el Tipo de Incidente Sucedido </h4>
		                        <div class="row">
		                            <div class="col-sm-12">
		                            	<div class="form-row">
		                                <div class="col-sm-4">
		                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip">                  
												<input type="radio" name="incidente" value="Robo" required>
		                                        <div class="icon">
		                                            <img src="../assets/img/robo.png" class="material-icons" >
		                                        </div>
		                                        	<h6>Robo</h6>
		                                    </div>
		                               	</div>
		                                <div class="col-sm-4">
		                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" >
		                                        <input type="radio" name="incidente"    value="Violencia" required>
		                                        <div class="icon">
                                                    <img src="../assets/img/violencia.png"  class="material-icons">
		                                        </div>
		                                        	<h6>Violencia</h6>
		                                    </div>
		                                </div>
										<div class="col-sm-4">
		                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" >
		                                        <input type="radio" name="incidente"    value="Vandalismo" required>
		                                        <div class="icon">
                                                    <img src="../assets/img/vandalismo.png" class="material-icons">
		                                        </div>
		                                           	<h6>Vandalismo/Delicuencia</h6>
		                                    </div>
                                        </div>
                                        </div>
                                        <div class="form-row">
                                        <div class="col-sm-4">
		                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" >
		                                        <input type="radio" name="incidente"    value="Venta de Drogas" required>
		                                        <div class="icon">
                                                    <img src="../assets/img/drogas.png" class="material-icons">
		                                        </div>
		                                        	<h6>Venta de Drogas</h6>
		                                    </div>
                                        </div>
                                        <div class="col-sm-4">
		                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" >
		                                        <input type="radio" name="incidente"   value="Desechos" required>
		                                        <div class="icon">
                                                    <img src="../assets/img/desechos.png"  class="material-icons">
		                                        </div>
		                                            <h6>Desechos</h6>
		                                    </div>
                                        </div>
                                            <div class="col-sm-4">
		                                        <div class="choice" data-toggle="wizard-radio" rel="tooltip" >
		                                            <input type="radio" name="incidente"   value="Homicidio" required>
		                                        <div class="icon">
                                                    <img src="../assets/img/asesinato.png" class="material-icons">
		                                        </div>
		                                        	<h6>Homicidio</h6>
		                                    </div>
                                        </div>
                                        </div>
                                        <div class="form-row">
                                        <div class="col-sm-4">
		                                    <div class="choice" data-toggle="wizard-radio" rel="tooltip" >
		                                        <input type="radio" name="incidente"   id="Acoso Callejero" value="Acoso Callejero" required>
			                                    <div class="icon">
	                                                <img src="../assets/img/acoso.png"  class="material-icons">
			                                    </div>
			                                        <h6>Acoso Callejero</h6>
		                                   	</div>
                                        </div>
                                                <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" >
		                                                <input type="radio" name="incidente"   value="Incendio" required>
		                                                <div class="icon">
                                                        <img src="../assets/img/incendio.png"class="material-icons">
		                                                </div>
		                                                <h6>Incendio</h6>
		                                            </div>
                                                </div>
                                                <div class="col-sm-4">
		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" >
		                                                <input type="radio" name="incidente"  value="Accidente de Transito" required>
		                                                <div class="icon">
                                                        <img src="../assets/img/accidente.png"  class="material-icons">
		                                                </div>
		                                                <h6>Accidente de Tránsito</h6>
		                                            </div>
                                                </div>
                                              </div>  
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
							
	                        	<div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-danger btn-wd'  value='Siguiente' />
	                                    <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' value='Enviar' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' value='Atrás' />
	                                </div>
	                                <div class="clearfix"></div>
	                        	</div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->
<<<<<<< HEAD
	</div>
      
=======
	</div>  
>>>>>>> 2d11317140e328bbd7c6e1d67fcb1c1303f84e56
</div>

@endsection
