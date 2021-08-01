<div>
    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            <input class="btn-check" id="btn-light-theme" type="radio" name="theme-switch" autocomplete="off" value="light" onchange="handleThemeChange(this)">
            <label class="btn btn-dark" for="btn-light-theme">
                <svg class="icon">
                    <use xlink:href="{{asset('vendor/@coreui/icons/svg/free.svg#cil-sun')}}"></use>
                </svg>
            </label>
            <input class="btn-check" id="btn-dark-theme" type="radio" name="theme-switch" autocomplete="off" value="dark" onchange="handleThemeChange(this)">
            <label class="btn btn-dark" for="btn-dark-theme">
                <svg class="icon">
                    <use xlink:href="{{asset('vendor/@coreui/icons/svg/free.svg#cil-moon')}}"></use>
                </svg>
            </label>
        </div>
</div>
