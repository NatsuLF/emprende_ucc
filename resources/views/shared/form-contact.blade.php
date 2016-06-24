<div class="col-md-6">
    <div class="panel panel-primary">
        <div class="panel-heading">Contactanos</div>
        <div class="panel-body">
            <div class="container col-md-12">
                <form action="sendMail" method="post" role="form" data-toggle="validator">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="control-label">Nombre</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="mail" class="control-label">Correo</label>
                        <input type="email" class="form-control" name="mail" id="mail" required>
                    </div>
                    <div class="form-group">
                        <label for="body" class="control-label">Mensaje</label>
                        <textarea id="text" class="form-control" rows="1" name="body" id="body"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>