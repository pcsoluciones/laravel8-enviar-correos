<div>
    <div {{$attributes->merge(['class' => "bg-$miColor-100 border-l-4 border-$miColor-500 text-$miColor-700 p-4" ])}}  role="alert">
        <p class="font-bold">{{$title}}</p>     <!--$title es el nombre del slot  -->
        <p>{{$slot}}</p>        <!--Variable SLOT se usa para pasar mensajes  -->
    </div>

    {{$prueba()}}       <!--Método del componente -->
</div>