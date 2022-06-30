<form action={{$action}} method="post">
    @csrf
    @isset($update) 
        @method('PUT')
    @endisset
    <div class="form-group">
        <label for="nome" class="">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome"
            @isset($nome) value="{{$nome}}" @endisset
        >
    </div>

    <button class="btn btn-primary">{{$botao}}</button>
</form>