<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title','default title')</title>
        <link rel="stylesheet" href="{{ asset('css/reg.css') }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

    </head>

    <body style="margin:0px;">
        @section('menu')
        <!--
            <header>
                <img src="{ { asset('images/logo.png') }}" alt="Logo">
            </header>

            <main>
               @ yield('menu')
            </main>
        -->

        <form class="mb-3 form_container" id="form" method="post" enctype="multipart/form-data">
                <div class="form-floating mb-3">
                    <input type="text" name="name" id="name" class="form-control" placeholder="text"/>
                    <label for="name" class="form-label">Full Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="username" id="username" class="form-control" placeholder="text"/>
                    <label for="username" class="form-label">UserName</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="date" name="birthdate" id="birthdate" class="form-control"/>
                    <label for="birthdate" class="form-label">Birth Date</label>
                    @foreach ($data1 as $name)
                        <p>{{ $name['name']  }}</p>
                    @endforeach
                    <button class="button btn--one" type="button" id="button">Check</button>
                </div>

                <div class="form-floating mb-3">
                    <input type="tel" name="phone" id="phone" class="form-control" placeholder="tel"/>
                    <label for="phone" class="form-label">Phone Number</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" name="address" id="address" class="form-control" placeholder="text"/>
                    <label for="address" class="form-label">Address</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
                    <label for="password">Password</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="password" name="conf_pass" id="conf_pass" class="form-control" placeholder="Password"/>
                    <label for="conf_pass" class="form-label">Confirm Password</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com"/>
                    <label for="email" class="form-label">Email</label>
                </div>

            <button class="button main" type="submit">Submit</button>
        </form>
        @show
    </body>

    <script>
    $(document).ready(function() {
        $('#button').click(function() {
            $.ajax({
                url: "{{ route('rapidapi.getdata' , ['date' => "+ $('#birthdate').value +"]) }}",
                type: "GET",
                success: function(data) {
                    $('#actors').append(data);
                }
            });
        });
    });
</script>
</html>
