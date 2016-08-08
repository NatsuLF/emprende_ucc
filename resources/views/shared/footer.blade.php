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
                <br>
                <p>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    {{ Config::get('Contact.email') }}
                </p>
            </div>
        </div>
    </div>
</footer>