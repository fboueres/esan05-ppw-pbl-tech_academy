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
                    <x-form.input-text
                        name="name"
                        label="nome"
                        :value="Auth::user()->name"
                    />

                    <x-form.input-text
                        type="email"
                        name="email"
                        label="E-mail"
                        :value="Auth::user()->email"
                    >
                        @if ($errors->any())
                            <div class="form-text text-danger ms-2">
                                Algo deu errado, verifique suas credencias e
                                tente novamente
                            </div>
                        @endif
                    </x-form.input-text>

                    <x-form.input-text
                        type="password"
                        name="old_password"
                        label="Sua senha antiga"
                    />

                    <x-form.input-text
                        type="password"
                        name="new_password"
                        label="Sua senha nova"
                    >
                        @error("new_password")
                            <div class="form-text text-danger ms-2">
                                Sua senha deve ter, no mínimo, 8 caracteres
                            </div>
                        @enderror
                    </x-form.input-text>

                    <x-form.input-text
                        type="password"
                        name="new_password_confirmation"
                        label="Repita sua senha nova"
                    >
                        @error("new_password_confirmation")
                            <div class="form-text text-danger ms-2">
                                Sua senha deve ter, no mínimo, 8 caracteres
                            </div>
                        @enderror
                    </x-form.input-text>

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
