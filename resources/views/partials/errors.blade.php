@if ($errors->any())
    <section class="section">
        <div class="columns is-centered">
            <div class="column is-6">
                <div class="notification is-danger">
                    <strong>Whoops!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endif