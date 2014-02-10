@extends('layouts.show')

@foreach($comments as $comment)

<div style="background: #000;">{{ $comment->name}}</div>

@endforeach