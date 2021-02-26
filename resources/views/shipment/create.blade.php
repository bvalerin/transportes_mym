@extends('layouts.app')

@section('buttons')
    <a  href="{{ route("shipments.index") }}"class="btn btn-primary">Regresar</a>
@endsection

@section('content')

    <h1 id="new_shipment_label" class="text-center">Nuevo despacho</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <form class="form-group" action="{{ route("customers.store") }}" method="post" novalidate>
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label>Seleccione un cliente</label>
                        <input type="text" class="form-control" id="input_search_customer" list="customers_list" placeholder="Cliente" />
                        <datalist id="customers_list">
                            @foreach($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </datalist>
                    </div>
                </div>

                <div class="mt-2 row">
                    <div class="col-md-4">
                        <label for="name">Origen</label>
                        <input
                        class="form-control @error('origin') is-invalid @enderror" 
                        id="name" 
                        type="text" 
                        name="name" 
                        placeholder="Origen"
                        value="{{ old('origin') }}">
                        @error('origin')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label for="email">Destino</label>
                        <input class="form-control @error('destination') is-invalid @enderror" id="destination" type="text" name="destination" placeholder="Destino" > 
                        @error('destination')
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
                    <div class="col-md-4">
                        <label for="phone">Fecha Colocacion</label>
                        <input class="form-control @error('shipment_date') is-invalid @enderror" id="shipment_date" type="date" name="shipment_date" >
                        @error('shipment_date')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <h3>Datos de equipo a usar</h3>
                <div class="row">
                    <div class="col-md-4">
                        <label>Numero de contenedor</label>
                        <input name="container_number" id="container_number" placeholder="Numero de contenedor" class="form-control" />
                        @error('container_number')
                        <span class="invalid-feedback d-block"  role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label>Numero de Chasis</label>
                        <input name="chasis_number" id="chasis_number" placeholder="Numero de Chasis" class="form-control" />
                        @error('chasis_number')
                        <span class="invalid-feedback d-block"  role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label>Numero de contenedor</label>
                        <input name="container_number" id="container_number" placeholder="Numero de contenedor" class="form-control" />
                        @error('container_number')
                        <span class="invalid-feedback d-block"  role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <h3>Datos de conductor</h3>
                <div class="row">
                    <div class="col-md-4">
                        <label>Numero de placa</label>
                        <input name="vehicle_plate" id="vehicle_plate" placeholder="Numero de placa" class="form-control" />
                        @error('vehicle_plate')
                        <span class="invalid-feedback d-block"  role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label>Tamaño</label>
                        <input name="chasis_number" id="chasis_number" placeholder="Numero de Chasis" class="form-control" />
                        @error('chasis_number')
                        <span class="invalid-feedback d-block"  role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <label>Numero de ejes</label>
                        
                        <select class="form-control" name="vehicle_axle" id="vehicle_axle">
                            <option value="2">2 ejes</option>
                            <option value="3">3 ejes</option>
                            <option value="4">4 ejes</option>
                            <option value="5">5 ejes</option>
                            <option value="6">6 ejes</option>
                        </select>

                        @error('container_number')
                        <span class="invalid-feedback d-block"  role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label>Instrucciones</label>
                        <textarea name="instructions" id="instructions" placeholder="Instruciones del despacho solicitado..." class="form-control" colspan="4">
                        </textarea>
                        @error('contact')
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