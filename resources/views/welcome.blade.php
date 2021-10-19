<style>
    .myclass{
        color: brown;
    }
</style>

<h1>Component Features</h1>
@php
// Passing Data By Row php Veriable
 $desc = 'This is Description in Head';   
@endphp

{{-- Passing Folder Component --}}
<x-inc.header />

{{-- Adding Attributes in Component --}}
<x-card title="First  Right One Title" sub-title="This is Sub Title" description="This is Description" />
<x-card title="First  Right One Title Two" sub-title="This is Sub Title 2" description="This is Description" />

{{-- Adding description or Other Attribute Data by Veriable --}}
<x-card title="Use By Veriable" sub-title="This is Sub Title 2" :description=$desc />

{{-- adding Style Class in Component --}}
<x-card title="Use By Veriable" sub-title="This is Sub Title 2" :description=$desc />

{{-- Adding Class in Component --}}
<x-card title="Adding Class Data" sub-title="This is Sub Title 2" :description=$desc class="myclass" />

{{-- Anonymous Component --}}
<x-go title="Adding Class Data" sub-title="This is Sub Title 2" :description=$desc />

{{-- Using Slot --}}
<x-alert>
    <x-slot name='title'>Alert Title</x-slot>
    <span>Hello I am Alert</span>
</x-alert>



