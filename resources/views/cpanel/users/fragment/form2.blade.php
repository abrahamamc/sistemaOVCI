<div class="row">
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('name','Nombre') !!}
            {!! Form::text('name', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('apellidos','Apellido') !!}
            {!! Form::text('apellidos', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('direccion','Direccion') !!}
            {!! Form::text('direccion', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('telefono','Telefono') !!}
            {!! Form::number('telefono', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('email','Correo') !!}
            {!! Form::email('email', null,['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            {!! Form::label('type','Tipo') !!}
            {!! Form::select('type',['Administrador'=>'Administrador',
                                        'Empleado'=>'Empleado']
                                        , null,['class'=>'form-control']
        ) !!}

        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            {!! Form::submit('Guardar',['class'=>'btn btn-primary', 'style'=>"cursor: pointer"]) !!}

        </div>
    </div>
</div>






