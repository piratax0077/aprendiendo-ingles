@extends('layout.app')
@section('content')
<?php
	$date = new DateTime($venta->created_at);
?>
<div class="contenedor">
	<article>En {{$venta->comuna}},<strong>{{ $date->format('Y-m-d') }}</strong>, entre el <span style="font-weight: bold">Instituto Nacional de Ingles Conversacional S.P.A. </span>RUT 76.778.562-3, domiciliado en santa rosa 697, Coquimbo. En adelante "Proveedor de Enseñanza" o "INSTITUTO NACIONAL DE INGLES CONVERSACIONAL S.P.A." y don(a)<span style="font-weight: bold"> {{ $venta->user->name.' '.$venta->user->surname }}</span>, domiciliado en calle <strong>{{$venta->user->direccion}}</strong> N° ___ de la ciudad de <strong>{{$venta->comuna}}</strong> en adelante "el alumno" o "contratante" se ha celebrado el siguiente contrato de enseñanza, que se regirá por las disposiciones de la Ley 19.496. de protección al consumidor en lo que corresponde y en especial por las siguientes disposiciones:</article>
	<article><span style="font-weight: bold;">PRIMERO:</span> Por el presente acto e instrumento el alumno contrata el siguiente curso de capacitación bajo el formato de modalidad ONLINE, <span style="font-weight: bold;">PROYECTO EDUCATIVO DE INGLES CONVERSACIONAL GENERACIÓN BILINGUE</span> con una duración de tres meses de asesoría académica, para el módulo {{ $venta->curso->nombreCurso }}</article>
	<p> <span style="font-weight: bold">1.-DERECHOS Y OBLIGACIONES DEL ALUMNO</span></p>
	<article> <span style="font-weight: bold">SEGUNDO</span> La contratación del curso de capacitación ingles conversacional, bajo el formato modalidad ONLINE otorga al alumno los siguiente derechos:</p>
		<ol>
	<li>Recibir una orientación oportuna del curso de capacitación mediante el acceso expedito personal a la plataforma educativa online 24/7.</li>
	<li>Recibir acceso expedito a las clases ONLINE, en los horarios prefijados, en una plataforma educativa, así mismo suministrar las actividades y los contenidos académicos para su práctica periódica.</li>
	<li> Asistir a las clases ONLINE en horario y condiciones prefijadas por el instituto "proveedor de enseñanza"</li>
	<li> Obtener al finalizar el curso de capacitación <span style="font-weight: bold;">Ingles conversacionales</span>, bajo el formato modalidad ONLINE, un certificado y diploma digital que acredite la participación y aprobación de dicho curso contratado</li>
	</ol></article>
	<article><span style="font-weight: bold">TERCERO:</span> Por su parte el alumno se obliga a:
<ol><li>Para Asistir a clases ONLINE regularmente, conforme al horario prefijado de tres veces por semana, necesitara
del recurso tecnológico de un PC o TABLE con internet.</li>
<li> Observar un comportamiento decoroso y de respeto durante la permanencia de las clases ONLINE.</li>
<li>Entregar una carta testimonial al término de cada módulo que pueda favorecer y mejorar el servicio que recibe.</li>
<li> Para solicitar horario de las clases ONLINE por primera vez, lo primero es la realización de un quiz seat
(scholastic english aptitude test), que determinara el nivel de aptitudes para el modulo en la que iniciara.</li>
<li> El alumno se compromete a cumplir con del aprendizaje de las clases ONLINE y practicar periódicamente los
contenidos académicos, mediante el acceso expeditó personal a la plataforma educativa online 24/7.</li></ol>
</article>
<article><span style="font-weight: bold;">CUARTO:</span><p> Para aprobar el curso será necesario que el alumno cumpla con la asistencia rigurosa a clases ONLINE; rinda cada uno de los Quiz y exámenes de las unidades académicas que este comprenda y obtenga
calificaciones satisfactorias, dentro de las normas establecidas por el instituto “Proveedor de Enseñanza”
II.- DERECHO Y OBLIGACIONES DE INSTITUTO NACIONAL DE INGLES CONVERSACIONAL SpA.</p></article>
<article><span style="font-weight: bold;">QUINTO: INSTITUTO NACIONAL DE INGLES CONVERSACIONAL S.p.A. Se obliga a:</span>
	<ol>
<li> Entregar al alumno la enseñanza programada y sistemática una vez iniciada sus clases del curso de capacitación
ingles conversacional bajo el formato modalidad ONLINE:, además proporcionar un uso inteligente y creativo de
los recursos tecnológicos actuales, dando rasgos metodológicos integradores, necesarios para que el alumno/a
pueda acceder al conocimiento del curso respectivo.</li>
<li> Disponer de los recursos y herramientas tecnológicas apropiadas, para desarrollar las clases del curso de
capacitación ingles conversacional bajo el formato modalidad ONLINE , además del personal docente y native
speaker capacitado para impartirlos; como asimismo realizar las clases; tomar y calificar los quiz y exámenes
académicos.</li>
<li> Entregar al final del curso de capacitación ingles conversacional bajo el formato modalidad ONLINE, una vez
aprobado este por el alumno, un certificado y diploma digital, que así lo acredite (Sin que ello signifique titulo
oficial).</li>
<li> Entregar al alumno el acceso expedito a una plataforma educativa online 24/7, para su práctica periódica de
contenidos académicos.</li>
<li> Facilitar clases cuando se requiera en horarios prefijados por el instituto, para reforzamiento de contenidos
ONLINE, en el uso satisfactorio del curso contratado.</li>
<li>Se reserva de buena fe, el derecho de modificaciones, mejoras y fusiones de los cursos, como así mismo
actualizaciones de los contenidos, ajustadas a exigencias de la buena fe, en cumplimiento cabal de las obligaciones
del curso de capacitación ingles conversacional bajo el formato modalidad ONLINE.</li></ol></article>
<article><span style="font-weight: bold">SEXTO:</span> El alumno se obliga a pagar el valor preferencial promocional del curso de capacitación ingles conversacional bajo el formato modalidad ONLINE,a INSTITUTO NACIONAL DE INGLES CONVERSACIONAL
SpA,; como asimismo la matricula:

<li>MATRICULA</li>
El alumno paga en este acto al contado en: efectivo la suma de <strong>${{$venta->curso->valor}}</strong> pesos para gastos administrativos de su incorporación y la reserva del cupo valor preferencial promocional. Matricula, la que luego de iniciadas las clases no podrán ser de vuelta por ninguna causa.
<li>MODALIDADES DE PAGO DEL VALOR DEL CURSO</li>
<ol>
<li> PLAN PAGO CONTADO: El alumno paga en este acto al contado en: efectivo, tarjeta de crédito, transferencia o débito la suma de <strong> ${{$venta->curso->valor}}</strong></li>
<li>PLAN CREDITO</li>
El alumno se obligara a pagar a INSTITUTO NACIONAL DE INGLES CONVERSACIONAL SpA.
La cantidad de <strong>$ {{$venta->curso->valor}}</strong> pesos, en ___cuotas iguales y sucesivas cada una de ellas de $_________
pesos, venciendo la primera de ellas ____/___________ / 2020.- aceptadas por el alumno contratante.
<li> INSTITUTO NACIONAL DE INGLES CONVERSACIONAL S.p.A. No estará obligado a notificar
la fecha de pago y podrá realizar su cobranza en una entidad financiera.</li>
</ol>
</p>
<li>MOROSIDAD Y EXIGIBILIDAD DE PAGO DEL VALOR DEL CURSO</li>
1.- El presente contrato tendrá el carácter de irrevocable mientras dure la relación que lo origino o exista
deuda.</article>
<strong>SEPTIMO:</strong> 
<p>Se deja establecido que corresponderá al contratante acreditar mediante boletas oficiales de S.I.I .el pago en que se divide la obligación contraída.</p>

<strong>OCTAVO:</strong> 
<p>En caso de no pago oportuno, al quinto día pagaré intereses y gastos de cobranza de $1.000 (mil pesos ), por retardo de las cuotas impagas; todo dentro del marco de la ley.</p>
<strong>NOVENO:</strong> 
<p>A petición del alumno, en caso excepcional y calificados por INSTITUTO NACIONAL DE INGLES CONVERSACIONAL S.p.A. Las partes de común acuerdo podrán resciliar el presente contrato, con la cancelación al momento de hacerse, un monto de una mensualidad ser pagadas a INSTITUTO NACIONAL DE INGLES CONVERSACIONAL S.p.A., monto que INSTITUTO NACIONAL DE INGLES
CONVERSACIONAL S.p.A.. y el suscriptor convienen que es una cantidad razonable debido a la terminación anticipada por impedimento del presente contrato.</p>
<strong>DECIMO:</strong> 
<p>Las partes fijan domicilio en la ciudad de Coquimbo, sometiéndose a la jurisdicción del tribunal.
Para constancia y previa lectura, el documento electrónico en que se formaliza este contrato será archivado y éste
será accesible al contratante, enviando una copia su correo electrónico.</p>
<h2 class="titulo">Datos del beneficiario</h2>
	<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>	
</div>
@endsection