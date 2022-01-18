<div class="mb-3">
    @if($type !== 'hidden')
        <label for="{{ $identifier }}" class="form-label">{{ replaceUnderScore($name) }}</label>
    @endif
    <input class="{{ $classes }}" type="{{ $type }}" id="{{ $identifier }}" name="{{ $name }}" placeholder="{{ __($placeholder) }}" {{ $attributes }} value="{{ $value }}" />
</div>

