@extends('layout')

@section('content')
    <div class="container">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Importar archivos CSV</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="file">Seleccione un archivo .CSV</label>
                            <input type="file" name="file" id="file" class="form-control-file">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">
                                Subir
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection