<hr><hr>
<div>
    {{-- passing Component data --}}
    <h2>{{ $title }}</h2>
    <h4>{{ $subTitle }}</h4>
    <p>{{ $description }} </p>

    {{-- Passing data by Method --}}
    <p>{{$addNumber(50)}}</p>

    {{-- passing data class Attributes by Veriables --}}
    <h1 class="myclass{{$title}}">Hello </h1>

    {{-- Adding Extra Class in Attributes --}}
    <h2 {{ $attributes }}>Hello</h2>

    <div {{ $attributes }}>
        Run
    </div>

</div>
<hr><hr>