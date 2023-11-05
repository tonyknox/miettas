<x-guest-layout>

<x-slot:header></x-slot:header>
<x-slot:sidebar></x-slot:sidebar>

<x-slot:main>
    <div class="visible sm:invisible">
        @include('includes/searchbox')
    </div>
    <div class="invisible sm:visible float-right">
        @include('includes/searchbox')
    </div>

    <h3>Quantities</h3>

    <p>
        {!! $quantity->pre_qty . ' ' ?? '' !!}
        {!! $quantity->qty . ' ' ?? '' !!}
        {!! $quantity->unit . ' ' ?? '' !!}
        {!! $quantity->before_ing . ' ' ?? '' !!}
        {!! $quantity->ingredient . ' ' !!}
        {!! $quantity->after_ing . ' ' ?? '' !!}<br />

        <strong>Description:</strong> {!! $quantity->description !!}

    </p>
    <br /><br />
</x-slot:main>

<x-slot:footer>
    <span style="text-align:center">
        @include('/includes/nextPrev', [
            'tble' => 'quantities',
            'id' => $quantity->qid,
            'editTable' => 'qid',
            'text' => 'Quantity',
        ])
    </span>
</x-slot:footer>
</x-guest-layout>
