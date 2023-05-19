    <form class="mb-3 form_container" id="form" method="post" enctype="multipart/form-data">
        @csrf
        <p style="text-align: left;">
            <a href="{{ route('LangChange','en') }}">EN</a>
            <a href="{{ route('LangChange','ar') }}">AR</a>
        </p>

        <div class="form-floating mb-3">
            <input type="text" name="name" id="name" class="form-control" placeholder="text"/>
            <label for="name" class="form-label">{{__('MYlang.Full Name')}}</label>
            <span class="text-danger error-text name_error"></span>
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="user_name" id="username" class="form-control" placeholder="text"/>
            <label for="user_name" class="form-label">{{__('MYlang.UserName')}}</label>
            <span class="text-danger error-text username_error"></span>
        </div>

        <div class="form-floating mb-3">
            <input type="date" name="birthdate" id="birthdate" class="form-control"/>
            <label for="birthdate" class="form-label">{{__('MYlang.Birth Date')}}</label>
            <div id="actors"></div>
            <button class="button btn--one" type="button" id="button">Check</button>
            <span class="text-danger error-text birthdate_error"></span>
        </div>

        <div class="form-floating mb-3">
            <input type="tel" name="phone" id="phone" class="form-control" placeholder="tel"/>
            <label for="phone" class="form-label">{{__('MYlang.Phone Number')}}</label>
            <span class="text-danger error-text phone_error"></span>
        </div>

        <div class="form-floating mb-3">
            <input type="text" name="address" id="address" class="form-control" placeholder="text"/>
            <label for="address" class="form-label">{{__('MYlang.Address')}}</label>
            <span class="text-danger error-text address_error"></span>
        </div>

        <div class="form-floating mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
            <label for="password">{{__('MYlang.Password')}}</label>
            <span class="text-danger error-text password_error"></span>
        </div>

        <div class="form-floating mb-3">
            <input type="password" name="conf_pass" id="conf_pass" class="form-control" placeholder="Password"/>
            <label for="conf_pass" class="form-label">{{__('MYlang.Confirm Password')}}</label>
            <span class="text-danger error-text conf_pass_error"></span>
        </div>

        <div class="form-floating mb-3">
            <input type="file" name="image" id="image" class="form-control" placeholder="Image"/>
            <label for="image" class="form-label">{{__('MYlang.Upload Image')}}</label>
            <span class="text-danger error-text image_error"></span>
        </div>

        <div class="form-floating mb-3">
            <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com"/>
            <label for="email" class="form-label">{{__('MYlang.Email')}}</label>
            <span class="text-danger error-text email_error"></span>
        </div>

        <input type="hidden" name="ajax" value="1">
        <button class="button main" type="submit">{{__('MYlang.Submit')}}</button>
    </form>


