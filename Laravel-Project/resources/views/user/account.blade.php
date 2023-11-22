@extends('layouts.app')

@section('title', 'Lojinha - Minha conta')

@section('content')

    @if (Auth::check())
        <div class="container" data-bs-theme="light">
            <hr class="vr invisible">
            <div class="card">
                <div class="card-header bg-dark text-light">
                    <h5>Usuário: {{ $user->name }}</h5>
                </div>
                <div class="card-body bg-dark-subtle">
                    <div class="card">
                        <div class="card-body row">
                            <div class="row justify-content-center align-items-center">

                                <div class="col-sm-12">
                                    <form action="{{ route('edit_user') }}" method="post" class="form">
                                        @csrf
                                        <p>Alterar nome</p>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="name" placeholder="{{ $user->name }}"
                                                aria-label="Example text with button addon"
                                                aria-describedby="button-addon1">
                                            <button class="btn btn-success" type="submit" value="{{ $user->id }}" name="id"
                                                id="button-addon1">Confirmar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-12">
                                    <form action="{{ route('edit_user') }}" method="post" class="form">
                                        @csrf
                                        <p>Alterar email</p>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" name="email" placeholder="{{ $user->email }}"
                                                aria-label="Example text with button addon"
                                                aria-describedby="button-addon1">
                                            <button class="btn btn-success" type="submit" value="{{ $user->id }}" name="id"
                                                id="button-addon1">Confirmar</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-sm-12">
                                    <form action="{{ route('edit_user') }}" method="post" class="form" enctype="multipart/form-data">
                                        @csrf
                                        <p>Adicionar/Alterar foto</p>
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control" name="profile_image" placeholder="{{ $user->email }}"
                                                aria-label="Example text with button addon"
                                                aria-describedby="button-addon1">
                                            <button class="btn btn-success" type="submit"  value="{{ $user->id }}" name="id"
                                                id="button-addon1">Confirmar</button>
                                        </div>
                                    </form>
                                </div>

                                {{-- ADMIN ONLY --}}
                                @if ($user->is_admin == 1)
                                    <div class="col-sm-4 d-flex justify-content-center">
                                        <form action="{{ route('product_insertion_form') }}" class="form mb-2 mt-5 ">
                                            @csrf
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Adicionar produtos</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-4 d-flex justify-content-center">
                                        <form action="" class="form mb-2 mt-5 ">
                                            @csrf
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Editar produtos</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-sm-4 d-flex justify-content-center">
                                        <form action="{{ route('list_all_products') }}" class="form mb-2 mt-5 ">
                                            @csrf
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Listar produtos</button>
                                            </div>
                                        </form>
                                    </div>
                                @endif
                                {{-- ADMIN ONLY --}}

                            </div>
                            <div class="col-sm-12 text-center">
                                <div class="form-group pt-5 mt-5 mb-3">
                                    <a href="#" class="btn btn-outline-danger py-3 px-4" data-bs-toggle="modal"
                                        data-bs-target="#logoutModal">Deletar Usuário</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <script>
            window.location = "{{ route('home') }}"
        </script>
    @endif

@endsection


{{-- Modal --}}
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deseja MESMO excluir seu usuário ?</h5>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <a href="#" class="btn btn-danger">Deletar</a>
            </div>
        </div>
    </div>
</div>
{{-- Modal --}}