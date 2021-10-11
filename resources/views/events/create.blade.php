@extends('layouts.main')
@section('title', 'Criar Evento')
@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1> Crie o seu evento </h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image"> Imagem do Evento: </label>
                <input type="file" id="image" name="image" class="from-control-file">   
            </div>
            <div class="form-group">
                <label for="title"> Evento: </label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento...">
            </div>
            <div class="form-group">
                <label for="date"> Data do Evento: </label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <div class="form-group">
                <label for="title"> Cidade: </label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento...">
            </div>
            <div class="form-group">
                <label for="title"> O Evento é privado?  </label>
                <select name="private" id="private" class="form-control">
                    <option value="0"> Não </option>
                    <option value="1"> sim </option>
                </select>
            </div>
            <div class="form-group">
                <label for="title"> Descrição do Evento: </label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            <div class="form-group">
                <label for="title"> Items de Infraestrutura: </label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="" value="Open Bar"> Open Bar
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="" value="Open Food"> Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" id="" value="Brindes"> Brindes
                </div>
            </div>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>
@endsection