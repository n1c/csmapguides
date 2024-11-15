@extends('_layouts.main')

@section('body')
<section class="container mx-auto space-y-4 max-w-3xl text-lg">
    <h1 class="text-4xl">Introduction</h1>

    <p>Map Guides are a feature in Counter-Strike that allow players to store and share line-ups. This could be anything from grenade line-ups to optimal bomb plant positions or nerdy wallbangs.</a>

    <p>Technically they are text files with a specific format, stored in the <code>\Steam\steamapps\common\Counter-Strike Global Offensive\game\csgo\annotations\</code> directory.</p>

    <hr>

    <h1 class="mb-4 text-2xl">How to use Map Guides</h1>

    <p>Either load a map by going to Play → Practice and toggle "Load Map Guides" on, or load the map via the console and enable annotations with <code>sv_allow_annotations true</code>.</p>

    <p>You can then load a <em>specific</em> guide file with the <code>annotation_load</code> console command e.g. <code>annotation_load train_smokes</code>.</p>

    <hr>

    <h1 class="mb-4 text-2xl">How to create Map Guides</h1>

    <p>Individual annotations are created with the <code>annotation_create</code> command, and annotation files are saved with the <code>annotation_save</code> command.</p>

    <p>There are five types of annotations:</p>

    <h3>Grenade</h3>
    <p><code>annotation_create grenade "label"</code></p>
    <p>Creates a grenade annotation with the specified label value.</p>
    <hr>

    <h3>Position</h3>
    <p><code>annotation_create position "label"</code></p>
    <p>Creates a position annotation with the specified label value.</p>
    <hr>

    <h3>Text</h3>
    <p><code>annotation_create text "title" "text" float|surface [faceplayer]</code></p>
    <p>Creates a floating text annotation with the specified title and text values. You can use either the "float" or "surface" options to have it float in space or on the targetted surface respectively.</p>
    <hr>

    <h3>Line</h3>
    <p><code>annotation_create line float|surface [new]</code></p>
    <p>Creates a line annotation with the specified float or surface value as with text annotations.</p>
    <hr>

    <h3>Spot</h3>
    <p><code>annotation_create spot</code></p>
    <p>Creates a spot annotation for where the player should aim.</p>
    <hr>

    <p>A simple example of some of these commands in action can be seen here demonstrated by <a href="https://x.com/Mecke_Dev" class="link" target="_blank">@Mecke_Dev</a>:</p>

    <blockquote class="twitter-tweet" data-media-max-width="560"><p lang="en" dir="ltr">As a little follow up, another Idea for the new Annotation System. <br>You can not only share grenade lineups, you can also use it to share good positions for a wallbang or something like that<br><br>Here an example of the Mirage Banger from <a href="https://twitter.com/TrilluXe?ref_src=twsrc%5Etfw">@TrilluXe</a> <a href="https://t.co/V7wfNAoHkA">https://t.co/V7wfNAoHkA</a> <a href="https://t.co/jUPCHRumFx">pic.twitter.com/jUPCHRumFx</a></p>&mdash; Mecke_Dev (@Mecke_Dev) <a href="https://twitter.com/Mecke_Dev/status/1857210083274641719?ref_src=twsrc%5Etfw">November 14, 2024</a></blockquote>
</section>
@endsection

@push('scripts')
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@endpush
