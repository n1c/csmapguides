@extends('_layouts.main')

@section('body')
<section class="container px-6 py-10 mx-auto space-y-4 max-w-xl text-lg md:py-12">
    <h1 class="mb-4 text-4xl">Building a community-driven map guide archive.</h1>

    <p>In the <a href="https://store.steampowered.com/news/app/730/view/4458095069430284352" class="link" target="_blank">November 14, 2024</a> update, Valve announced a new feature for Counter-Strike 2: <span class="font-semibold">Map Guides</span>. This is a way to store and share grenade line-ups.</p>

    <div class="p-4 space-y-2 font-mono text-base">
        <p>[ MAP GUIDES ]</p>
        <p>Added a map guide for Train, which demonstrates four simple Terrorist grenade line-ups. To load a map guide, go to Play → Practice and toggle "Load Map Guides" on.</p>
        <p>Added concommands annotation_* which enable the creation, saving, and loading of map guide nodes and files, which are stored in /annotations/.</p>
    </div>

    <p>This site intends to be a place for the community to share and find these map guide files, which contain grenade line-ups.</p>

    <p>If you'd like to get involved, please email me at <a href="mailto:hi@n1c.dev" class="link" target="_blank">hi@n1c.dev</a> or start a discussion on the <a href="https://github.com/n1c/csmapguides/discussions" class="text-orange-500 underline" target="_blank">Github repo</a>.</p>
</section>
@endsection
