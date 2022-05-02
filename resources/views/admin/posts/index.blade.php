@extends('layouts.app')

@section('metaTitle', 'DB BOOLPRESS | HOMEPAGE')

@section('content')

    <section id="section_table_posts">
        
        {{-- Title --}}
        <h3>Posts</h3>
    
        {{-- Table posts --}}
        <table class="table_posts">
    
            {{-- Table header --}}
            <tr>
                <th>id</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Description</th>
                <th>Image</th>
                <th>Publication_date</th>
            </tr>
    
            {{-- Foreach posts --}}
            @foreach ($posts as $element)
                <tr>
                    <td>{{$element->id}}</td>
                    <td>{{$element->title}}</td>
                    <td>{{$element->slug}}</td>
                    <td>{{$element->description}}</td>
                    <td>
                        <figure class="img_wrapper">
                            <img src="{{$element->image}}" alt="">
                        </figure>
                    </td>
                    <td>{{$element->publication_date}}</td>
                    <td><a href="http://">Visualizza</a></td>
                    <td><a href="http://">Modifica</a></td>
                    <td><a href="http://">Elimina</a></td>
                </tr>
            @endforeach
    
        </table>

    </section>
   
@endsection