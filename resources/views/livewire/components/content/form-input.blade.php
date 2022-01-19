<div class="form-group mb-3">
    <label  class="form-label font-bold"  for="{{ $identifier }}">{{ __(replaceUnderScore($name)) }}</label>
    <input class=" form-control {{ $classes }} " type="{{ $type }}" id="{{ $identifier }}" name="{{ $name }}" placeholder="{{ __($placeholder) }}" {{ $attributes }} value="{{ $value }}"/>
</div>

