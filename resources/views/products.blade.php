@extends('layout')
@section('content')
<?php foreach ($products as $product): ?>
<div>
    <?= $product; ?>
</div>
<?php endforeach; ?> 
@endsection

    
