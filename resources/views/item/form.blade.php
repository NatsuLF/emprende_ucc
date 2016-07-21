<div class="form-group">
    <label for="name">Nombre del producto</label>
    <input type="text" id="name" name="name" value="{{ isset($item) ? $item->name : '' }}" class="form-control" autofocus="true" required>
</div>

<div class="form-group">
    <label for="description">Descripción</label>
    <textarea
    id="description"
    name="description"
    id="input"
    class="form-control"
    rows="3" required>{{ isset($item) ? $item->description : ''}}</textarea>
</div>

<div class="form-group">
    <label for="price">Precio</label>
    <input type="number" name="price" id="price" value="{{ isset($item) ? $item->price : '' }}" class="form-control" required>
</div>


<div id="album">
    <a href="#" id="cloneImageTextBox" class="btn btn-success btn-xs pull-right">
        <i class="fa fa-clone" aria-hidden="true"></i>
    </a>
    @if (isset($item))
        @foreach ($item->images as $img)
            <div class="form-group images">
                <label for="url">Imagen del producto</label>
                <input type="url" name="url[]" id="url" value="{{ $img->url }}" class="form-control" required>

                <a href="{{ url('images/remove/' .$img->id) }}" class="btn btn-danger btn-xs pull-right">
                    <i class="fa fa-trash-o fa-lg" aria-hidden="true"></i>
                </a>
            </div>
        @endforeach
    @else
        <div class="form-group images">
            <label for="url">Imagen del producto</label>
            <input type="url" name="url[]" id="url" class="form-control" required>
        </div>
    @endif
</div>