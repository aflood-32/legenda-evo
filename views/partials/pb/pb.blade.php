@foreach($pagebuilder as $element)
    @include('partials.pb.blocks.'.$element['config'], ['block'=> isset($element['block']) ? $element['block'] : $element])
@endforeach
