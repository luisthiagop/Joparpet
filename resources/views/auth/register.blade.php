@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro</div>
                <div class="panel-body">
                    {{Form::open(['url' => 'register', 'method' => 'POST','class'=>'form-horizontal'])}}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>






                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirme a Senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group">
                            <label for="cpf" class="col-md-4 control-label">CPF</label>

                            <div class="col-md-6">
                                <input id="cpf" type="cpf" class="form-control" name="cpf" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="rg" class="col-md-4 control-label">RG</label>

                            <div class="col-md-6">
                                <input id="rg" type="rg" class="form-control" name="rg" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="grupo_pet" class="col-md-4 control-label">Grupo Pet</label>

                            <div class="col-md-6">
                                {{Form::select('grupo_pet',['1'=>'1','2'=>'2','3'=>'3'],null, ['class' => 'form-control'])}}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ies" class="col-md-4 control-label">Ies</label>

                            <div class="col-md-6">
                                <input id="ies" type="ies" class="form-control" name="ies" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="modalidade_alojamento" class="col-md-4 control-label">Modalida de alojamento</label>

                            <div class="col-md-6">

                                {{Form::radio('modalidade_alojamento', 1 ,['class'=>'form-control'])}} <span>Alojamento em sala </span><span class="badge"># vagas</span><br>
                                {{Form::radio('modalidade_alojamento', 2 ,['class'=>'form-control'])}} <span>Alojamento em barraca </span><span class="badge"># vagas</span><br>
                                {{Form::radio('modalidade_alojamento', 3 ,['class'=>'form-control'])}} <span>Sem alojamento</span><br>


                            </div>
                        </div>

                        <hr>

                        <div class="form-group">
                            <label for="interesse_camiseta" class="col-md-4 control-label">Tenho interesse em adquirir a camiseta</label>

                            <div class="col-md-2">
                                {{Form::radio('interesse_camiseta', 1 ,['class'=>'form-control'])}} <span>Sim </span><br>
                                {{Form::radio('interesse_camiseta', 2 ,['class'=>'form-control'])}} <span>Não </span><br>
                            </div><br>
                            <p>*O valor será adicionado ao boleto!</p>
                        </div>

                        <div class="form-group">
                            <label for="interesse_festa" class="col-md-4 control-label">Tenho interesse em participar da festa do evento</label>

                            <div class="col-md-2">
                                {{Form::radio('interesse_festa', 1 ,['class'=>'form-control'])}} <span>Sim </span><br>
                                {{Form::radio('interesse_festa', 2 ,['class'=>'form-control'])}} <span>Não </span><br>
                            </div><br>
                            <p>*O valor será cobrado do dia da mesma!</p>
                        </div>


                        <hr>



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-8">
                                <button type="submit" class="btn btn-primary">
                                    Cadastrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
