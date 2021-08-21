@extends('layouts.main')
@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
         <div class="form-group">
            <label for="image">Imagem do evento:</label>
            <input type="file" class="form-control-file" id="image" name="image" >
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento" >
        </div>
        <div class="form-group">
            <label for="date">Data:</label>
            <input type="date" class="form-control" id="date" name="date" >
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento" >
        </div>
        <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição</label>
            <textarea class="form-control" name="description" id="description" placeholder="O que vai acontecer no evento?"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Adicione itens de premiação</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Booster Promo"> Booster Promo
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Ar condicionado"> Ar condicionado
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Live"> Live
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
</form>
</div>




@endsection