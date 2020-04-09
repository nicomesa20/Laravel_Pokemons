@csrf
        <div class="form-group">
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control" value="@isset($trainer->name){{$trainer->name}}@endisset">
        </div>
        <div class="form-group">
            <label for="">Slug:</label>
            <input type="text" name="slug" class="form-control" value="@isset($trainer->slug){{$trainer->slug}}@endisset"> 
        </div>
        <div class="form-group">
            <label for="">Avatar</label>
            <input type="file" name="avatar">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>