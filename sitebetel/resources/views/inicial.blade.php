@extends('layouts.master')
@section('master')
    <div class="main-card px-2">
        <div class="conteiner-fluid header">
            <div class="card-header title" style="margin: 15px 45px 0px;"></div>
        </div>

        <div class="row" style="margin: 25px 45px 5px;">
            <div class="card p-2">
                <div class="card" style=" background-color: rgb(49, 89, 228);">
                    <h3 class="card-title" style=" color: rgb(255, 255, 255); margin: 5px 5px 5px; font-size: 20px;">Resumo
                        dos Prazos das Publicações</h3>
                </div>
                <div class="row justify-content-around mt-2">
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12">
                        <a id="publi-vencida" class="small-box-footer w-100" title="Vencidas" style="text-decoration:none;">
                            <div class="small-box shadow" style="background-color: #d74050;">
                                <div class="inner">
                                    <h3 class="text-white"></h3>
                                    <h5 class="text-white">Vencidas</h5>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#d3d3d3"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm-8-80V80a8,8,0,0,1,16,0v56a8,8,0,0,1-16,0Zm20,36a12,12,0,1,1-12-12A12,12,0,0,1,140,172Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12">
                        <a id="publi-resta-5" class="small-box-footer w-100" title="Restam..."
                            style="text-decoration:none;">
                            <div class="small-box shadow bg-warning">
                                <div class="inner">
                                    <h3 class="text-white"></h3>
                                    <h5 class="text-white">Restam 5 dias</h5>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#d3d3d3"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M236.8,188.09,149.35,36.22h0a24.76,24.76,0,0,0-42.7,0L19.2,188.09a23.51,23.51,0,0,0,0,23.72A24.35,24.35,0,0,0,40.55,224h174.9a24.35,24.35,0,0,0,21.33-12.19A23.51,23.51,0,0,0,236.8,188.09ZM222.93,203.8a8.5,8.5,0,0,1-7.48,4.2H40.55a8.5,8.5,0,0,1-7.48-4.2,7.59,7.59,0,0,1,0-7.72L120.52,44.21a8.75,8.75,0,0,1,15,0l87.45,151.87A7.59,7.59,0,0,1,222.93,203.8ZM120,144V104a8,8,0,0,1,16,0v40a8,8,0,0,1-16,0Zm20,36a12,12,0,1,1-12-12A12,12,0,0,1,140,180Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12">
                        <a id="publi-no-prazo" class="small-box-footer w-100" title="No Prazo"
                            style="text-decoration:none;">
                            <div class="small-box shadow bg-success">
                                <div class="inner">
                                    <h3 class="text-white"></h3>
                                    <h5 class="text-white">No Prazo</h5>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#d3d3d3"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M224,128a8,8,0,0,1-8,8H128a8,8,0,0,1,0-16h88A8,8,0,0,1,224,128ZM128,72h88a8,8,0,0,0,0-16H128a8,8,0,0,0,0,16Zm88,112H128a8,8,0,0,0,0,16h88a8,8,0,0,0,0-16ZM82.34,42.34,56,68.69,45.66,58.34A8,8,0,0,0,34.34,69.66l16,16a8,8,0,0,0,11.32,0l32-32A8,8,0,0,0,82.34,42.34Zm0,64L56,132.69,45.66,122.34a8,8,0,0,0-11.32,11.32l16,16a8,8,0,0,0,11.32,0l32-32a8,8,0,0,0-11.32-11.32Zm0,64L56,196.69,45.66,186.34a8,8,0,0,0-11.32,11.32l16,16a8,8,0,0,0,11.32,0l32-32a8,8,0,0,0-11.32-11.32Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12">
                        <a id="publi-concluida" class="small-box-footer w-100" title="Concluídas"
                            style="text-decoration:none;">
                            <div class="small-box shadow bg-primary">
                                <div class="inner">
                                    <h3 class="text-white"></h3>
                                    <h5 class="text-white">Concluídas</h5>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#d3d3d3"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M173.66,98.34a8,8,0,0,1,0,11.32l-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35A8,8,0,0,1,173.66,98.34ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12">
                        <a id="publi-indeterminada" class="small-box-footer w-100" title="Indeterminado"
                            style="text-decoration:none;">
                            <div class="small-box shadow bg-secondary">
                                <div class="inner">
                                    <h3 class="text-white"></h3>
                                    <h5 class="text-white">Indeterminado</h5>
                                </div>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#d3d3d3"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M140,180a12,12,0,1,1-12-12A12,12,0,0,1,140,180ZM128,72c-22.06,0-40,16.15-40,36v4a8,8,0,0,0,16,0v-4c0-11,10.77-20,24-20s24,9,24,20-10.77,20-24,20a8,8,0,0,0-8,8v8a8,8,0,0,0,16,0v-.72c18.24-3.35,32-17.9,32-35.28C168,88.15,150.06,72,128,72Zm104,56A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin: 5px 45px 5px;">
            <div class="card" style=" background-color: rgb(49, 89, 228);">
                <h3 class="card-title" style=" color: rgb(255, 255, 255); margin: 5px 5px 5px; font-size: 20px;">Resumo
                    Geral</h3>
            </div>
        </div>

        <div class="row" style="margin: 5px 35px 5px;">
            <div class="col-md-12">
                <div class="small-box bg-secondary" title="Total de Publicações Cadastradas no Sistema.">
                    <div class="inner">

                        <p>Publicações Cadastradas</p>
                    </div>
                    <div class="icon">
                        <i class="bi bi-clipboard-check" style="font-size: 55px;"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="margin: 5px 45px 5px;">
            <div class="card" style=" background-color: rgb(49, 89, 228);">
                <h3 class="card-title" style=" color: rgb(255, 255, 255); margin: 5px 5px 5px; font-size: 20px;">Resumo
                    Tipos Documentos</h3>
            </div>
        </div>

        <div class="row" style="margin: 2px 35px 10px;">
            {{-- @foreach ($publicacao['total_pub_by_tipo'] as $tipo)
                <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-12">
                    <a type="submit" href="{{ route('home.select', [$tipo->id]) }}" class="small-box-footer w-100"
                        title="Tipo de Publicação." style="text-decoration:none;"
                        id="select-tp-publi-{{ $loop->index }}">
                        <div class="small-box bg-secondary">
                            <div class="inner">
                                <h3 style="color: #f4f6f9">{{ $tipo->total_pub }}</h3>
                                <p style="color: #f4f6f9">{{ $tipo->tipo }}</p>
                            </div>
                            <div class="icon">
                                <i class="bi bi-card-list" style="font-size: 65px;"></i>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach --}}
        </div>

        <div class="container-fluid m-0 px-5">
            <div class="card p-2">
                <div class="card" style=" background-color: rgb(49, 89, 228);">
                    <h3 class="card-title" style=" color: rgb(255, 255, 255); margin: 5px 5px 5px; font-size: 20px;">
                        Resumo do Quantitativo de Publicações por Unidade</h3>
                </div>
                <table
                    class="table table-bordered table-action table-responsive-sm table-responsive-md table-responsive-lg">
                    <div class="row m-0">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th
                                            style="width: 4%; border-left: 1px solid #bcbec2; border-right: 1px solid #bcbec2; text-align: center;">
                                            ID</th>
                                        <th
                                            style="width: auto; border-left: 1px solid #bcbec2; border-right: 1px solid #bcbec2; text-align: center;">
                                            Nome da Unidade</th>
                                        <th
                                            style="width: 20%; border-left: 1px solid #bcbec2; border-right: 1px solid #bcbec2; text-align: center;">
                                            Quantidade de Publicações</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @forelse($publicacoes_unidade as $pub_unidade)
                                            <tr>
                                                <td align="center"
                                                    style='font-size: 14px; border-right: 1px solid #bcbec2; border-left: 1px solid #bcbec2'>
                                                    {{ $pub_unidade->unidade_id }} </td>
                                                <td align="start"
                                                    style='font-size: 14px; border-right: 1px solid #bcbec2; border-left: 1px solid #bcbec2'>
                                                    <a id="unidade-{{ $loop->index }}"
                                                        href="{{ route('publicacao.unidade', $pub_unidade->unidade_id) }}"
                                                        style="text-decoration: none">
                                                        {!! $pub_unidade->nomeunidade !!}
                                                    </a>
                                                </td>
                                                <td align="center"
                                                    style='font-size: 14px; border-right: 1px solid #bcbec2; border-left: 1px solid #bcbec2'>
                                                    {{ $pub_unidade->total_pub }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="12">
                                                    <div class="well text-center "><br>
                                                        <h2 class="text-danger"><i class="fa fa-warning"></i> Nenhum
                                                            arquivo
                                                            encontrado por unidade!</h2>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforelse --}}
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center">
                            {{-- <nav class="mt-3">{{ $publicacoes_unidade->links('pagination::bootstrap-4') }}</nav> --}}
                        </div>
                    </div>
                </table>
            </div>
        </div>
    </div>
@endsection
