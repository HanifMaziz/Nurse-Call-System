<!-- resources/views/components/svg-icon.blade.php -->
<svg 
    xmlns="http://www.w3.org/2000/svg" 
    fill="currentColor" 
    viewBox="0 0 24 24" 
    stroke="{{ $class }}" 
    aria-hidden="true">
    <use href="{{ asset('icons/' . $path) }}" />
</svg>
