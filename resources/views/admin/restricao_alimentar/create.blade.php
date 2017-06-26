@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">Painel do Administrador</div>
                    <div class="panel-body">
                        <p>Formulario cadastrar nova restrição alimentar </p>
                        {!! Form::open(['route' => ['restricao_alimentar.store']])!!}
                            <div class="form-group{{ $errors->has('restricao') ? ' has-error' : '' }}">
                                <label for="restricao" class="col-md-2 control-label">Restrição</label>

                                <div class="col-md-5">
                                    <input id="restricao" type="text" class="form-control" name="restricao" value="{{ old('restricao') }}" required autofocus>
                                    @if ($errors->has('restricao'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('restricao') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="col-md-5">

                                    {!! Form::submit('Adicionar') !!}

                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
