<div class="col-md-8 col-md-offset-2">
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-success">
      <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <h3 class="panel-title glyphicon glyphicon-check"> {{ trans('messages.mission') }}</h3>          </a>
        </h4>
      </div>
      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
          <p class="text-justify">{{ trans('messages.mission_content') }}</p>
        </div>
      </div>
    </div>
    <div class="panel panel-success">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <h3 class="panel-title glyphicon glyphicon-blackboard"> {{ trans('messages.view') }}</h3>
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="panel-body">
          <p class="text-justify">{{ trans('messages.view_content') }}</p>
        </div>
      </div>
    </div>
  </div>
</div>