@extends('layouts.app')

@section('botones')
    <a  href="{{ route("customer.index") }}"class="btn btn-primary">Regresar</a>
@endsection

@section('content')

    <h1 class="text-center">Crear Cliente</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <form class="form-group" action="{{ route("customer.store") }}" method="post" novalidate>
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <label for="name">Nombre</label>
                        <input 
                        class="form-control @error('name') is-invalid @enderror" 
                        id="name" 
                        type="text" 
                        name="name" 
                        placeholder="Nombre de cliente"
                        value="{{ old('name') }}"
                        >

                        @error('name')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror

                    </div>

                    <div class="col-md-4">
                        <label for="email">Correo</label>
                        <input class="form-control @error('email') is-invalid @enderror" id="correo" type="text" name="email" placeholder="Correo de cliente" > 
                        @error('email')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>


                    <div class="col-md-4">
                        <label for="phone">Telefono</label>
                        <input class="form-control @error('phone') is-invalid @enderror" id="phone" type="text" name="phone" placeholder="Telefono de cliente" >
                        @error('phone')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>


                </div>

                <div class="row mt-2">
                    <div class="col-md-12">
                        <label for="phone">Dirección</label>
                        <input class="form-control @error('address') is-invalid @enderror" id="address" type="text" name="address" placeholder="Direccion de cliente" >
                        @error('address')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>
                </div>



                <div class="row">
                    <div class="py-4 col-md-12">
                        <input type="submit" class="btn btn-success btn-block" value="Guardar">
                    </div>
                </div>


            </form>



        </div>
    </div>



@endsection