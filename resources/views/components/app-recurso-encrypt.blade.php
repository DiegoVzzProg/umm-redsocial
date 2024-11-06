@switch($opcion_recurso)
    @case(1)
        <img src="{{ $photoUrl }}" loading="lazy" alt="_" srcset="" class="{{ $css_formato }}">
    @break

    @case(2)
        <video src="{{ $photoUrl }}" class="{{ $css_formato }}" controls></video>
    @break

    @default
@endswitch

