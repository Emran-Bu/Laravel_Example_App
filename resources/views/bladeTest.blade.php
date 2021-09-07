<h1>Blade Test {{ 10 + 2 }}</h1>
<h1>{{ 'this' }}</h1>
<h1>{{ 'Sum 10 + 2 = ' . 10 + 2 . ', ' . 'Sub 10 - 2 = ' . 10 - 2 . ', ' . 'Mul 10 * 2 = ' . 10 * 2 . ', ' . 'Div 10  2 = ' . 10 / 2}} </h1>

{{-- <h1>Hello {{ $name }}</h1> --}}

@if($name == 'Emran')
<h1>Hello {{ $name }}</h1>
@elseif($name == 'Hasan')
<h1>Hello {{ $name }}</h1>
@else
<h1>Hello Unknown</h1>

@for($i = 1; $i <= 5; $i++)
<h1>{{ $i }}</h1>
@endfor
@csrf
@foreach($name as $user)
<h1><?php echo $user ?></h1>
@endforeach

{{-- view in view --}}
@include('about')

{{-- php in js --}}
<script>
    var data = @json($name);
    console.warn(data[2]);
    console.warn(data);
</script>

@endif
