<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('ADMIN') }}
        </h2>
        
    </x-slot>

                <div class="py-12">
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                            <div class="p-6 text-gray-900 dark:text-gray-100">
                            <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="card">
                                <div class="card-header">Subir Vehiculo</div>

                                <div class="card-body">
                                    <form method="POST" action="{{ route('vehiculos.store') }}">
                                        @csrf

                                        <div class="form-group">
                                            <label for="nombre">Nombre del Vehiculo</label>
                                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="tipo">Tipo</label>
                                            <input type="text" name="tipo" id="tipo" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="capacidad">Capacidad</label>
                                            <input type="number" name="capacidad" id="capacidad" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="color">Color</label>
                                            <input type="text" name="color" id="color" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="precio">Precio</label>
                                            <input type="number" name="precio" id="precio" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="estado">Estado</label>
                                            <input type="number" name="estado" id="estado" class="form-control" required>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Guardar Vehiculo</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
