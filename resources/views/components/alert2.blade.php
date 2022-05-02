@props(['color' => 'purple'])

<div role="alert" {{$attributes}}>
    <div class="bg-{{$color}}-500 text-white font-bold rounded-t px-4 py-2">
      {{$title}}
    </div>
    <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
      <p>{{$slot}}</p>
    </div>
  </div>