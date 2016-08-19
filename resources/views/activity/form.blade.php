<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="date">Fecha</label>
            <input id="date" name="date" value="{{ isset($activity->date) ? $activity->date : '' }}" class="form-control">
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="lugar">Lugar</label>
            <input id="location" name="location" value="{{ isset($activity->location) ? $activity->location : '' }}" class="form-control">
        </div>
    </div>
</div>

<div class="form-group">
    <label for="name">Nombre de la actividad</label>
    <input id="name" name="name" value="{{ isset($activity->name) ? $activity->name : '' }}" class="form-control">
</div>