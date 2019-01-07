@extends('layouts.system.app')

@section('title','Dashboard')

@push('css')
@endpush

@section('content')
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
        <div class="container-fluid">
            <div class="header-body">
                <!-- Card stats -->
                <div class="row">
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Saldo</h5>
                                        <span class="h2 font-weight-bold mb-0">550</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                                            <i class="ni ni-money-coins"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                                    <span class="text-nowrap">Último mês</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Indicações</h5>
                                        <span class="h2 font-weight-bold mb-0">30</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                                            <i class="fas fas fa-users"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-danger mr-2"><i class="fas fa-arrow-down"></i> 3.48%</span>
                                    <span class="text-nowrap">Última Semana</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Ganhos</h5>
                                        <span class="h2 font-weight-bold mb-0">10.550</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                                            <i class="fas fa-chart-bar"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-warning mr-2"><i class="fas fa-arrow-down"></i> 1.10%</span>
                                    <span class="text-nowrap">Último mês</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h5 class="card-title text-uppercase text-muted mb-0">Usados</h5>
                                        <span class="h2 font-weight-bold mb-0">5.200</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                                            <i class="fas fa-percent"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="mt-3 mb-0 text-muted text-sm">
                                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 12%</span>
                                    <span class="text-nowrap">Último mês</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <h3 class="mb-0">Últimos pontos adquiridos</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col">Empresa</th>
                                <th scope="col">Produto</th>
                                <th scope="col">Data|Compra</th>
                                <th scope="col">Valor Gasto</th>
                                <th scope="col">Pontos Ganhos</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="{{asset('assets/backend/img/theme/atacadao.jpg')}}">
                                        </a>
                                        <div class="media-body">
                                            <span class="mb-0 text-sm">Atacadão S.A</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="{{asset('assets/backend/img/theme/cocacola.jpg')}}">
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">Coca-Cola</span>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">28/12/2018</span>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">R$ 200,00</span>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">35</span>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="{{asset('assets/backend/img/theme/atacadao.jpg')}}">
                                        </a>
                                        <div class="media-body">
                                            <span class="mb-0 text-sm">Atacadão S.A</span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="{{asset('assets/backend/img/theme/cocacola.jpg')}}">
                                        </a>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">Coca-Cola</span>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">28/12/2018</span>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">R$ 200,00</span>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center">
                                        <span class="mr-2">35</span>
                                    </div>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer py-4">
                        <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush
