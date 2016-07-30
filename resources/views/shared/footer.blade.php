        <footer class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>{{ trans('messages.direction') }}</p>
                        <p>
                            <i class="fa fa-map" aria-hidden="true"></i>
                            {{ Config::get('Contact.address') }}
                        </p>

                        <p>{{ trans('messages.phones') }}</p>
                        @foreach (Config::get('Contact.telephones') as $telephone)
                            <i class="fa fa-phone" aria-hidden="true"></i> {{ $telephone }}
                            <br>
                        @endforeach

                        <p>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            {{ Config::get('Contact.email') }}
                        </p>
                    </div>

                    <div class="col-md-6">
                        <img
                            class="pull-right"
                            src="https://dl.dropboxusercontent.com/s/gwmqrocq9hffaks/lg.png?dl=0"
                            alt="Proyecto Apicola - UCC León">
                    </div>
                </div>
            </div>
        </footer>