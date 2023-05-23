<div class='header_container'>
<img src='images/logo.png' height='190px' weight='190px'>
<h1>{{__('MYlang.Registration Form')}}</h1>

<select style="text-align: left;" class="form-select form-select-sm" aria-label=".form-select-sm example" onchange="if (this.value) window.location.href = this.value;">
    <option>language</option>
    <option value="{{ route('LangChange','en') }}">EN</option>
    <option value="{{ route('LangChange','ar') }}">AR</option>
</select>

</div>

