<h1>this is the header</h1>

@foreach ($sathiharu as $key => $value)
<li>{{$key}}=>{{$value}}</li>
@endforeach

@forelse($sathiharu as $sathi)
<ol>{{$sathi}}</ol>
@empty
<h2>you do not have sathi</h2>
<!-- runs when there is empty array -->
@endforelse