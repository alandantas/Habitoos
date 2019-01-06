@extends('layouts.system.app')

@section('title','Meu Perfil')

@push('css')
@endpush

@section('content')
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url({{asset('assets/backend/img/theme/profile-cover.jpg')}}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p class="display-2 text-white">Olá, {{Auth::user()->name}} </p>
                    <p class="text-white mt-0 mb-5">Este é seu perfil. Aqui você pode editar seus dados pessoais.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <a href="#">
                                    <img src="{{asset('assets/backend/img/theme/Alan.jpg')}}" class="rounded-circle">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-default mr-4">Ativo</a>
                            <a href="#" class="btn btn-sm btn-success float-right">Online</a>
                        </div>
                    </div>
                    <div class="card-body pt-0 pt-md-4">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                                    <div>
                                        <span class="heading">350</span>
                                        <span class="description">Pontos</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">Indicações</span>
                                    </div>
                                    <div>
                                        <span class="heading">135</span>
                                        <span class="description">Consumo</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h3>
                                {{Auth::user()->name}}<span class="font-weight-light">, 27</span>
                            </h3>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>Guarujá, SP
                            </div>
                            <div class="h5 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Cofundador - Habitoos Inc.
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>Sistemas de Informação
                            </div>
                            <hr class="my-4">
                            <h6 class="heading-small text-muted mb-4">Interesses</h6>
                            <span class="badge badge-default">Barbearias</span>
                            <span class="badge badge-primary">Desing Sobrancelhas</span>
                            <span class="badge badge-darker">Assistência Celulares</span>
                            <span class="badge badge-info">Alimentos & Bebidas</span>
                            <span class="badge badge-success">Serviços Resindênciais</span>
                            <span class="badge badge-danger">Manicure & Pedicure</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <div class="nav-wrapper">
                                    <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">Autenticação</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Dados Pessoais</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false">Termos de Uso</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="pl-lg-4 mt-4">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                    <div class="pl-lg-4">
                                        <h6 class="heading-small text-muted mb-4">Dados de Autenticação</h6>
                                        <hr class="my-4" />
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-first-name">Nome</label>
                                                    <input type="text" name="name" id="name" class="form-control form-control-alternative" placeholder="Informe seu nome" value="{{Auth::user()->name}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="cpf">CPF</label>
                                                    <input type="text" id="input-username" class="form-control form-control-alternative" value="{{Auth::user()->cpf}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-email">Email</label>
                                                    <input type="email" id="input-email" class="form-control form-control-alternative" value="{{Auth::user()->email}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-email">Senha atual</label>
                                                    <input type="password" name="current password" id="current password" class="form-control form-control-alternative">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-email">Nova Senha</label>
                                                    <input type="password" name="password" id="password" class="form-control form-control-alternative" placeholder="Nova senha">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-email">Confirme a senha</label>
                                                    <input type="email" name="confirmed_password" id="confirmed_password" class="form-control form-control-alternative" placeholder="Confirme a nova senha">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                    <div class="pl-lg-4">
                                        <h6 class="heading-small text-muted mb-4">Dados Pessoais</h6>
                                        <hr class="my-4" />
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-city">Telefone</label>
                                                    <input type="text" id="phone" class="form-control form-control-alternative" placeholder="(13)99999-9999" value="{{Auth::user()->phone}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-city">Data de nascimento</label>
                                                    <div class="input-group input-group-alternative">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                        </div>
                                                        <input class="form-control" name="datepicker" id="datepicker" placeholder="Selecionar Data" type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="cep">Sexo</label>
                                                    <select name="gender" id="gender" class="form-control form-control-alternative">
                                                        <option value="">Selecione</option>
                                                        <option value="1">Masculino</option>
                                                        <option value="2">Feminino</option>
                                                        <option value="3">Outros</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="address">Endereço</label>
                                                    <input type="text" id="address" class="form-control form-control-alternative" placeholder="Endereço" value="{{Auth::user()->address}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-city">Cidade</label>
                                                    <input type="text" id="city" class="form-control form-control-alternative" placeholder="Cidade" value="{{Auth::user()->city}}">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-country">Estado</label>
                                                    <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Estado" value="">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="cep">CEP</label>
                                                    <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="11442010">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                    <h3 class="text-center">Termos de uso e utilização</h3>
                                    <hr class="my-4" />
                                    <div class="pl-lg-4">
                                        <div class="form-group">
                                            <p class="text-justify">1 - Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est. Suco de cevadiss deixa as pessoas mais interessantis. Mauris nec dolor in eros commodo tempor. Aenean aliquam molestie leo, vitae iaculis nisl. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi.

                                            <p class="text-justify">1.1 - A ordem dos tratores não altera o pão duris. Mé faiz elementum girarzis, nisi eros vermeio. Cevadis im ampola pa arma uma pindureta. Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis.</p>

                                            <p class="text-justify">2 - Quem manda na minha terra sou euzis! In elementis mé pra quem é amistosis quis leo. Casamentiss faiz malandris se pirulitá. Admodum accumsan disputationi eu sit. Vide electram sadipscing et per.</p>

                                            <p class="text-justify">2.1 - Aenean aliquam molestie leo, vitae iaculis nisl. Interagi no mé, cursus quis, vehicula ac nisi. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis. Diuretics paradis num copo é motivis de denguis.</p>

                                            <p class="text-justify">2.2 - Quem num gosta di mim que vai caçá sua turmis! Copo furadis é disculpa de bebadis, arcu quam euismod magna. Detraxit consequat et quo num tendi nada. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.</p></p>

                                            <div class="custom-control custom-checkbox mb-3">
                                                <input class="custom-control-input" id="acceptTerms" type="checkbox" required>
                                                <label class="custom-control-label" for="acceptTerms">Aceito os Termos.</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary mt-5">Salvar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('js')
@endpush
