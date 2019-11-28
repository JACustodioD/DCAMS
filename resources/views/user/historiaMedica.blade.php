@extends('layouts.user')
@section('content')
@if(Auth::user()->hisotria)
    <div class="container mt-5">
        <h4 class="text-primary">Ya ha completado su historial médico</h4>
       <div class="shadow p-3 mb-5 bg-white rounded">
            <ul>
                <h5 class="text-info">Historia médica dental</h5>
                <li>Padecimiento</li>
                <li>Padecimiento</li>
                <li>Padecimiento</li> <br>
                <h5 class="text-info">Historia médica general</h5>
                <li>Padecimiento</li>
                <li>Padecimiento</li>
                <li>Padecimiento</li> <br>
                <h5 class="text-info">Observaciones</h5>
                <li>Padecimiento</li>
                <li>Padecimiento</li>
                <li>Padecimiento</li>
            </ul>
       </div> 
    </div>
@else
<div class="container mt-3">
    <div class="historia">
        <div class="row">
            <div class="col-md-6">
                <h1>Historia médica</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                 <p>Por favor llene su historial médico, su salud es importante para nosotros.</p>
            </div>
        </div>
      
    </div>
</div>


<div class="container">
    <div class="historia-dental">
        <form action="/pacientes/historiamedica" method="POST">
        	@csrf
        <table class="table table-hover">
                <tr>
                    <th scope="col" colspan="2" class="text-primary"><h3>Historia dental</h3></th>
                    <th scope="col" class="text-primary"><h3>Si</h3></th>
                    <th scope="col" class="text-primary"><h3>No</h3></th>
                 
                  </tr>
                <tbody>
                    <tr>
                        <th scope="row" class="text-primary">A</th>
                        <td scope="col">¿Le sangran sus encías cuando se cepilla o cuando usa hilo dental?</td>
                        <td>
                        	<div class="form-check">
                                <input class="form-check-input" required type="radio" name="1" id="exampleRadios1" value="si" checked>
                                <label class="form-check-label" for="exampleRadios1"> 
                                </label>
                            </div>
                         </td>
                        <td><div class="form-check">
                                <input class="form-check-input" required type="radio" name="1" id="exampleRadios2" value="no" checked>
                                <label class="form-check-label" for="exampleRadios2">
                                </label>
                            </div>
                         </td>
                    </tr>
                  <tr>
                    <th scope="row" class="text-primary">B</th>
                    <td>¿Son sensibles sus dientes a lo caliente, frió, o presión?</td>
                    <td><div class="form-check">
                            <input class="form-check-input" required type="radio" name="2" id="exampleRadios1" value="si" checked>
                            <label class="form-check-label" for="exampleRadios3"> 
                            </label>
                        </div>
                     </td>
                     <td><div class="form-check">
                            <input class="form-check-input" required type="radio" name="2" id="exampleRadios2" value="no" checked>
                            <label class="form-check-label" for="exampleRadios4">
                            </label>
                        </div>
                     </td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-primary">C</th>
                    <td>¿Ha tenido tratamiento periodontal (en las encías)?</td>
                    <td><div class="form-check">
                            <input class="form-check-input" required type="radio" name="3" id="exampleRadios2" value="si" checked>
                            <label class="form-check-label" for="exampleRadios5">
                            </label>
                        </div>
                     </td>
                     <td><div class="form-check">
                            <input class="form-check-input" required type="radio" name="3" id="exampleRadios2" value="no" checked>
                            <label class="form-check-label" for="exampleRadios6">
                            </label>
                        </div>
                     </td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-primary">D</th>
                    <td>¿Le salen ulceras frecuentemente en su boca?</td>
                    <td><div class="form-check">
                            <input class="form-check-input"  required type="radio" name="4" id="exampleRadios2" value="si" checked>
                            <label class="form-check-label" for="exampleRadios7">
                            </label>
                        </div>
                     </td>
                     <td><div class="form-check">
                            <input class="form-check-input" required type="radio" name="4" id="exampleRadios2" value="no" checked>
                            <label class="form-check-label" for="exampleRadios8">
                            </label>
                        </div>
                     </td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-primary">E</th>
                    <td>¿Usted usa dentaduras o dentaduras parciales?</td>
                    <td><div class="form-check">
                            <input class="form-check-input" required type="radio" name="5" id="exampleRadios2" value="si" checked>
                            <label class="form-check-label" for="exampleRadios9">
                            </label>
                        </div>
                     </td>
                     <td><div class="form-check">
                            <input class="form-check-input"  required type="radio" name="5" id="exampleRadios2" value="no" checked>
                            <label class="form-check-label" for="exampleRadios10">
                            </label>
                        </div>
                     </td>
                 </tr>
                 <tr>
                    <th scope="row" class="text-primary">F</th>
                    <td>¿Ha tenido una herida grave en su cabeza o boca?</td>
                    <td><div class="form-check">
                            <input class="form-check-input" required type="radio" name="6" id="exampleRadios2" value="si" checked >
                            <label class="form-check-label" for="exampleRadios11">
                            </label>
                        </div>
                     </td>
                     <td><div class="form-check">
                            <input class="form-check-input" required type="radio" name="6" id="exampleRadios2" value="no" checked>
                            <label class="form-check-label" for="exampleRadios12">
                            </label>
                        </div>
                     </td>
                 </tr>
                 <tr>
                    <th scope="row" class="text-primary">G</th>
                    <td>¿Tiene molestias en su mandibula?</td>
                    <td><div class="form-check">
                            <input class="form-check-input" required type="radio" name="7" id="exampleRadios2" value="si" checked>
                            <label class="form-check-label" for="exampleRadios13">
                            </label>
                        </div>
                     </td>
                     <td><div class="form-check">
                            <input class="form-check-input" required type="radio" name="7" id="exampleRadios2" value="no" checked>
                            <label class="form-check-label" for="exampleRadios14">
                            </label>
                        </div>
                     </td>
                 </tr>
                </tbody>
         </table>
    </div>
</div>
<!--TABLA HISTORIA MEDICA GENERAL-->
<div class="container mt-5">
        <div class="historia-gral">
            <table class="table table-hover">
                    <tr>
                        <th scope="col" colspan="2" class="text-info"><h3>Historia general</h3></th>
                        <th scope="col" class="text-info"><h3>Si</h3></th>
                        <th scope="col" class="text-info"><h3>No</h3></th>
                      </tr>
                    <tbody>
                        <tr>
                            <th scope="row" class="text-info">A</th>
                            <td scope="col">¿Considera buena su salud actualmente?</td>
                            <td><div class="form-check">
                                    <input class="form-check-input" required type="radio" name="8" id="exampleRadios1" value="si" checked>
                                    <label class="form-check-label" for="1"> 
                                    </label>
                                </div>
                             </td>
                            <td><div class="form-check">
                                    <input class="form-check-input" required type="radio" name="8" id="exampleRadios2" value="no" checked>
                                    <label class="form-check-label" for="2">
                                    </label>
                                </div>
                             </td>
                        </tr>
                      <tr>
                        <th scope="row" class="text-info">B</th>
                        <td>¿Actualmente esta bajo el cuídado de algún médico?</td>
                        <td><div class="form-check">
                                <input class="form-check-input" type="radio" name="9" id="exampleRadios1" value="si" checked>
                                <label class="form-check-label" for="3"> 
                                </label>
                            </div>
                         </td>
                         <td><div class="form-check">
                                <input class="form-check-input" required type="radio" name="9" id="exampleRadios2" value="si" checked>
                                <label class="form-check-label" for="4">
                                </label>
                            </div>
                         </td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-info">C</th>
                        <td>¿Le trataron o esta actualmente en tratamiento para la degeneración <br> de huesos (osteoporosis), por medio de inyección?</td>
                        <td><div class="form-check">
                                <input class="form-check-input" required type="radio" name="10" id="exampleRadios2" value="si" checked>
                                <label class="form-check-label" for="5">
                                </label>
                            </div>
                         </td>
                         <td><div class="form-check">
                                <input class="form-check-input" required type="radio" name="10" id="exampleRadios2" value="no" checked>
                                <label class="form-check-label" for="6">
                                </label>
                            </div>
                         </td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-info">D</th>
                        <td>¿Utiliza tabaco?</td>
                        <td><div class="form-check">
                                <input class="form-check-input" required type="radio" name="11" id="exampleRadios2" value="si" checked>
                                <label class="form-check-label" for="7">
                                </label>
                            </div>
                         </td>
                         <td><div class="form-check">
                                <input class="form-check-input" type="radio" name="11" id="exampleRadios2" value="no" checked>
                                <label class="form-check-label" for="8">
                                </label>
                            </div>
                         </td>
                      </tr>
                      <tr>
                        <th scope="row" class="text-info">E</th>
                        <td>¿Utiliza alcohol?</td>
                        <td><div class="form-check">
                                <input class="form-check-input" required type="radio" name="12" id="exampleRadios2" value="si" checked>
                                <label class="form-check-label" for="9">
                                </label>
                            </div>
                         </td>
                         <td><div class="form-check">
                                <input class="form-check-input" required type="radio" name="12" id="exampleRadios2" value="no" checked>
                                <label class="form-check-label" for="10">
                                </label>
                            </div>
                         </td>
                     </tr>
                     <tr>
                        <th scope="row" class="text-info">F</th>
                        <td>¿Ha habido algún cambio general en su salud en el ultimo año?</td>
                        <td><div class="form-check">
                                <input class="form-check-input" required type="radio" name="13" id="exampleRadios2" value="si" checked>
                                <label class="form-check-label" for="11">
                                </label>
                            </div>
                         </td>
                         <td><div class="form-check">
                                <input class="form-check-input" required type="radio" name="13" id="exampleRadios2" value="no" checked>
                                <label class="form-check-label" for="12">
                                </label>
                            </div>
                         </td>
                     </tr>
                     <tr>
                        <th scope="row" class="text-info">G</th>
                        <td><b>Para mujeres</b> ¿Utiliza pildoras anticonceptivas o terapia hormonal?</td>
                        <td><div class="form-check">
                                <input class="form-check-input" required type="radio" name="14" id="exampleRadios2" value="si" checked>
                                <label class="form-check-label" for="13">
                                </label>
                            </div>
                         </td>
                         <td><div class="form-check">
                                <input class="form-check-input" required type="radio" name="14" id="exampleRadios2" value="no" checked>
                                <label class="form-check-label" for="14">
                                </label>
                            </div>
                         </td>
                     </tr>
                     <tr>
                        <th scope="row" class="text-info">H</th>
                            <td><b>Para mujeres</b> ¿Esta embarazada?</td>
                            <td><div class="form-check">
                                    <input class="form-check-input" required type="radio" name="15" id="exampleRadios2" value="si" checked>
                                    <label class="form-check-label" for="15">
                                    </label>
                                </div>
                             </td>
                             <td><div class="form-check">
                                    <input class="form-check-input" required type="radio" name="15" id="exampleRadios2" value="no" checked>
                                    <label class="form-check-label" for="16">
                                    </label>
                                </div>
                             </td>
                     </tr>
                     <tr>
                            <th scope="row" class="text-info">I</th>
                                <td><b>Para mujeres</b> ¿Esta dando de amamantar?</td>
                                <td><div class="form-check">
                                        <input class="form-check-input" required type="radio" name="16" id="exampleRadios2" value="si">
                                        <label class="form-check-label" for="17">
                                        </label>
                                    </div>
                                 </td>
                                 <td><div class="form-check">
                                        <input class="form-check-input" required type="radio" name="16" id="exampleRadios2" value="no" checked>
                                        <label class="form-check-label" for="18">
                                        </label>
                                    </div>
                                 </td>
                         </tr>
                    </tbody>
             </table>
        </div>
    </div>
<!--APARTADO DE OVSERVACIONES-->
    <div class="container">
        <div class="observaciones">
            <div class="row">
                <div  class="col-md-12">
                    <h3 class="text-warning">Observaciones</h3> <br>
                    <p>Marque cuales de los siguientes padecimientos tiene:</p>
                </div>
            </div>
            <hr width="100%">
            <div class="row">
                <div class="col-md-2">
                     <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="17" value="si">
                         <label class="form-check-label" for="exampleCheck1"> <small>Enfermedad cardiaca.</small> </label>
                     </div>            
                </div>
                <div class="col-md-2">
                    <div class="form-group form-check">
                         <input type="checkbox" class="form-check-input" id="exampleCheck1" name="18" value="si">
                         <label class="form-check-label" for="exampleCheck1"> <small>Enfermedad cardiovascular.</small> </label>
                    </div>            
                 </div>
                 <div class="col-md-2">
                     <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1"si name="19" value="si">
                         <label class="form-check-label" for="exampleCheck1"> <small>Presión arterial alta.</small> </label>
                     </div>            
                 </div>
                 <div class="col-md-2">
                     <div class="form-group form-check">
                         <input type="checkbox" class="form-check-input" id="exampleCheck1" name="20" value="si">
                         <label class="form-check-label" for="exampleCheck1"> <small>Anemia.</small> </label>
                     </div>            
                 </div>
                 <div class="col-md-2">
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="21" value="si">
                        <label class="form-check-label" for="exampleCheck1"> <small>SIDA o VIH.</small> </label>
                    </div>            
                 </div>
                 <div class="col-md-2">
                    <div class="form-group form-check">
                         <input type="checkbox" class="form-check-input" id="exampleCheck1" name="22" value="si">
                         <label class="form-check-label" for="exampleCheck1"> <small>Asma.</small> </label>
                     </div>            
                 </div>
            </div>
            <div class="row">
                 <div class="col-md-2">
                     <div class="form-group form-check">
                         <input type="checkbox" class="form-check-input" id="exampleCheck1" name="23" value="si">
                         <label class="form-check-label" for="exampleCheck1"> <small>Lupus eritematoso.</small> </label>
                     </div>            
                 </div>
             <div class="col-md-2">
                 <div class="form-group form-check">
                     <input type="checkbox" class="form-check-input" id="exampleCheck1" name="24" value="si">
                     <label class="form-check-label" for="exampleCheck1"> <small>Efisema.</small> </label>
                 </div>            
              </div>
             <div class="col-md-2">
                 <div class="form-group form-check">
                     <input type="checkbox" class="form-check-input" id="exampleCheck1" name="25" value="si">
                         <label class="form-check-label" for="exampleCheck1"> <small>Sinusitis.</small> </label>
                 </div>            
             </div>
             <div class="col-md-2">
                 <div class="form-group form-check">
                     <input type="checkbox" class="form-check-input" id="exampleCheck1" name="26" value="si">
                         <label class="form-check-label" for="exampleCheck1"> <small>Hipertensión.</small> </label>
                 </div>            
             </div>
             <div class="col-md-2">
                 <div class="form-group form-check">
                     <input type="checkbox" class="form-check-input" id="exampleCheck1" name="27" value="si">
                     <label class="form-check-label" for="exampleCheck1"> <small>Ulceras.</small> </label>
                 </div>            
              </div>
             <div class="col-md-2">
                 <div class="form-group form-check">
                     <input type="checkbox" class="form-check-input" id="exampleCheck1" name="28" value="si">
                     <label class="form-check-label" for="exampleCheck1"> <small>Cáncer.</small> </label>
                 </div>            
             </div>
         </div>
         <div class="row d-flex justify-content-center mb-3">
            <div class="col-md-3">
                <button class="btn btn-primary btn-block">Guardar historia</button>
            </div>
         </div>
     </div>
 </div>
</form>

@endif
@endsection