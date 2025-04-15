@extends("layouts.app")
@section("title", "Perfil")
@section("content")
    <div class="d-flex justify-content-center">
        <div class="card w-50">
            <div class="card-body">
                <h3 class="card-title text-center mb-3">Seu perfil</h3>
                @if (session("success"))
                    <div
                        class="alert alert-success alert-dismissible fade show"
                        role="alert"
                    >
                        {{ session("success") }}
                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="alert"
                            aria-label="Fechar"
                        ></button>
                    </div>
                @endif
                <form action="{{ route("user.profile") }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="form-floating mb-3">
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control @error("name") is-invalid @enderror"
                            placeholder="Nome"
                            value="{{ old("name", Auth::user()->name) }}"
                        />
                        <label for="name">Nome</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control @error("email") is-invalid @enderror"
                            placeholder="E-mail"
                            value="{{ old("email", Auth::user()->email) }}"
                        />
                        <label for="email">E-mail</label>
                        @if ($errors->any())
                            <div class="form-text text-danger ms-2">
                                Algo deu errado, verifique suas credencias e
                                tente novamente
                            </div>
                        @endif
                    </div>
                    <div class="form-floating mb-3">
                        <input
                            type="password"
                            name="old_password"
                            id="old_password"
                            class="form-control"
                            placeholder="Sua senha atinga"
                        />
                        <label for="old_password">Sua senha antiga</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input
                            type="password"
                            name="new_password"
                            id="new_password"
                            class="form-control @error("new_password") is-invalid @enderror"
                            placeholder="Sua senha nova"
                        />
                        <label for="new_password">Sua senha nova</label>
                        @error("new_password")
                            <div class="form-text text-danger ms-2">
                                Sua senha deve ter, no mínimo, 8 caracteres
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating mb-3">
                        <input
                            type="password"
                            name="new_password_confirmation"
                            id="new_password_confirmation"
                            class="form-control @error("new_password_confirmation") is-invalid @enderror"
                            placeholder="Repita sua senha nova"
                        />
                        <label for="new_password_confirmation">
                            Repita sua senha nova
                        </label>
                        @error("new_password")
                            <div class="form-text text-danger ms-2">
                                Preencha os dois campos com a sua nova senha
                            </div>
                        @enderror
                    </div>
                    <div class="w-full d-flex gap-1">
                        <a
                            href="{{ url()->previous() }}"
                            class="btn btn-secondary w-100"
                        >
                            Voltar
                        </a>
                        <button type="submit" class="btn btn-primary w-100">
                            Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
