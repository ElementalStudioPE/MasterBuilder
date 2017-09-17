@extends('vendedor.layouts.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
			<div class="card card-signup">
             <div class="content">
                 <br><br>
                 <div class="col-sm-12 col-xs-12">
                    <h3>Hola {{$vendedor->vendedor_nombre}}</h3>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <h4>Código de descuento: <button class="btn btn-primary btn-simple btn-wd btn-lg" style="font-size: 30px;line-height: 22px;">{{$vendedor->codigo_referencia}}</button></h4>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <h2><strong>Usuarios referenciados</strong></h2>
                </div>
                <div class="col-sm-12">
                    <div class="table-default">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th class="text-right">Fecha</th>
                                    <th class="text-right">Comisión</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach( User::whereCodigo_referencia($vendedor->codigo_referencia)->where('flg_estado','2')->get() as $user )
                                <tr>
                                    <td class="text-left">{{$user->usuario_nombre}}</td>
                                    <td class="td-actions text-right">
                                        <p class="">{{ date('Y-m-d', strtotime( $user->created_at)) }}</p>
                                    </td>
                                    <td class="td-actions text-right">
                                        <p class="">$ 15</p>
                                    </td>
                                </tr>
                                @endforeach
                                <?php $cantReferidos = User::whereCodigo_referencia($vendedor->codigo_referencia)->where('flg_estado','2')->count(); ?>
                                <?php $comisionTotal = $cantReferidos*15;?>
                                <tr>
                                    <td colspan="2" class="td-actions text-right">
                                        <p>Total</p>
                                    </td>
                                    <td colspan="1" class="td-actions text-right">
                                        <p class="">$ {{$comisionTotal}}</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop

@section('js')
<!-- <script type="text/javascript">
    $(document).ready(function(e){
        $('#registrarVendedor').click(function(e){
            e.preventDefault();
            if ( $('#nombre').val() == '' ) {
                swal("¡El nombre es obligatorio!");
                return false;
            }
            if ( $('#apellido').val() == '' ) {
                swal("¡El apellido es obligatorio!");
                return false;
            }
            if ( $('#email').val() == '' ) {
                swal("¡El correo electrónico es obligatorio!");
                return false;
            }

            login_url = "{{route('vendedor.generar')}}";

            $('.gif-register').show();

            $.ajax({
                type : 'post',
                headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')},
                data: {email: $('#email').val(), nombre: $('#nombre').val(), apellido: $('#apellido').val() },
                url  : login_url,
                success: function(responseText){
                    // swal(responseText,responseText,'error');
                    if (responseText == 'error') {
                        swal('Error de ingreso', 'Ha sucedido un error', "error");
                    }
                    if (responseText == 'error-nombre') {
                        swal('Error de ingreso', 'El nombre es obligatorio', "error");
                    }
                    if (responseText == 'error-apellido') {
                        swal('Error de ingreso', 'El apellido es obligatorio', "error");
                    }
                    if (responseText == 'error-email') {
                        swal('Error de ingreso', 'El correo es obligatorio', "error");
                    }
                    if (responseText == 'error-email-existe') {
                        swal('Error de ingreso', 'Ya existe un vendedor con el mismo correo', "error");
                    }
                    if (responseText == 'exito') {
                        swal('¡Registro exitoso!', 'Te hemos enviado un código de descuento a tu correo', "success");
                    }
                    $('.gif-register').hide();
                }
            });
            return false;
        })
    });
</script> -->
@stop