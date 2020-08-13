@extends('welcome')

<div class="container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card">
                        <div class="card-header">{{ __('Creation du personnage') }}</div>
                        <div class="card-body">

                            <form action="{{route('home.store') }}" method="post">
                                {{ csrf_field() }}

                                <div class="form-group row">
                                    <label for="pseudo" class="col-md-4 col-form-label text-md-right">{{ __('Pseudo') }}</label>
                                    <div class="col-md-6">
                                        <input id="pseudo" type="text" class="form-control @error('pseudo') is-invalid @enderror" name="pseudo" value="{{ old('pseudo') }}" required autocomplete="pseudo" autofocus>
                                        @error('pseudo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Armure') }}</label>
                                    <div class="col-md-6">
                                        <input id="id_armure" type="armure" class="form-control @error('armure') is-invalid @enderror" name="armure" value="{{ old('armure') }}"  autocomplete="armure">

                                        @error('armure')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="race" class="col-md-4 col-form-label text-md-right">{{ __('Race') }}</label>
                                    <div class="col-md-6">
                                        <input id="race" type="text" class="form-control @error('race') is-invalid @enderror" name="race" value="{{ old('race') }}"  autocomplete="race" autofocus>

                                        @error('race')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="pseudo" class="col-md-4 col-form-label text-md-right">{{ __('Classe') }}</label>
                                    <div class="col-md-6">
                                        <input id="detail" type="text" class="form-control @error('detail') is-invalid @enderror" name="classe" value="{{ old('detail') }}"  autocomplete="detail" autofocus>

                                        @error('detail')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-6">
                                <button type="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>