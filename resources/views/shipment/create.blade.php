@extends('layouts.app')

@section('buttons')
    <a  href="{{ route("shipments.index") }}"class="btn btn-primary">Regresar</a>
@endsection

@section('content')

    <h1 id="new_shipment_label" class="text-center">Nuevo despacho</h1>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <form class="form-group" action="{{ route("shipments.store") }}" method="post" novalidate>
                @csrf
                <h3 id="h3_customer">Cliente: </h3>
                <div class="row">
                    <div class="col-md-8">
                        <label>Seleccione un cliente</label>
                        <input type="text" value="{{ old("customer_id") }}" class="form-control" name="customer_id" id="input_search_customer" list="customers_list" placeholder="Cliente" />
                        @error('customer_id')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                        <datalist id="customers_list">
                            @foreach($customers as $customer)
                                <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                            @endforeach
                        </datalist>
                    </div>

                    <div class="col-md-4">
                        <label for="phone">Fecha Colocacion</label>
                        <input value="{{ old("shipment_date")}}" class="form-control @error('shipment_date') is-invalid @enderror" id="shipment_date" type="date" name="shipment_date" >
                        @error('shipment_date')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <div class="mt-2 row">
                    <div class="col-md-6">
                        <label for="name">Origen</label>
                        <input
                        class="form-control @error('origin') is-invalid @enderror" 
                        id="name" 
                        type="text" 
                        name="origin" 
                        placeholder="Origen"
                        value="{{ old('origin') }}">
                        @error('origin')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="email">Destino</label>
                        <input value="{{ old('destination') }}" class="form-control @error('destination') is-invalid @enderror" id="destination" type="text" name="destination" placeholder="Destino" > 
                        @error('destination')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <hr>
                <h3>Datos de equipo a usar</h3>
                <div class="row">
                    <div class="col-md-3">
                        <label>Numero de contenedor</label>
                        <input value="{{ old("container_number") }}" name="container_number" id="container_number" placeholder="Numero de contenedor" class="form-control" />
                        @error('container_number')
                        <span class="invalid-feedback d-block"  role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label>Numero de Chasis</label>
                        <input value="{{ old("chasis_number") }}" name="chasis_number" id="chasis_number" placeholder="Numero de Chasis" class="form-control" />
                        @error('chasis_number')
                        <span class="invalid-feedback d-block"  role="alert">
                            <strong> {{ $message }} </strong>
                        </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label>Numero de placa</label>
                        <input value="{{ old("container_plate") }}" name="container_plate" id="container_plate" placeholder="Numero de placa" class="form-control" />
                        @error('container_plate')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-3">
                        <label for="email">Ejes</label>

                        <select class="form-control @error('vehicle_axle') is-invalid @enderror" name="vehicle_axle" id="vehicle_axle" >
                            <option value="2" {{ old("vehicle_axle") == 2 ? 'selected' :""}}>2 ejes</option>
                            <option value="3" {{ old("vehicle_axle") == 3 ? 'selected' :""}}>3 ejes</option>
                            <option value="4" {{ old("vehicle_axle") == 4 ? 'selected' :""}}>4 ejes</option>
                            <option value="5" {{ old("vehicle_axle") == 5 ? 'selected' :""}}>5 ejes</option>
                        </select>
                        @error('vehicle_axle')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>

                </div>

                <hr>


                <h3 id="h3_driver">Chofer: </h3>
                <div class="row">

                    <div class="col-md-8">
                        <label>Seleccione un Chofer</label>
                        <input value="{{ old("driver_id") }}" name="driver_id" type="text" class="form-control" id="input_search_driver" list="drivers_list" placeholder="Chofer" />
                        @error('driver_id')
                            <span class="invalid-feedback d-block"  role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                        <datalist id="drivers_list">
                            @foreach($drivers as $driver)
                                <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                            @endforeach
                        </datalist>
                    </div>

                    <div class="col-md-4">
                        <label>Placa</label>
                        <input type="text" class="form-control" id="vehicle_plate" name="vehicle_plate" placeholder="Placa" />
                        @error('vehicle_plate')
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