@extends('layouts.app')

@section('content')
    <App user="{{ auth()->user() }}" />
    
    <!-- <v-container>
        <v-btn depressed color="primary">Primary</v-btn>
        
    </v-container> -->


@endsection
